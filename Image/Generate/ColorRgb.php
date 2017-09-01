<?php


namespace App\Image\Generate;


class ColorRgb
{
    private $red;
    private $blue;
    private $green;

    function __construct(int $red, int $blue, int $green)
    {
        $this->red = $red;
        $this->blue = $blue;
        $this->green = $green;
    }

    function getRed(){
        return $this->red;
    }

    function getBlue(){
        return $this->blue;
    }

    function getGreen(){
        return $this->green;
    }
}