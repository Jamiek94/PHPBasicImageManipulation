<?php


namespace App\Image\Generate\Images;


class PngImage extends AbstractImage
{
    function __construct($path)
    {
        parent::__construct(imagecreatefrompng($path));
    }

    function build() : void
    {
        imagejpeg($this->resource, null, 100);
    }
}