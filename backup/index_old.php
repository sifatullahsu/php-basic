<?php
include 'header.php';



$br = "<br>";

/* $file = 'text.txt';
echo readfile($file) . $br;

$aa = fopen($file, 'w'); */
// echo fgets($aa);

/*  while (!feof($aa)) {
    echo fgets($aa) . $br;
} */

/* $add_txt = "This is bangladesh...";
fwrite($aa, $add_txt);

fclose($aa);


setcookie('visited', '', time() - 3600, '/');


if (isset($_COOKIE['visited'])) {
    // setcookie('visited', '1', time() + 84600, '/') or die('Could not set cookie..!!');
    echo 'You are our old visitor';
} else {
    echo 'This is your first visit on our website.';
} */

// FILTER_SANITIZE_STRING

/* 
    $aaaa = '<h3>I love Bangladesh</h3>';
    $filter = filter_var($aaaa, FILTER_SANITIZE_STRING);
    echo $filter . $br;


    $bbbb = '40';
    if (filter_var($bbbb, FILTER_VALIDATE_INT)) {
        echo 'This is interzer value' . $br;
    } else {
        echo 'This is not interzer' . $br;
    }
*/


// ===============  error_reporting() start =============== //
/* 
    error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

    $price = 50;

    if ($price == 80) {
        echo 'Correct';
    } else {
        echo 'Incorrect';
    }
*/
// =============== error_reporting() end =============== //


// =============== explode() function start =============== // 
/* 
    $mystr = "We love our beautiful country";
    $str = explode(' ', $mystr);

    print_r($str);
    echo $br . $str[1];
    */
// =============== explode() function end =============== // 


// =============== implode() function start =============== // 
/*     
    $mystr_1 = array('My', 'Name', 'is', 'Sifat');
    $str_1 = implode(', ', $mystr_1);
    echo $str_1; 
*/
// =============== implode() function end =============== //


// =============== Case Change Start =============== //
/* 
    if (isset($_POST['text'])) {
        $txt = $_POST['text'];
        echo strtoupper($txt); // String to upper (Uppercase)
        // echo strtolower($txt); // String to lower (lowercase)
        // echo ucfirst($txt); // Uppercase First
        // echo ucwords($txt); // Capitalize
        // echo trim($txt, '.'); // remove white space & dot from first & last.
        // echo ltrim($txt, '.'); // remove white space & dot from first that means left side.
        // echo rtrim($txt, '.'); // remove white space & dot from last that means right side.

    } else {
        $txt = '';
    }
    
    echo '<form action="index.php" method="post">';
    echo '<input type="text" name="text" value="<?php echo $txt; ?>">';
    echo '<input type="submit" value="Submit">';
    echo '</form>';
    */
// =============== Case Change End =============== //


// =============== require_once() function start =============== //
/* 
    require('require.php');
    require('require.php');
    require_once('require.php'); 
*/
// =============== require_once() function END =============== //


// =============== Array START =============== //
$car = array('Volvo', 'Volvo', 'Ferrari', 'TATA', 'Tesla', 'Toyota');
$country = array('Bangladesh', 'India', 'Pakisthan', 'Sri Lanka', 'Palestine', 'Afganisthan');
$ages = array(
    'Sifat' => '22',
    'Zakir' => '25',
    'Sayeed' => '27',
    'Shahed' => '21'
);
$users = array(
    array(
        'id' => '201',
        'first_name' => 'Sifat',
        'last_name' => 'Ullah'
    ),
    array(
        'id' => '203',
        'first_name' => 'Shihab',
        'last_name' => 'Ullah'
    ),
    array(
        'id' => '202',
        'first_name' => 'Shafi',
        'last_name' => 'Ullah'
    )
);

$lenght = count($car);

// echo $car[2] . $br;
// echo $lenght . $br;
/* 
    for ($i = 0; $i < $lenght; $i++) {
        echo $car[$i] . $br;
    }

    foreach ($ages as $age => $value) {
        echo 'Age of ' . $age . ' is ' . $value . $br;
    }
    */
