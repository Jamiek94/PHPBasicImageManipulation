<?php


namespace App\Image\Generate\Font_Writers;


use App\Image\Generate\Text;

class DefaultFontWriter extends AbstractFrontWriter
{
    function write($resource, Text $image_text)
    {
        imagestring($resource, $image_text->getSize(), $image_text->getXPosition(), $image_text->getYPosition(), $image_text->getText(), $this->getColor($resource, $image_text->getColor()));
    }
}