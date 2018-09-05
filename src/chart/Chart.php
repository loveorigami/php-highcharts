<?php
/**
 * Created by PhpStorm.
 * User: Lukyanov Andrey <loveorigami@mail.ru>
 * Date: 29.08.2018
 * Time: 11=32
 */

namespace lo\highcharts\chart;

use lo\highcharts\BaseObject;
use lo\highcharts\chart\chart\Events;
use lo\highcharts\chart\chart\Options3D;
use lo\highcharts\chart\chart\ParallelAxes;
use lo\highcharts\chart\chart\ResetZoomButton;
use lo\highcharts\chart\chart\ScrollablePlotArea;
use lo\highcharts\chart\html\Style;

/**
 * Class Chart
 *
 * @package lo\highcharts\chart
 * @author  Lukyanov Andrey <loveorigami@mail.ru>
 * @see     https=//api.highcharts.com/highcharts/chart
 */
class Chart extends BaseObject
{
    public $alignTicks = true;
    public $animation = true;
    public $backgroundColor = '#FFFFFF';
    public $borderColor = '#335cad';
    public $borderRadius = 0;
    public $borderWidth = 0;
    public $className = 'undefined';
    public $colorCount = 10;
    public $defaultSeriesType = 'line';
    public $description = 'undefined';
    /** @var Events */
    public $events;
    public $height;
    public $ignoreHiddenSeries = true;
    public $inverted = false;
    public $margin = 'undefined';
    public $marginBottom = 'undefined';
    public $marginLeft;
    public $marginRight;
    public $marginTop;
    /** @var Options3D */
    public $options3d = [];
    public $panKey = 'undefined';
    public $panning = false;
    /** @var ParallelAxes */
    public $parallelAxes = [];
    public $parallelCoordinates = false;
    public $pinchType;
    public $plotBackgroundColor;
    public $plotBackgroundImage;
    public $plotBorderColor = '#cccccc';
    public $plotBorderWidth = 0;
    public $plotShadow = false;
    public $polar = false;
    public $reflow = true;
    public $renderTo = 'undefined';
    /** @var ResetZoomButton */
    public $resetZoomButton;
    /** @var ScrollablePlotArea */
    public $scrollablePlotArea;
    public $selectionMarkerFill = 'rgba(51,92,173,0.25)';
    public $shadow = false;
    public $showAxes = 'undefined';
    public $spacing = [10, 10, 15, 10];
    public $spacingBottom = 15;
    public $spacingLeft = 10;
    public $spacingRight = 10;
    public $spacingTop = 10;
    /** @var Style */
    public $style;
    /** @var Type */
    public $type = 'line';
    public $typeDescription = 'undefined';
    public $width;
    public $zoomType;

    /**
     * @return array
     */
    public function classMap(): array
    {
        return [
            'events' => Events::class,
            'options3d' => Options3D::class,
            'parallelAxes' => ParallelAxes::class,
            'resetZoomButton' => ResetZoomButton::class,
            'scrollablePlotArea' => ScrollablePlotArea::class,
            'style' => Style::class,
            'type' => Type::class,
        ];
    }
}
