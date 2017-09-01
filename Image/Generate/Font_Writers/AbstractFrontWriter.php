<?php


namespace App\Image\Generate\Font_Writers;


use App\Image\Generate\ColorRgb;
use App\Image\Generate\Text;

abstract class AbstractFrontWriter
{
    function getColor($resource, ColorRgb $color)
    {
        return imagecolorallocate($resource, $color->getRed(), $color->getGreen(), $color->getGreen());
    }

    abstract function write($resource, Text $image_text);
}