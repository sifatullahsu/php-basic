<?php

// Video 18: Type Hinting

class typeHinting {
    public $a;

    public function typeHintingMethod(array $a) {
        foreach ($a as $value) {
            echo $a[0] . '<br>';
        }
    }
}