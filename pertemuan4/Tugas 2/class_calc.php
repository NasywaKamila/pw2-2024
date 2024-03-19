<?php
class Calculator {
    private $bilangan1;
    private $bilangan2;

    public function __construct($bil1, $bil2) {
        $this->bilangan1 = $bil1;
        $this->bilangan2 = $bil2;
    }

    public function pertambahan() {
        return $this->bilangan1 + $this->bilangan2;
    }

    public function pengurangan() {
        return $this->bilangan1 - $this->bilangan2;
    }

    public function pembagian() {
        return $this->bilangan1 / $this->bilangan2;
    }

    public function perkalian() {
        return $this->bilangan1 * $this->bilangan2;
    }
}

// Membuat objek dan menampilkan masing-masing metode
$calculator1 = new Calculator(10, 5);
echo "Pertambahan: " . $calculator1->pertambahan() . "\n";

echo '<br>';

$calculator2 = new Calculator(15, 10);
echo "Pengurangan: " . $calculator2->pengurangan() . "\n";

echo '<br>';

$calculator3 = new Calculator(80, 4);
echo "Pembagian: " . $calculator3->pembagian() . "\n";

echo '<br>';

$calculator4 = new Calculator(5, 2);
echo "Perkalian: " . $calculator4->perkalian() . "\n";
?>