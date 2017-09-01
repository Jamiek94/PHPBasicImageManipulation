<?php


namespace App\Image\Generate\Images;


use App\Image\Generate\ColorRgb;
use App\Image\Generate\Font\DefaultFont;
use App\Image\Generate\Font\TrueTypeFont;
use App\Image\Generate\Font_Writers\DefaultFontWriter;
use App\Image\Generate\Font_Writers\TrueTypeFontWriter;
use App\Image\Generate\Text;

abstract class AbstractImage
{
    protected $resource;
    protected $font_writers;

    /** Create an image from a given resource
     * @param resource $resource
     */
    function __construct($resource)
    {
        if (!is_resource($resource)) {
            throw new \InvalidArgumentException("The resource parameter is not a resource type.");
        }
        $this->resource = $resource;
        $this->font_writers = [DefaultFont::class => DefaultFontWriter::class, TrueTypeFont::class => TrueTypeFontWriter::class];
    }

    function text(Text $text): AbstractImage
    {
        $font_class = get_class($text->getFont());

        $font_writer = new $this->font_writers[$font_class];

        $font_writer->write($this->resource, $text);

        return $this;
    }

    function getResource()
    {
        return $this->resource;
    }

    function image(AbstractImage $image, int $x, int $y)
    {
        $image_resource = $image->getResource();
        imagecopy($this->resource, $image_resource, $x, $y, 0, 0, imagesx($image_resource), imagesy($image_resource));

        return $this;
    }

    function getWidth(): int
    {
        return imagesx($this->resource);
    }

    function getHeight(): int
    {
        return imagesy($this->resource);
    }

    function resize(int $width, int $height): AbstractImage
    {
        $destination_image = imagecreatetruecolor($width, $height);

        imagecopyresampled($destination_image, $this->resource, 0, 0, 0, 0, $width, $height, $this->getWidth(), $this->getHeight());
        $this->resource = $destination_image;

        return $this;
    }

    function background(ColorRgb $color): AbstractImage
    {
        imagefill($this->resource, 0, 0, imagecolorallocate($this->resource, $color->getRed(), $color->getGreen(), $color->getBlue()));

        return $this;
    }

    abstract function build(): void;
}