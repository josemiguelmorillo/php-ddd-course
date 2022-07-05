<?php

namespace DddCourse\application;

use DddCourse\domain\Cart;
use DddCourse\domain\Item;
use DddCourse\domain\Product;

class Application
{

    public static function main(): void
    {
        $cart = new Cart();
        $product = new Product('Apple Pencil');
        $item = new Item($product, 2);
        $cart->add($item);
        $product = new Product('Sony Wireless Headphone');
        $item = new Item($product, 1);
        $cart->add($item);

        echo "Cart = $cart\n";
        $items = $cart->getItems();
        $serializeItems = json_encode($items);

        echo "--------------\n";
        echo "items = $serializeItems\n";
        echo "--------------\n";
    }
}

require('src/domain/Cart.php');
require('src/domain/Item.php');
require('src/domain/Product.php');

Application::main();