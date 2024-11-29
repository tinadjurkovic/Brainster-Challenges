<?php

class Sofa extends Furniture
{
    private int $seats;
    private int $armrests;
    private int|float $lengthOpened;

    public function __construct(float|int $width, float|int $height, float|int $length, int $seats, int $armrests, int|float $lengthOpened)
    {
        parent::__construct($width, $height, $length);
        $this->seats = $seats;
        $this->armrests = $armrests;
        $this->lengthOpened = $lengthOpened;
    }

    public function getSeats(): int
    {
        return $this->seats;
    }

    public function setSeats(int $seats): self
    {
        $this->seats = $seats;
        return $this;
    }

    public function getArmrests(): int
    {
        return $this->armrests;
    }

    public function setArmrests(int $armrests): self
    {
        $this->armrests = $armrests;
        return $this;
    }

    public function getLengthOpened(): int|float
    {
        return $this->lengthOpened;
    }

    public function setLengthOpened(int|float $length_opened): self
    {
        $this->lengthOpened = $length_opened;
        return $this;
    }

    public function areaOpened(): mixed
    {
        if ($this->getIsForSleeping()) {
            return "Area opened: " . $this->getWidth() * $this->lengthOpened;
        } else {
            return "This sofa is for sitting only, it has {$this->armrests} armrests and {$this->seats} seats";
        }
    }

}