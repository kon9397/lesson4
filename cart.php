<?php
$id = 1;
$cart = [
        'sum'=>0,
        'items'=>[]
    ];

//Вспомощающая функция, которая пересчитывает сумму всех товаров
function getSum() {
    global $cart;
    $sum = 0;

    for($i = 0; $i < count($cart['items']); $i++) {
        $sum += $cart['items'][$i]['quantity'] * $cart['items'][$i]['price'];
    }

    $cart['sum'] = $sum;
}

function addItems($quantity, $price) {
    global $cart, $id;
    $cart['items'][] = [
        'id'=>$id++,
        'quantity'=>$quantity,
        'price'=>$price
    ];

    getSum();
}

function deleteItem($id) {
    global $cart;

    for($i = 0; $i < count($cart['items']); $i++) {
        if($cart['items'][$i]['id'] === $id) {
            unset($cart['items'][$i]);
        }
    }

    getSum();

}

function setQuantity($id, $quantity) {
    global $cart;

    for($i = 0; $i < count($cart['items']); $i++) {
        if($cart['items'][$i]['id'] === $id) {
            $cart['items'][$i]['quantity'] = $quantity;
        }
    }

    getSum();
}

function getDiscount() {
    global $cart;

    $quantity = 0;

    for($i = 0; $i < count($cart['items']); $i++) {
        $quantity += $cart['items'][$i]['quantity'];
    }

    getSum();

    if($cart['sum'] < 2000 AND $quantity < 10) {
        echo 'Фиг тебе, а не скидка';
    }

    if($cart['sum'] > 2000) {
        $cart['sum'] = $cart['sum'] - ($cart['sum'] * 7 / 100);
    }

    if($quantity > 10) {
        $cart['sum'] = $cart['sum'] - ($cart['sum'] * 10 / 100);
    }

}


addItems(2, 10);
addItems(5, 100);
addItems(5, 500);
setQuantity(2, 9);

getDiscount();

echo '<pre>';
var_dump($cart);
echo '</pre>';
