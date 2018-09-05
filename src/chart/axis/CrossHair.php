<?php
/**
 * Created by PhpStorm.
 * User: Lukyanov Andrey <loveorigami@mail.ru>
 * Date: 03.09.2018
 * Time: 11:32
 */

namespace lo\highcharts\chart\axis;

/**
 * Class CrossHair
 *
 * @package lo\highcharts\chart\axis
 * @author  Lukyanov Andrey <loveorigami@mail.ru>
 * @see     https://api.highcharts.com/highcharts/xAxis.crosshair
 */
class CrossHair
{
    public $className = 'undefined';
    public $color = '#cccccc';
    public $dashStyle = 'Solid';
    public $snap = true;
    public $width = 1;
    public $zIndex = 2;
}
