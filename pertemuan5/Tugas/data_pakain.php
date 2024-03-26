<?php

    require_once 'class_pakaian.php';

    //object
    $pakaian1 = new Pakaian1('Atasan Dewasa', 'XL', 45000, 1000);
    $pakaian2 = new Pakaian2('Dress Midi', 'M', 150000, 700);
    $pakaian3 = new Pakaian3('Celana Jeans', 'L', 250000, 550);
    $pakaian4 = new Pakaian4('Setelan Anak', 'SM', 65000, 12000);

    //echo
    echo 'Info Pembelian produk: <br>';
    $pakaian1->getInfoPakaian1();
    echo '<br>';

    echo 'Info Pembelian produk: <br>';
    $pakaian2->getInfoPakaian2();
    echo '<br>';

    echo 'Info Pembelian produk: <br>';
    $pakaian3->getInfoPakaian3();
    echo '<br>';

    echo 'Info Pembelian produk: <br>';
    $pakaian4->getInfoPakaian4();
?>