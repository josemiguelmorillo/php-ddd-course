<?php

namespace DddCourse\domain;

class Item
{
    private Product $product;
    private int $quantity;

    public function __construct(Product $product, int $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    public function __toString(): string
    {
        return "Item{\n".
            "product=$this->product\n".
            ", quantity $this->quantity\n" .
            "}";
    }

    public function getProduct(): Product
    {
        return $this->product;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }
}