// ========= array_change_key_case() function START =============//
/* 
    $function_test = array_change_key_case($ages, CASE_UPPER);
    $function_test = array_change_key_case($ages, CASE_LOWER); 
    
    print('<pre>');
    print_r($function_test);
    print('</pre>');
*/
// ========= array_change_key_case() function END =============//


// ========= array_column() function START =============//
/*  
    $firstname = array_column($users, 'first_name');
    $firstname_with_id = array_column($users, 'first_name', 'id');
    
    print('<pre>');
    print_r($firstname);
    print('</pre>');
    
    print('<pre>');
    print_r($firstname_with_id);
    print('</pre>'); 
*/
// ========= array_column() function END =============//



// ========= array_combine() function START =============//
/* 
    $combine = array_combine($car, $country);

    print('<pre>');
    print_r($combine);
    print('</pre>'); 
*/
// ========= array_combine() function END =============//


// ========= array_count_values() function START =============//
/* 
    $count_values = array_count_values($car);

    print('<pre>');
    print_r($count_values);
    print('</pre>'); 
*/
// ========= array_count_values() function END =============//






// =============== Array END =============== //

interface interfaceName
{
    public function mySchool();
    public function myCollege();
    public function myUniversity();
}

interface interfaceName_2
{
    public function graduation();
}

class institute implements interfaceName, interfaceName_2
{
    public function __construct()
    {
        $this->mySchool();
        $this->myCollege();
        $this->myUniversity();
        $this->graduation();
    }
    public function mySchool()
    {
        echo "This is sifat 1 <br>";
    }
    public function myCollege()
    {
        echo "This is sifat 2 <br>";
    }
    public function myUniversity()
    {
        echo "This is sifat 3 <br>";
    }
    public function graduation()
    {
        echo "This is comes form graduation method <br>";
    }
}
$institute = new institute();



/* 
    Abstract Class:
        1. abstract class ar kono object create kora jabe na. otherwise [fatal error]
        2. abstract class ta onno akta class ar maddhom a extends kore use korte hoy.
        3. Shudhu abstract class ar moddhe abstract method declare kora jay.
        4. abstract method ar kono body part thake na.
        5. jodi abstract method declare kora thake tahole sob gulo method e overwrite kore use korte hobe, otherwise [fatal error]
        6. abstract class ar je kono normal method ke extends class a call korar jonno parent::methodName use korte hoy.  


*/

// Video 13: Abstract Class
abstract class abstractName
{
    public $name = "Rifat Uddin";
    public $age = "25";

    public function abstractMethod()
    {
        echo "Name: {$this->name} and Age: {$this->age}<br>";
    }

    abstract public function abstractMethod_1();
}

class newAbstract extends abstractName
{
    public function newAbstractMethod()
    {
        parent::abstractMethod();
    }

    public function abstractMethod_1()
    {
        echo "Name: {$this->name} and Age: {$this->age}<br>";
    }
}
$newabstract = new newAbstract();
$newabstract->newAbstractMethod();
$newabstract->abstractMethod_1();




// Video 14: __get() & __set() & __call() Magic methods
class myName
{
    public function sifat()
    {
        echo "This is myName class <br>";
    }
    public function __get($name)
    {
        echo "<b>$name</b> This is __get function <br>";
    }
    public function __set($name, $value)
    {
        echo "<b>Name: $name, Value: $value</b> This is __set function <br>";
    }
    public function __call($name, $arguments)
    {

        echo "<b>Name: $name, Value:" . implode(', ', $arguments) . "</b> This is __call function <br>";
    }
}


// Video 15: Class & Method existance check using class_exists(), method_exists() functions. 
if (class_exists('myName')) {
    $mn = new myName();

    if (method_exists($mn, 'sifat')) {
        $mn->sifat();
        $mn->Hello;
        $mn->Hi = "bangladesh";
        $mn->me('5', '10', '15', '200');
    } else {
        echo 'Method dose not exists';
    }
} else {
    echo 'Class dose not exists';
}

/* spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
}); */

/*  function __autoload($class_name)
{
    include 'classes/' . $ . '.php';
} */


















include 'footer.php';
