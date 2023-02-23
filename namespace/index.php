<?php



require("a.php");
require("b.php");



$a = new abc\v1\test\hello();
$b = new bcd\v1\test\hello();

// shortform of namespace
use bcd\v1\test as shortForm;

$c = new shortForm\hello();