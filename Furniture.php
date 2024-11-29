<?php

class Furniture implements Printable
{
    private int|float $width;
    private int|float $height;
    private int|float $length;
    private bool $is_for_seating = false;
    private bool $is_for_sleeping = false;

    public function __construct(int|float $width, int|float $height, int|float $length)
    {
        $this->width = $width;
        $this->height = $height;
        $this->length = $length;
    }

    public function getWidth(): float|int
    {
        return $this->width;
    }

    public function getHeight(): float|int
    {
        return $this->height;
    }
    public function getLength(): float|int
    {
        return $this->length;
    }
    public function getIsForSeating(): bool
    {
        return $this->is_for_seating;
    }

    public function setIsForSeating(bool $is_for_seating): void
    {
        $this->is_for_seating = $is_for_seating;
    }

    public function getIsForSleeping(): bool
    {
        return $this->is_for_sleeping;
    }

    public function setIsForSleeping(bool $is_for_sleeping): void
    {
        $this->is_for_sleeping = $is_for_sleeping;
    }

    public function area(): int|float
    {
        return $this->width * $this->length;
    }

    public function volume(): int|float
    {
        return $this->area() * $this->height;
    }

    public function print(): void
    {
        $name = get_class($this);
        $purpose = $this->is_for_sleeping ? "sleeping" : "sitting only";
        echo "$name, $purpose, {$this->area()}cm2";
    }

    public function sneakpeek(): void
    {
        $name = get_class($this);
        echo $name;
    }

    public function fullinfo(): void
    {
        $name = get_class($this);
        $purpose = $this->is_for_sleeping ? "sleeping" : "sitting only";
        echo "$name, $purpose, {$this->area()}cm2, width: {$this->width}cm, length: {$this->length}cm, height: {$this->height}cm\n";
    }
}
