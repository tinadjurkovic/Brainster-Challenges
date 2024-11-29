<?php


class Chair extends Furniture
{
    public function __construct(float|int $width, float|int $height, float|int $length)
    {
        parent::__construct($width, $height, $length);
    }


}
