<?php
/**
 * Created by PhpStorm.
 * User: URich-Dev
 * Date: 31.01.2019
 * Time: 18:03
 */

namespace App\Http\Helpers;


class ImgHelper
{
    public function imgIfExists($haystack, $attrs = [])
    {
        if(empty($haystack->img)) return;

        $src = $this->getSrc($haystack);
        $alt = $this->getAlt($haystack);
        $title = $this->getTitle($haystack);
        $attrs = $this->getAttrs($attrs);

        return '<img'. $src . $alt . $title . $attrs. '>';
    }

    protected function getSrc($haystack)
    {
        return ' src="'.$haystack->img.'"';
    }

    protected function getAlt($haystack)
    {
        if(!empty($haystack->imgAlt)){
            return ' alt="'.$haystack->imgAlt.'"';
        }

        return '';
    }

    protected function getTitle($haystack)
    {
        if(!empty($haystack->imgTitle)){
            return ' title="'.$haystack->imgTitle.'"';
        }

        return '';
    }

    protected function getAttrs($attrs)
    {
        if(!empty($attrs)){
            $newAttrs = '';
            foreach ($attrs as $key => $value){
                $newAttrs .= ' '. $key .'='. $value .' ';
            }

            return $newAttrs;
        }
    }


}