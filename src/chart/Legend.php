<?php
/**
 * Created by PhpStorm.
 * User: Lukyanov Andrey <loveorigami@mail.ru>
 * Date: 29.08.2018
 * Time: 11:32
 */

namespace lo\highcharts\chart;

use lo\highcharts\BaseObject;
use lo\highcharts\chart\html\Style;

/**
 * Class Legend
 *
 * @package lo\highcharts\chart
 * @author  Lukyanov Andrey <loveorigami@mail.ru>
 * @see     https://api.highcharts.com/highcharts/legend
 */
class Legend extends BaseObject
{
    public $align = 'center';
    public $alignColumns = true;
    public $backgroundColor = 'undefined';
    public $borderColor = '#999999';
    public $borderRadius = 0;
    public $borderWidth = 0;
    public $enabled = 'undefined';
    public $floating = 'horizontal';
    public $itemCheckboxStyle;
    public $itemDistance = 20;
    public $itemHiddenStyle;
    public $itemHoverStyle;
    public $itemMarginBottom = 0;
    public $itemMarginTop = 0;
    public $itemStyle;
    public $itemWidth = 'undefined';
    public $keyboardNavigation;
    public $labelFormat = '{name}';
    public $labelFormatter = 'undefined';
    public $layout = 'horizontal';
    public $lineHeight = 16;
    public $margin = 12;
    public $maxHeight = 'undefined';
    public $navigation;
    public $padding = 8;
    public $reversed = false;
    public $rtl = false;
    public $shadow = false;
    public $squareSymbol = true;
    /** @var Style */
    public $style;
    public $symbolHeight = 'undefined';
    public $symbolPadding = 5;
    public $symbolRadius = 'undefined';
    public $symbolWidth = 'undefined';

    /**
     * @return array
     */
    public function classMap(): array
    {
        return [
            'style' => Style::class,
        ];
    }
}
