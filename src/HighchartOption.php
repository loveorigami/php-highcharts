<?php

namespace lo\highcharts;

use lo\highcharts\chart\Legend;
use lo\highcharts\chart\SubTitle;
use lo\highcharts\chart\Title;
use lo\highcharts\chart\XAxis;
use lo\highcharts\chart\YAxis;
use lo\highcharts\chart\ZAxis;
use lo\highcharts\helpers\ResolverHelper;

/**
 * Represents a HighChart, configured by setting arrays
 */
class HighchartOption extends BaseObject implements \ArrayAccess
{
    /**
     * An array of HighchartOptions
     *
     * @var array
     */
    private $_childs = [];

    /**
     * The option value
     *
     * @var mixed
     */
    private $_value;

    /**
     * @var object
     */
    private $_object;

    /**
     * @return array
     */
    public function classMap(): array
    {
        return [
            'legend' => Legend::class,
            'title' => Title::class,
            'subtitle' => SubTitle::class,
            'xAxis' => XAxis::class,
            'yAxis' => YAxis::class,
            'zAxis' => ZAxis::class,
        ];
    }

    /**
     * The HighchartOption constructor
     *
     * @param       $offset
     * @param mixed $value The option value
     * @param null  $parentObject
     */
    public function __construct($offset, $value = null, $parentObject = null)
    {
        if (!$parentObject && array_key_exists($offset, $this->classMap())) {
            $data = $this->classMap();
            $class = $data[$offset];
            $this->_object = new $class;
        }

        if ($parentObject instanceof HighchartInterface && array_key_exists($offset, $parentObject->classMap())) {
            $data = $parentObject->classMap();
            $class = $data[$offset];
            $this->_object = new $class;
        }

        if ($parentObject && property_exists(\get_class($parentObject), $offset)) {
            if (!$this->_object) {
                $parentObject->{$offset} = $value;
            } else {
                $parentObject->{$offset} = $this->_object;
            }
            $this->_value = $value;
        } elseif (!\is_array($value)) {
            $this->_value = $value;
        } else {
            foreach ($value as $key => $val) {
                $this->offsetSet($key, $val);
            }
        }
    }

    /**
     * Clone HighchartOption object
     */
    public function __clone()
    {
        foreach ($this->_childs as $key => $value) {
            $this->_childs[$key] = clone $value;
        }
    }


    /**
     * Returns the value of the current option
     *
     * @param null $property
     * @return mixed The option value
     */
    public function getValue($property = null)
    {
        $data = [];
        $result = [];

        /** This is a final option */
        if ($this->_value && !$this->_value instanceof HighchartInterface) {
            if (\is_array($this->_value)) {
                $data = $this->_value;
            } else {
                return $this->_value;
            }
        }

        if (\is_array($this->_childs)) {
            foreach ($this->_childs as $key => $value) {

                $arr_key = ResolverHelper::key($key);
                $result[$arr_key] = $value->getValue($key);

                if ($this->_object && !$this->_object->$key instanceof HighchartInterface) {
                    $val = $this->_object->getValue($key);
                    if($val){
                        $result[$arr_key] = $val;
                    }
                }
            }
        }

            return array_merge($data, $result);

    }

    public function __isset($offset): bool
    {
        return $this->offsetExists($offset);
    }

    public function __set($offset, $value): void
    {
        $this->offsetSet($offset, $value);
    }

    public function __get($offset)
    {
        return $this->offsetGet($offset);
    }

    public function offsetSet($offset, $value): void
    {
        if ($offset === null) {
            $this->_childs[] = new self($offset, $value, $this->_object);
        } else {
            $this->_childs[$offset] = new self($offset, $value, $this->_object);
        }
    }

    public function offsetExists($offset): bool
    {
        return isset($this->_childs[$offset]);
    }

    public function offsetUnset($offset): void
    {
        unset($this->_childs[$offset]);
    }

    public function offsetGet($offset)
    {
        if ($offset === null) {
            $this->_childs[] = new self($offset);
        }

        if (!isset($this->_childs[$offset])) {
            $this->_childs[$offset] = new self($offset);
        }

        return $this->_childs[$offset];
    }
}

