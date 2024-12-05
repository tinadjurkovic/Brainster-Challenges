<?php

interface Product
{
    public function getName(): string;
    public function getPrice(): int|float;
    public function isSoldBy(): bool;
}

//I made this class as an Interface since it is stated in the bonus part