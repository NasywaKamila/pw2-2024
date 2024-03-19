<?php
require_once 'class_balok.php';

// Membuat Balok pertama
$p1 = 29;
$l1 = 16;
$t1 = 7;

$balok1 = new Balok($p1, $l1, $t1);
echo "Balok 1:\n";
echo "Luas: " . $balok1->getLuas() . "\n";
echo "Keliling: " . $balok1->getKeliling() . "\n";
echo "Volume: " . $balok1->getVolume() . "\n\n";

echo '<br>';

// Membuat Balok kedua
$p2 = 15;
$l2 = 8;
$t2 = 5;

$balok2 = new Balok($p2, $l2, $t2);
echo "Balok 2:\n";
echo "Luas: " . $balok2->getLuas() . "\n";
echo "Keliling: " . $balok2->getKeliling() . "\n";
echo "Volume: " . $balok2->getVolume() . "\n\n";

echo '<br>';


// Membuat Balok ketiga
$p3 = 20;
$l3 = 12;
$t3 = 9;

$balok3 = new Balok($p3, $l3, $t3);
echo "Balok 3:\n";
echo "Luas: " . $balok3->getLuas() . "\n";
echo "Keliling: " . $balok3->getKeliling() . "\n";
echo "Volume: " . $balok3->getVolume() . "\n\n";

echo '<br>';


// Membuat Balok keempat
$p4 = 25;
$l4 = 14;
$t4 = 6;

$balok4 = new Balok($p4, $l4, $t4);
echo "Balok 4:\n";
echo "Luas: " . $balok4->getLuas() . "\n";
echo "Keliling: " . $balok4->getKeliling() . "\n";
echo "Volume: " . $balok4->getVolume() . "\n";
?>