<?php


namespace App\Image\Generate\Font;


class TrueTypeFont extends AbstractFont
{
    private $path;

    function __construct(string $path)
    {
        $this->path = $path;
    }

    function getPath(): string
    {
        return $this->path;
    }
}