<?php


class bangladesh {
    public $capital;
    public $city;

    public function setCapital($a) {
        $this->capital = $a;
    }
    public function getCapital() {
        return $this->capital;
    }

    public function setCity($b) {
        $this->city = $b;
    }
    public function getCity() {
        return $this->city;
    }
}

/* $bangladesh = new bangladesh;

$bangladesh->setCapital('Dhaka');
$bangladesh->setCity('Bogura');

echo $bangladesh->getCapital() . '<br>';
echo $bangladesh->getCity() . '<br>';


$newBD = clone $bangladesh;

$newBD->setCapital('Dhaka New');
$newBD->setCity('Bogura New');

echo "<hr>";

echo $newBD->getCapital() . '<br>';
echo $newBD->getCity() . '<br>'; */