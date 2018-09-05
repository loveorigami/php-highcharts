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
 * Class BaseTitle
 *
 * @package lo\highcharts\chart
 * @author  Lukyanov Andrey <loveorigami@mail.ru>
 */
abstract class BaseTitle extends BaseObject
{
    public $align = 'center';
    public $floating = false;
    public $margin = 15;
    /** @var Style */
    public $style;
    public $text = 'Chart title';
    public $useHTML = false;
    public $verticalAlign = 'undefined';
    public $widthAdjust = -44;
    public $x = 0;
    public $y = 'undefined';

    public function classMap(): array
    {
        return [
            'style' => Style::class,
        ];
    }
}
