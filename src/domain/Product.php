<?php

namespace DddCourse\domain;


class Product
{
    private string $name;

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
            "name='$this->name'\n" .
            "}";
    }
}