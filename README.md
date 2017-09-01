# Very very basic Image manipulation library
This PHP library makes it possible to start from scratch or edit existing images.

_Uses type hinting._

### Features ###

* Add images (supports: empty, jpeg, png)
* Add text
  * Fonts (True type & Default font)
  * Size
  * Color
  * Position  
* Resize
* Background color

### Requirements: ###

* PHP 7+

### Example ###

```
 (new JpegImage(public_path("/img/gym-rating.jpg")))
            ->image(new JpegImage(public_path("/img/star.jpg"), 20, 20) // absolute path
            ->text((new Text())
                ->setColor(72, 72, 72)
                ->setSize(14)
                ->setFont(new TrueTypeFont(base_path("fonts/open-sans/OpenSans-BoldItalic.ttf"))) // absolute path
                ->setPosition(254, 45)
                ->setText("(15)"))
            ->text((new Text())
                ->setColor(72, 72, 72)
                ->setSize(11)
                ->setFont(new TrueTypeFont(base_path("fonts/open-sans/OpenSans-BoldItalic.ttf"))) // absolute path
                ->setPosition(50, 75)
                ->setText("(4.3/5)"))
            ->resize(300, 75)
            ->build();
            
            exit;
```

Note: Not all the functionality has been tested.
