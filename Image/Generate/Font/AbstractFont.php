<?php

namespace App\Image\Generate\Font;

abstract class AbstractFont
{
    abstract function getPath() : string;
}