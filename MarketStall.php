<?php

class MarketStall
{
    public array $products;

    public function __construct(array $products)
    {
        foreach ($products as $key => $value) {
            if (!is_string($key) || !$value instanceof Product) {
                throw new InvalidArgumentException('Products must be an associative array.');
            }
        }
        $this->products = $products;
    }

    public function addProductToMarket(string $productName, Product $product): void
    {
        $this->products[$productName] = $product;
    }

    public function getItem(string $productName, int $amount): array|bool
    {
        if (!array_key_exists($productName, $this->products) || $amount <= 0) {
            return false;
        }

        return [
            'amount' => $amount,
            'item' => $this->products[$productName],
        ];
    }

}