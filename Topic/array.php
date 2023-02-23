<?php
include '../asset/header.php';


$array = [
    'Bangladesh',
    'India',
    'Pakisthan'
];


// Type 1

echo $array[0] . '<br>';

// Type 2
echo '<br>';

$z = count($array);
for ($x = 0; $x < $z; $x++) {
    echo $array[$x] . '<br>';
}


// Type 3
echo '<br>';

foreach ($array as $value) {
    echo $value . '<br>';
}








$array_1 = [
    'Bangladesh' => 'COUNTRY_1',
    'India' => 'COUNTRY_2',
    'Pakisthan' => 'COUNTRY_3'
];


// Type 4
echo '<br>';

echo $array_1['Bangladesh'] . '<br>';



// Type 5
echo '<br>';


$array_1_keys = array_keys($array_1);
$array_1_values = array_values($array_1);


$array_1_count = count($array_1_keys);

for ($x = 0; $x < $array_1_count; $x++) {
    echo $array_1_keys[$x] . '<br>';
}

echo '<br>';

for ($x = 0; $x < $array_1_count; $x++) {
    echo $array_1_values[$x] . '<br>';
}


// Type 6
echo '<br>';

foreach ($array_1 as $key => $value) {
    echo "$key = $value <br>";
}







$array_2 = [
    ['1', 'Bangladesh', 'Country 1'],
    ['2', 'India', 'Country 2'],
    ['3', 'Pakisthan', 'Country 3']
];


// Type 7
echo '<br>';

echo $array_2[0][1] . "<br>";


// Type 8
echo '<br>';


foreach ($array_2 as $value) {
    foreach ($value as $n_value) {
        echo $n_value . ' | ';
    }
    echo '<br>';
}






$array_3 = [
    "key01" => [
        "value01",
        "value02"
    ],
    "key02" => [
        "value01",
        "value02"
    ],
    "key03" => [
        "value01" => "innervalue01",
        "value02" => "inervalue02"
    ],
    "key04" => [
        "value01",
        "value02"
    ],
];



// Type 9
echo '<br>';


foreach ($array_3 as $key => $value) {

    echo $key . ' -> ';

    foreach ($value as $n_value) {
        echo $n_value . ', ';
    }
    echo '<br>';
}













include '../asset/footer.php';