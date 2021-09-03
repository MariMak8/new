<?php
declare(strict_types = 1);
class Raduga
{
    private $red;
    private $green;
    private $blue;

    public function __construct($red, $green, $blue)
    {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;
    }
    private function setRed(int $red)
    {
        if ($red < 0 || $red > 255) {
            exit('ошибка red');
        }

        $this->red = $red;
    }
    public function getRed(int $red)
    {
        return $red;
    }

    public function getGreen(int $green)
    {
        return $green;
    }
    private function setGreen(int $green)
    {
        if ($green < 0 || $green > 255) {
            exit('ошибка green');
        }

        $this->green = $green;
    }

    public function getBlue(int $blue)
    {
        return $blue;
    }
    private function setBlue(int $blue)
    {
        if ($blue < 0 || $blue > 255) {
            exit('ошибка blue');
        }

        $this->blue = $blue;
    }
    public function equals(Raduga $object)
    {
        return $this->red == $object->red
            and $this->green == $object->green
            and $this->blue == $object->blue;
    }


    public function mix(Raduga $mixedColor)
    {
        return new Raduga($this->integerMix($this->red, $mixedColor->red),
            $this->integerMix($this->green, $mixedColor->green),
            $this->integerMix($this->blue, $mixedColor->blue));
        $blue = new Raduga(0, 0, 255);
        $red = new Raduga(255, 0, 0);
        var_dump($blue->equals($red));
        var_dump($violet = $blue->mix($red));
    }

    private function integerMix($a, $b)
    {
        return (int)(($a + $b) / 2);
    }
}


