<?php


namespace App\Image\Generate\Images;


class EmptyImage extends AbstractImage
{
    function __construct(int $width, int $height)
    {
        parent::__construct(imagecreatetruecolor($width, $height));
    }

    function build() : void
    {
        imagepng($this->resource, null, 9);
    }
}