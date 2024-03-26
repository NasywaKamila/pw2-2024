<?php

    class Produk {
        protected $type;
        protected $uk;

        protected function __construct($type, $uk) {
            $this->type = $type;
            $this->fuel = $uk;
        }

        protected function getInfo() {
            echo 'Jenis Produk:' . $this->type . '<br>';
            echo 'Ukuran Produk:' . $this->fuel . '<br>';
        }

    }
    class Pakaian1 extends Produk {
        public $price;

        public function __construct($type, $fuel, $price, $stok) {
            parent::__construct($type, $fuel, $price);
            $this->price = $price;
            $this->stok = $stok;
        }
        public function getInfoPakaian1() {
            parent::getInfo();
            echo 'Harga Produk:' . $this->price . '<br>';
            echo 'Jumlah Produk:' . $this->stok . '<br>';
        }
    }

    class Pakaian2 extends Produk {
        public $price;

        public function __construct($type, $fuel, $price, $stok) {
            parent::__construct($type, $fuel, $price);
            $this->price = $price;
            $this->stok = $stok;
        }
        public function getInfoPakaian2() {
            parent::getInfo();
            echo 'Harga Produk:' . $this->price . '<br>';
            echo 'Jumlah Produk:' . $this->stok . '<br>';
        }
    }
    class Pakaian3 extends Produk {
        public $price;

        public function __construct($type, $fuel, $price, $stok) {
            parent::__construct($type, $fuel, $price);
            $this->price = $price;
            $this->stok = $stok;
        }
        public function getInfoPakaian3() {
            parent::getInfo();
            echo 'Harga Produk:' . $this->price . '<br>';
            echo 'Jumlah Produk:' . $this->stok . '<br>';
        }
    }
    class Pakaian4 extends Produk {
        public $price;

        public function __construct($type, $fuel, $price, $stok) {
            parent::__construct($type, $fuel, $price);
            $this->price = $price;
            $this->stok = $stok;
        }
        public function getInfoPakaian4() {
            parent::getInfo();
            echo 'Harga Produk:' . $this->price . '<br>';
            echo 'Jumlah Produk:' . $this->stok . '<br>';
        }
    }