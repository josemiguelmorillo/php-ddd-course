<?php

namespace DddCourse\tests\domain;

use DddCourse\domain\Cart;
use DddCourse\domain\Item;
use DddCourse\domain\Product;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    public function testShouldAddProductToCart(): void
    {
        $cart = new Cart();
        $product = new Product("Some test product");
        $item = new Item($product, 1);
        $cart->add($item);

        $actual = $cart->getItems();

        self::assertCount(1, $actual);
        self::assertEquals("Some test product", $actual[0]->getProduct()->getName());
    }

    public function testShouldAddTwoProductsToCart(): void
    {
        $cart = new Cart();
        $product = new Product("Some test product");
        $item = new Item($product, 1);
        $cart->add($item);
        $product = new Product("Another product");
        $item = new Item($product, 1);
        $cart->add($item);

        $actual = $cart->getItems();

        self::assertCount(2, $actual);
        self::assertEquals("Some test product", $actual[0]->getProduct()->getName());
        self::assertEquals("Another product", $actual[1]->getProduct()->getName());
    }

    public function testShouldAddTwoUnitsOfProduct(): void
    {
        $cart = new Cart();
        $product = new Product("Some test product");
        $item = new Item($product, 2);
        $cart->add($item);

        $actual = $cart->getItems();

        self::assertEquals(2, $actual[0]->getQuantity());
    }
}
