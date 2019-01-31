<?php
/**
 * Created by PhpStorm.
 * User: URich-Dev
 * Date: 31.01.2019
 * Time: 18:03
 */

namespace App\Http\Helpers;


class ImageHelper
{
    public static function imgIfExists($collect, $key, $attrs = [])
    {
        $array = $collect->toArray();
        if(array_key_exists($key, $array)){
            $src = self::getSrc($key, $array);
            $alt = self::getAlt($key, $array);
            $title = self::getTitle($key, $array);
            $attrs = self::getAttrs($attrs);

            return '<img '. $src .' '. $alt .' '. $title .' '.$attrs. '>';
        }
    }

    protected static function getSrc($key, $array)
    {
        return 'src="'.$array[$key].'"';
    }

    protected static function getAlt($key, $array)
    {
        if(array_key_exists($key.'-alt', $array)){
            return 'alt="'.$array[$key.'-alt'].'"';
        }

        return '';
    }

    protected static function getTitle($key, $array)
    {
        if(array_key_exists($key.'-title', $array)){
            return 'title="'.$array[$key.'-title'].'"';
        }

        return '';
    }

    protected static function getAttrs($attrs)
    {
        if(!empty($attrs)){
            $newAttrs = '';
            foreach ($attrs as $key => $value){
                $newAttrs .= $key .'='. $value .' ';
            }

            return $newAttrs;
        }
    }


}