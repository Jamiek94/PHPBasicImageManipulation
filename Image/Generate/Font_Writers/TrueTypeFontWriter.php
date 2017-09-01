<?php

namespace App\Image\Generate\Font_Writers;


use App\Image\Generate\Text;

class TrueTypeFontWriter extends AbstractFrontWriter
{
    function write($resource, Text $image_text)
    {
        imagettftext($resource, $image_text->getSize(), 0, $image_text->getXPosition(), $image_text->getYPosition(), $this->getColor($resource, $image_text->getColor()), $image_text->getFont()->getPath(), $image_text->getText());
    }
}