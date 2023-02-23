<?php
// Class Constant - const
// Static (property & method) - static
// Inheritance - extends
// Preventing from Extending or Overriding (class & method) - final
// Access modifiers - public | protected | private



class test {
    const NAME = 'Sifat Ullah';
    static $sayma = 'sayma is a posa manush <br>';
    public $bd = 'BD <br>';


    public static function method() {
        echo self::NAME . '<br>';
        echo self::$sayma . '<br>';
    }


    public function method_2($a, $b) {
        $c = $a + $b;
        echo "($a + $b) = $c <br>";
    }
}

class topic extends test {
    const NAME = 'Rifat Uddin <br>';
    static $sayma = 'sayma is a good girl <br>';
    public $bd = 'Bangladesh <br>';

    public static function method() {
        echo 'Hi <br>';
    }

    public function method_2($a, $b) {
        $c = $a * $b;
        echo "($a * $b) = $c <br>";
    }
}


interface college {
    public function ssr_polytechnic();
    public function dhaka_polytechnic();
    public function cumilla_polytechni();
}

interface school {
    public function ssr_school();
    public function dhaka_school();
    public function cumilla_school();
}

class collegeName implements college, school {
    public function ssr_polytechnic() {
        echo 'This is SSR Polytechnic <br>';
    }
    public function dhaka_polytechnic() {
        echo 'This is Dhaka Polytechnic <br>';
    }
    public function cumilla_polytechni() {
        echo 'This is Cumilla Polytechnic <br>';
    }
    public function ssr_school() {
        echo 'This is SSR School <br>';
    }
    public function dhaka_school() {
        echo 'This is Dhaka School <br>';
    }
    public function cumilla_school() {
        echo 'This is Cumilla School <br>';
    }
}


abstract class university {

    public function university_name() {
        echo 'Bangladesh is a currupted country <br>';
    }

    abstract public function university_id();
}

class uni extends university {
    public function v1() {
        parent::university_name();
    }
    public function university_id() {
        echo 'This is Abstract Class <br>';
    }
}





echo test::NAME . '<br>';
echo test::$sayma;
test::method();


$test = new test;
echo $test->bd;
$test->method_2(50, 20);


$topic = new topic;
echo topic::NAME;
echo topic::$sayma;
echo $topic->bd;
$topic->method();
$topic->method_2(20, 30);


$collegeName = new collegeName;
$collegeName->ssr_polytechnic();
$collegeName->dhaka_polytechnic();
$collegeName->cumilla_polytechni();
$collegeName->ssr_school();
$collegeName->dhaka_school();
$collegeName->cumilla_school();



$university = new uni;
$university->v1();
$university->university_id();





class country {
    public function __get($name) {
        echo "This is undifine property <b>$name</b> - __get()<br>";
    }

    public function __set($name, $value) {
        echo "This is undifine property <b>$name</b> & the value is <b>$value</b> - __set()<br>";
    }

    public function __call($name, $arguments) {
        echo "This is undifine method <b>$name</b> & arguments are <b>" . implode(', ', $arguments) . "</b> - __cell()<br>";
    }
}



$country = new country;
$country->Hasan_khan;
$country->country_1 = 'Bangladesh';
$country->country_method('bangladesh', 'india');