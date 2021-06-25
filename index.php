<?php
require_once 'helpers.php';
$is_auth = rand(0, 1);
$user_name = "Maksim"; //
$categories = ["Доски и лыжи", "Крепления", "Ботинки", "Одежда", "Инструменты", "Разное"];
$lots = [
    [
        'image' => 'img/lot-1.jpg',
        'title' => '2014 Rossignol District Snowboard',
        'price' => '10999',
        'category' => 'Доски и лыжи'
    ],
    [
        'image' => 'img/lot-2.jpg',
        'title' => 'DC Ply Mens 2016/2017 Snowboard',
        'price' => '159999',
        'category' => 'Доски и лыжи'
    ],
    [
        'image' => 'img/lot-3.jpg',
        'title' => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'price' => '8000',
        'category' => 'Крепления'
    ],
    [
        'image' => 'img/lot-4.jpg',
        'title' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'price' => '10999',
        'category' => 'Ботинки'
    ],
    [
        'image' => 'img/lot-5.jpg',
        'title' => 'Куртка для сноуборда DC Mutiny Charocal',
        'price' => '7500',
        'category' => 'Одежда'
    ],
    [
        'image' => 'img/lot-6.jpg',
        'title' => 'Маска Oakley Canopy',
        'price' => '5400',
        'category' => 'Разное'
    ]
];
function format_price($price)
{
    $price = ceil($price);
    if ($price >= 1000) {
        $price = number_format($price, 0, null, ' ');
    }
    return $price . ' ₽';
}
htmlspecialchars(print(include_template('layout.php', ['categories' => $categories, 'lots' => $lots, 'is_auth' => $is_auth, 'user_name' => $user_name, 'title' => 'Главная'])));

?>
