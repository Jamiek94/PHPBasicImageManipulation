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
        imagepng($this->resource, null, 9);
    }
}
