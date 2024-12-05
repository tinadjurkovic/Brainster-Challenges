<?php
require_once 'Product.php';
abstract class Base implements Product
{
    private string $name;
    private int|float $price;
    private bool $sellingByKg;

    public function __construct(string $name, int|float $price, bool $sellingByKg)
    {
        $this->name = $name;
        $this->price = $price;
        $this->sellingByKg = $sellingByKg;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int|float
    {
        return $this->price;
    }

    public function isSoldBy(): bool
    {
        return $this->sellingByKg;
    }
}
