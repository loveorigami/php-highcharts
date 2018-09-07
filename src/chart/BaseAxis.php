<?php
/**
 * Created by PhpStorm.
 * User: Lukyanov Andrey <loveorigami@mail.ru>
 * Date: 29.08.2018
 * Time: 11:32
 */

namespace lo\highcharts\chart;

use lo\highcharts\BaseObject;
use lo\highcharts\chart\axis\CrossHair;

/**
 * Class BaseAxis
 *
 * @package lo\highcharts\chart
 * @author  Lukyanov Andrey <loveorigami@mail.ru>
 */
abstract class BaseAxis extends BaseObject
{
    public $alignTicks = true;
    public $allowDecimals = true;
    public $alternateGridColor;
    /** @var array */
    public $breaks = [
        'breakSize' => '0',
        'from' => 'undefined',
        'repeat' => 0,
        'to' => 'undefined',
    ];
    public $categories;
    public $ceiling = 'undefined';
    public $className = 'undefined';
    public $crosshair;
    public $dateTimeLabelFormats;
    public $description = 'undefined';
    public $endOnTick = false;
    public $events;
    public $floor;
    public $gridLineColor = '#e6e6e6';
    public $gridLineDashStyle = 'Solid';
    public $gridLineWidth = 0;
    public $gridZIndex = 1;
    public $id;
    public $labels;
    public $lineColor = '#ccd6eb';
    public $lineWidth = 1;
    public $linkedTo;
    public $max = 'undefined';
    public $maxPadding = 0.01;
    public $maxZoom = 'undefined';
    public $min = 'undefined';
    public $minorGridLineColor = '#f2f2f2';
    public $minorGridLineDashStyle = 'Solid';
    public $minorGridLineWidth = 1;
    public $minorTickColor = '#999999';
    public $minorTickInterval = 'undefined';
    public $minorTickLength = 2;
    public $minorTickPosition = 'outside';
    public $minorTicks = false;
    public $minorTickWidth = 0;
    public $minPadding = 0.01;
    public $minRange = 'undefined';
    public $minTickInterval = 'undefined';
    public $offset = 0;
    public $opposite = false;
    public $pane = 'undefined';
    public $plotBands;
    public $plotLines;
    public $reversed = false;
    public $reversedStacks = false;
    public $showEmpty = true;
    public $showFirstLabel = true;
    public $showLastLabel = true;
    public $softMax = 'undefined';
    public $softMin = 'undefined';
    public $startOfWeek = 1;
    public $startOnTick = false;
    public $tickAmount = 'undefined';
    public $tickColor = '#ccd6eb';
    public $tickInterval;
    public $tickLength = 10;
    public $tickmarkPlacement = 'between';
    public $tickPixelInterval = 100;
    public $tickPosition = 'outside';
    public $tickPositioner = 'undefined';
    public $tickPositions = 'undefined';
    public $tickWidth = 1;
    /** @var AxisTitle */
    public $title;
    public $type = 'linear';
    public $uniqueNames = true;
    public $units = 'undefined';
    public $visible = true;

    /**
     * @return array
     */
    public function classMap(): array
    {
        return [
            'crosshair' => CrossHair::class,
            'title' => AxisTitle::class,
        ];
    }
}
