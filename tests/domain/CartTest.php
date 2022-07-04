<?php

namespace DddCourse\tests\domain;

use DddCourse\domain\Cart;
use DddCourse\domain\Product;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    public function testShouldAddProductToCart(): void
    {
        $cart = new Cart();
        $product = new Product("Some test product");
        $cart->add($product);

        $actual = $cart->getProducts();

        self::assertCount(1, $actual);
        self::assertEquals("Some test product", $actual[0]->getName());
    }
}
