<?php

namespace DddCourse\domain;


class Product
{
    private string $name;
    private int $quantity;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function __toString(): string
    {
        return "Product{\n" .
            "name='$this->name',\n" .
            "quantity=$this->quantity\n" .
            "}";
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }
}