<?php

class Bench extends Sofa
{
    public function __construct(float|int $width, float|int $height, float|int $length, int $seats, int $armrests, float|int $lengthOpened)
    {
        parent::__construct($width, $height, $length, $seats, $armrests, $lengthOpened);
    }


}
