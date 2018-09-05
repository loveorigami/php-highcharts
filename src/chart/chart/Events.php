<?php
/**
 * Created by PhpStorm.
 * User= Lukyanov Andrey <loveorigami@mail.ru>
 * Date= 29.08.2018
 * Time= 12=26
 */

namespace lo\highcharts\chart\chart;

use lo\highcharts\BaseObject;

/**
 * Class Events
 *
 * @package lo\highcharts\chart\chart
 * @author  Lukyanov Andrey <loveorigami@mail.ru>
 * @see     https://api.highcharts.com/highcharts/chart.events
 */
class Events extends BaseObject
{
    public $addSeries = 'undefined';
    public $afterPrint = 'undefined';
    public $beforePrint = 'undefined';
    public $click = 'undefined';
    public $drilldown = 'undefined';
    public $drillup = 'undefined';
    public $drillupall = 'undefined';
    public $load = 'undefined';
    public $redraw = 'undefined';
    public $render = 'undefined';
    public $selection = 'undefined';
}
