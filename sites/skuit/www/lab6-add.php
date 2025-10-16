<?php
/////////////////////////3. Создание скалярных переменных///////////////////////////////
$product1 = "Молоток";
$product2 = "Бензопила";
$product3 = "Напильник";
$product4 = "Гвозди";
$product5 = "Рулетка";
$product6 = "Гаечный ключ";
$product7 = "Газовый ключ";
$product8 = "Отвертка";
$product9 = "Паяльник";
$product10 = "Болты";
$product11 = "Гайки";
$product12 = "Лобзик";
$product13 = "Краска";
$product14 = "Кисточка";
$product15 = "Шпатель";

$price1 = 50;
$price2 = 9000;
$price3 = 80;
$price4 = 60;
$price5 = 700;
$price6 = 800;
$price7 = 1000;
$price8 = 500;
$price9 = 5000;
$price10 = 350;
$price11 = 250;
$price12 = 7000;
$price13 = 2700;
$price14 = 170;
$price15 = 600;

$products = [$product1, $product2, $product3, $product4, $product5, $product6, $product7, $product8, $product9, $product10, $product11, $product12, $product13, $product14, $product15];

$prices = [$price1, $price2, $price3, $price4, $price5, $price6, $price7, $price8, $price9, $price10, $price11, $price12, $price13, $price14, $price15];

?>

<div class="product-list">
    <h2>Товары и цены</h2>

    <? for ($i = 0; $i < count($products); $i++): ?>
        <div class="product-card">
            <div class="product-name"><?= $products[$i]?></div>
            <div class="product-price"><?= $prices[$i]?> Руб</div>
        </div>
    <?endfor;?>
</div>

<?
/////////////////////////////////////4. Создание массивов со значениями///////////////////////////////////////
$products2 = ["Молоток", "Бензопила", "Напильник", "Гвозди", "Рулетка", "Гаечный ключ", "Газовый ключ", "Отвертка", "Паяльник", "Болты", $product11, $product12, $product13];

$prices2 = [300, 9000, 150, 100, 700, 800, 1000, 500, 5000, 350, $price11, $price12, $price13];

?>

<div class="product-list">
    <h2>Товары и цены</h2>

    <? for ($i = 0; $i < count($products2); $i++): ?>
        <div class="product-card">
            <div class="product-name"><?= $products2[$i]?></div>
            <div class="product-price"><?= $prices2[$i]?> Рууб</div>
        </div>
    <?endfor;?>
</div>

<?
/////////////////////////////////////5. Двумерные массивы//////////////////////////////////////
for($i = 0; $i <10; $i++):
    $items[] = [$products[$i], $prices[$i]];
endfor;

?>

<div class="product-list">
    <h2>Товары и цены</h2>

    <? foreach($items as $num): ?>
        <div class="product-card">
            <div class="product-name"><?= $num[0]?></div>
            <div class="product-price"><?= $num[1]?> Руб</div>
        </div>
    <?endforeach;?>
</div>

<?
/////////////////////////////6. Ассоциативные массивы////////////////////////////////////
for($i = 0; $i <10; $i++):
    $goods[] = ['name' => $products[$i], 'price' => $prices[$i]];
endfor;

?>

<div class="product-list">
    <h2>Товары и цены</h2>

    <? foreach($goods as $num): ?>
        <div class="product-card">
            <div class="product-name"><?= $num['name']?></div>
            <div class="product-price"><?= $num['price']?> Руб</div>
        </div>
    <?endforeach;?>
</div>

<?
/////////////////////7. Случайные элементы///////////////////////////
for($i = 0; $i < 50; $i++):
    $goodsRandom[] = ['name' => $products[array_rand($products)], 'price' => $prices[array_rand($prices)]];
endfor;

?>

<div class="product-list">
    <h2>Товары и цены</h2>

    <? foreach($goodsRandom as $num): ?>
        <div class="product-card">
            <div class="product-name"><?= $num['name']?></div>
            <div class="product-price"><?= $num['price']?> Руб</div>
        </div>
    <?endforeach;?>
</div>

<?
/////////////////////////8. Условия/////////////////////////////////////
?>
<div class="product-list">
    <h2>Товары и цены больше 100р</h2>

    <? foreach($goodsRandom as $num): 
        if($num['price'] > 100):?>
        <div class="product-card">
            <div class="product-name"><?= $num['name']?></div>
            <div class="product-price"><?= $num['price']?> Руб</div>
        </div><?
        endif;
    endforeach;?>
</div>

<div class="product-list">
    <h2>Товары и цены больше 1000р</h2>

    <? foreach($goodsRandom as $num): 
        if($num['price'] > 1000):?>
        <div class="product-card">
            <div class="product-name"><?= $num['name']?></div>
            <div class="product-price"><?= $num['price']?> Руб</div>
        </div><?
        endif;
    endforeach;?>
</div>

<div class="product-list">
    <h2>Товары и цены больше 100р и меньше 1000р</h2>

    <? foreach($goodsRandom as $num): 
        if($num['price'] > 100 & $num['price'] < 1000):?>
        <div class="product-card">
            <div class="product-name"><?= $num['name']?></div>
            <div class="product-price"><?= $num['price']?> Руб</div>
        </div><?
        endif;
    endforeach;?>
</div>