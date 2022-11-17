<?php

use Market\Product;
use Market\MarketStall;
use Market\Orange;
use Market\Potato;
use Market\Nuts;
use Market\Kiwi;
use Market\Pepper;
use Market\Raspberry;

require_once __DIR__ . '/_importer.php';

$orange = new Orange('Orange', 35, 'Kg');
$potato = new Potato('Potato', 240, 'ganny sack');
$nuts = new Nuts('Nuts', 850, 'Kg');
$kiwi = new Kiwi('Kiwi', 670, 'ganny sack');
$pepper = new Pepper('Pepper', 330, 'ganny sack');
$raspberry = new Raspberry('Raspberry', 555, 'Kg');

$marketStall1 = new MarketStall('Market stall 01');
$marketStall1->addProduct($orange);
$marketStall1->addProduct($potato);
$marketStall1->addProduct($nuts);

$marketStall2 = new MarketStall('Market stall 02');
$marketStall2->addProduct($kiwi);
$marketStall2->addProduct($popper);
$marketStall2->addProduct($raspberry);

$market = [$marketStall1, $marketStall2];

$cart = [
    'Orange' => 3.000,
    'Pepper' => 1,
    'Kiwi' => 1,
    'Nuts' => 0.500
];

?>

