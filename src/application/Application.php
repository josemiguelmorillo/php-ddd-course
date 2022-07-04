<?php

namespace DddCourse\application;

use DddCourse\domain\Cart;
use DddCourse\domain\Product;

class Application
{

    public static function main(): void
    {
        $cart = new Cart();
        $product = new Product('Apple Pencil');
        $cart->add($product);

        echo "Cart = $cart\n";
        $products = $cart->getProducts();
        $serializeProducts = json_encode($products);

        echo "--------------\n";
        echo "products = $serializeProducts\n";
        echo "--------------\n";
    }
}

require('src/domain/Cart.php');
require('src/domain/Product.php');

Application::main();