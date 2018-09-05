<?php
/**
 * Created by PhpStorm.
 * User: Lukyanov Andrey <loveorigami@mail.ru>
 * Date: 29.08.2018
 * Time: 13:00
 */

namespace lo\highcharts\helpers;

/**
 * Class ConstHelper
 *
 * @package lo\highcharts\helpers
 * @author  Lukyanov Andrey <loveorigami@mail.ru>
 */
class ChartHelper
{
    public const TYPE_AREA = 'area';
    public const TYPE_AREA_RANGE = 'arearange';
    public const TYPE_AREA_SPLINE = 'areaspline';
    public const TYPE_AREA_SPLINE_RANGE = 'areasplinerange';
    public const TYPE_BAR = 'bar';
    public const TYPE_BELL_CURVE = 'bellcurve';
    public const TYPE_BOX_PLOT = 'boxplot';
    public const TYPE_BUBBLE = 'bubble';
    public const TYPE_BULLET = 'bullet';
    public const TYPE_COLUMN = 'column';
    public const TYPE_COLUMN_RANGE = 'columnrange';
    public const TYPE_ERROR_BAR = 'errorbar';
    public const TYPE_FUNNEL = 'funnel';
    public const TYPE_GAUGE = 'gauge';
    public const TYPE_HEAT_MAP = 'heatmap';
    public const TYPE_HISTOGRAM = 'histogram';
    public const TYPE_LINE = 'line';
    public const TYPE_PARETO = 'pareto';
    public const TYPE_PIE = 'pie';
    public const TYPE_POLYGON = 'polygon';
    public const TYPE_PYRAMID = 'pyramid';
    public const TYPE_SAN_KEY = 'sankey';
    public const TYPE_SCATTER = 'scatter';
    public const TYPE_SCATTER_3D = 'scatter3d';
    public const TYPE_SERIES = 'series';
    public const TYPE_SOLID_GAUGE = 'solidgauge';
    public const TYPE_SPLINE = 'spline';
    public const TYPE_STREAM_GRAPH = 'streamgraph';
    public const TYPE_SUNBURST = 'sunburst';
    public const TYPE_TILE_MAP = 'tilemap';
    public const TYPE_TREE_MAP = 'treemap';
    public const TYPE_VARIABLE_PIE = 'variablepie';
    public const TYPE_VAR_I_WIDE = 'variwide';
    public const TYPE_VECTOR = 'vector';
    public const TYPE_WATERFALL = 'waterfall';
    public const TYPE_WIND_BARB = 'windbarb';
    public const TYPE_WORD_CLOUD = 'wordcloud';
    public const TYPE_X_RANGE = 'xrange';

    public static function months(): array
    {
        return ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    }
}
