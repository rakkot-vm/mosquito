<?php
/**
 * Created by PhpStorm.
 * User: URich-Dev
 * Date: 31.01.2019
 * Time: 18:03
 */

namespace App\Http\Helpers;


class ValueHelper
{
    public function valueIfExists($haystack, $needle, $default = '', $key = 'value')
    {
        $value = $default;
        if(!empty($haystack[$needle])) {
            $value = is_scalar($haystack[$needle]) ? $haystack[$needle] : $haystack[$needle]->$key ;
        }

        return $value;
    }
}