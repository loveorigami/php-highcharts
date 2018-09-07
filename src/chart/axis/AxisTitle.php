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
 * Class AxisTitle
 *
 * @package lo\highcharts\chart
 * @author  Lukyanov Andrey <loveorigami@mail.ru>
 * @see     https://api.highcharts.com/highcharts/title
 */
class AxisTitle extends BaseObject
{
    public $align = 'middle';
    public $enabled = 'middle';
    public $margin = 'undefined';
    public $offset = 'undefined';
    public $position3d;
    public $reserveSpace = true;
    public $rotation = 0;
    public $skew3d;
    /** @var Style */
    public $style;
    public $text;
    public $textAlign = 'undefined';
    public $useHTML = false;
    public $x = 0;
    public $y = 'undefined';

    public function classMap(): array
    {
        return [
            'style' => Style::class,
        ];
    }
}
