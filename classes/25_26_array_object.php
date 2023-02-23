<?php

$array = array('BD', 'IND', 'PAK', 'AUS', 'END', 'SRI', 'AFG');

$arrayObject = new ArrayObject($array);

$iterator = $arrayObject->getIterator();


while ($iterator->valid()) {
    echo $iterator->current() . '<br>';
    $iterator->next();
}

echo '<br>';

$li = new LimitIterator($iterator, 0, 4);

foreach ($li as $value) {
    echo $value . '<br>';
}

echo '<br>';

$ci = new CachingIterator($li);

foreach ($ci as $value) {
    echo $value;

    if ($ci->hasNext()) {
        echo ', ';
    }
}