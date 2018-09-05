<?php

namespace lo\highcharts;

/**
 * Interface HighchartInterface
 *
 * @package lo\highcharts
 */
interface HighchartInterface
{
    /**
     * @return array
     */
    public function classMap(): array;

    /**
     * @param null $property
     * @return mixed
     */
    public function getValue($property = null);
}
