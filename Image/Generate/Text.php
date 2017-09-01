<?php


namespace App\Image\Generate;


use App\Image\Generate\Font\AbstractFont;
use App\Image\Generate\Font\DefaultFont;

class Text
{
    private $size;
    private $x;
    private $y;
    private $color;
    private $font;
    private $text;

    function __construct()
    {
        $this->size = 12;
        $this->x = 0;
        $this->y = 0;
        $this->color = new ColorRgb(0, 0, 0);
        $this->font = new DefaultFont();
        $this->text = "";
    }


    public function getSize(): int
    {
        return $this->size;
    }

    public function getXPosition(): int
    {
        return $this->x;
    }

    public function getYPosition(): int
    {
        return $this->y;
    }

    public function getColor(): ColorRgb
    {
        return $this->color;
    }

    function getText()
    {
        return $this->text;
    }

    function getFont(): AbstractFont
    {
        return $this->font;
    }

    function setSize(int $size): Text
    {
        $this->size = $size;
        return $this;
    }

    function setXPosition(int $x): Text
    {
        $this->x = $x;
        return $this;
    }

    function setYPosition(int $y): Text
    {
        $this->y = $y;
        return $this;
    }

    function setPosition(int $x, int $y): Text
    {
        $this->setXPosition($x);
        $this->setYPosition($y);

        return $this;
    }

    function setColor(int $red, int $green, int $blue): Text
    {
        $this->color = new ColorRgb($red, $green, $blue);
        return $this;
    }

    function setFont(AbstractFont $font): Text
    {
        $this->font = $font;
        return $this;
    }

    function setText($text): Text
    {
        $this->text = $text;
        return $this;
    }
}