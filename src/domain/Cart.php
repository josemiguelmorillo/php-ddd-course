<?php

namespace DddCourse\domain;

class Cart
{
    private array $items;

    public function __construct()
    {
        $this->items = [];
    }

    public function add(Item $item): void
    {
        $this->items[] = $item;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function __toString(): string
    {
        $serializeItem = json_encode($this->items);
        return "Cart{\n" .
            "items=$serializeItem\n" .
            "}";
    }
}