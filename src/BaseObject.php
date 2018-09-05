<?php
/**
 * Created by PhpStorm.
 * User: Lukyanov Andrey <loveorigami@mail.ru>
 * Date: 29.08.2018
 * Time: 14:37
 */

namespace lo\highcharts;

/**
 * Class BaseObject
 *
 * @package lo\highcharts
 * @author  Lukyanov Andrey <loveorigami@mail.ru>
 */
abstract class BaseObject implements HighchartInterface
{
    /**
     * @return array
     */
    public function classMap(): array
    {
        return [];
    }

    public function getValue($property = null)
    {
        return $property ? $this->$property : null;
    }
}
