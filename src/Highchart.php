<?php

namespace lo\highcharts;

use ArrayAccess;
use lo\highcharts\chart\Chart;
use lo\highcharts\chart\Series;
use lo\highcharts\chart\SubTitle;
use lo\highcharts\chart\Title;
use lo\highcharts\chart\XAxis;
use lo\highcharts\chart\YAxis;
use lo\highcharts\chart\ZAxis;

/**
 * Represents a HighChart, configured by setting arrays
 *
 * @property Chart    $chart
 * @property Title    $title
 * @property SubTitle $subtitle
 * @property Series[] $series
 * @property XAxis    $xAxis
 * @property YAxis    $yAxis
 * @property ZAxis    $zAxis
 */
class Highchart implements ArrayAccess
{
    /**
     * The chart options
     *
     * @var HighchartOption []
     */
    private $_options = [];

    /**
     * Get config jason
     *
     * @return string
     */
    public function getJson(): string
    {
        return json_encode($this->getOptions());
    }

    /**
     * Get config array
     *
     * @return array
     */
    public function getOptions(): array
    {
        $config = [];

        foreach ($this->_options as $key => $value) {
            $config[$key] = $value->getValue($key);
        }

        return $config;
    }

    public function __isset($offset)
    {
        $this->offsetExists($offset);
    }

    public function __set($offset, $value)
    {
        $this->offsetSet($offset, $value);
    }

    public function __get($offset)
    {
        return $this->offsetGet($offset);
    }

    public function __clone()
    {
        foreach ($this->_options as $key => $value) {
            $this->_options[$key] = clone $value;
        }
    }

    public function offsetSet($offset, $value): void
    {
        $this->_options[$offset] = new HighchartOption($offset, $value);
    }

    public function offsetExists($offset): bool
    {
        return isset($this->_options[$offset]);
    }

    public function offsetUnset($offset): void
    {
        unset($this->_options[$offset]);
    }

    public function offsetGet($offset): HighchartOption
    {
        if (!isset($this->_options[$offset])) {
            $this->_options[$offset] = new HighchartOption($offset);
        }

        return $this->_options[$offset];
    }
}
