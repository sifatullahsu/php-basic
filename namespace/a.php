<?php

namespace abc\v1\test;

class hello {
    public function __construct() {
        echo "This is ABC namesapce.<br>";

        $nn = new \bcd\v1\test\hello();
    }
}