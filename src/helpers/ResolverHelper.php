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
class ResolverHelper
{
    /**
     * @param $key
     * @return mixed
     */
    public static function key($key)
    {
        if (\is_int($key)) {
            return $key;
        }

        switch ($key) {
            case 'fontSize':
                $out = 'font-size';
                break;
            case 'fontFamily':
                $out = 'font-family';
                break;
            default:
                $out = $key;
        }

        return $out;
    }
}
