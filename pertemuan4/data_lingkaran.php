<?php

    require_once 'class_lingkaran.php';

    echo 'Nilai PHI = ' . Lingkaran::PHI;

    $Lingkar1 = new Lingkaran(8);
    $Lingkar2 = new Lingkaran(27);


    echo '<br><br>';
    echo '<br>Luas lingkaran1 adalah' . $Lingkar1->getLuas() . 'cm';
    echo '<br>Luas lingkaran1 adalah' . $Lingkar2->getLuas() . 'cm';

    //Keliling

?>