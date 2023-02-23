<?php
$br = '<br>';

$country = ['bangladesh', 'india', 'pakisthan', 'sri lanka'];
$country_count = count($country);

for ($x = 0; $x < $country_count; $x++) {
    echo "$country[$x], ";
}

echo $br;

foreach ($country as $value) {
    echo "$value, ";
}

echo $br;

// =============================================================

$gpa = [
    'sifat' => '4.79',
    'sayeed' => '4.50',
    'shahed' => '4.30',
];

$gpa_key = array_keys($gpa);
$gpa_key_count = count($gpa);

for ($x = 0; $x < $gpa_key_count; $x++) {
    echo "$gpa_key[$x], ";
}

echo $br;

$gpa_value = array_values($gpa);
$gpa_value_count = count($gpa_value);

for ($x = 0; $x < $gpa_value_count; $x++) {
    echo "$gpa_value[$x], ";
}

echo $br;

for ($x = 0; $x < $gpa_key_count; $x++) {
    echo "$gpa_key[$x] => $gpa_value[$x], ";
}

echo $br;

foreach ($gpa as $key => $value) {
    echo "$key => $value, ";
}


// =============================================================

$client = [
    ['1', 'Farhan', 'BD'],
    ['2', 'Imran', 'BD'],
    ['3', 'Kausar', 'BD'],
    ['4', 'Thomas', 'USA'],
];

/* echo "<pre>";
var_dump($client);
echo "</pre>"; */

foreach ($client as $value) {
    foreach ($value as $value_1) {
        echo "$value_1, ";
    }
    echo $br;
}

echo $br;

$mykey = [
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


foreach ($mykey as $main_key => $main_value) {
    echo "$main_key => ";
    foreach ($main_value as $sub_key => $sub_value) {

        if (is_string($sub_key)) {
            echo "$sub_key => ";
        }

        echo "$sub_value, ";
    }
    echo $br;
}