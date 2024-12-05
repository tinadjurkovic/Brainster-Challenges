<?php

class Cart
{
    private array $cartItems = [];

    public function addToCart(array $item): void
    {
        $this->cartItems[] = $item;
    }

    public function printReceipt(): void
    {
        if (empty($this->cartItems)) {
            echo "Your cart is empty.";
            return;
        }

        $finalTotal = 0;

        foreach ($this->cartItems as $cartItem) {
            $product = $cartItem['item'];
            $amount = $cartItem['amount'];
            $unit = $product->isSoldBy() ? "kgs" : "gunny sacks";
            $total = $amount * $product->getPrice();
            $finalTotal += $total;

            echo "{$product->getName()} | {$amount} {$unit} | total= {$total} denars<br><br>";
        }

        echo "<br>Final price amount: {$finalTotal} denars";
    }

}