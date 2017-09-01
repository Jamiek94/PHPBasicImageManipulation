<?php


namespace App\Image\Generate\Images;


class JpegImage extends AbstractImage
{
    function __construct(string $path)
    {
        parent::__construct(imagecreatefromjpeg($path));
    }

    function build() : void
    {
        imagejpeg($this->resource, null, 100);
    }
}