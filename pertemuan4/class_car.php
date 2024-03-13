<?php

    class Car {
         //hak akses : public, private, protected
         //property
        public $brand;
        public $color;

        //method
        function getBrand () {
            return $this->brand;
        }
        function getColor () {
            return $this->color;
        }
    }

    //object
    $tesla = new Car();
    $supra = new Car();

    //set value / setter
    $tesla->brand = 'Tesla';
    $supra->brand = 'Supra';

    $tesla->color = 'Red';
    $supra->color = 'yellow';

    //echo
    echo $tesla->getBrand();
    echo '<br>';
    echo $tesla->getColor();
    echo '<br><br>';
    echo $supra->getBrand();
    echo '<br>';
    echo $supran->getColor();

 

    //$tesla = new Car();
    //echo $tesla->brand = 'Tesla';

    //echo '<br><br>';

    //$supra = new Car();
    //echo $supra->brand = 'Supra';

?>