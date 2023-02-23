<?php

class programing {
    public $html;
    public $css;
    public $php;
    private $js;
    protected $java;

    public function __construct() {
        $this->html = 'This is HTML';
        $this->css = 'This is CSS';
        $this->php = 'This is PHP';
        $this->js = 'This is JS';
        $this->java = 'This is JAVA';
    }
}

$pro = new programing;

// Seroalize ---
$ser = serialize($pro);
file_put_contents('programing.txt', $ser);

echo $ser;


// Unseroalize ---
$fileGet = file_get_contents('programing.txt');
$unSer = unserialize($fileGet);

echo '<pre>';
print_r($unSer);
echo '</pre>';