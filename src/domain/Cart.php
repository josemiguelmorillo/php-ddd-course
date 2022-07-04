<?php

namespace DddCourse\domain;

class Cart
{
    private array $products;

    public function __construct()
    {
        $this->products = [];
    }

    public function add(Product $product): void
    {
        $this->products[] = $product;
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function __toString(): string
    {
        $serializeProduct = json_encode($this->products);
        return "Cart{\n" .
            "products=$serializeProduct\n" .
            "}";
    }


}