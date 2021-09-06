<?php

// loops:
// while
// do while
// for
// foreach


// while
$i = 0;
while ($i < 10) {
    echo $i . '<br>';
    $i++;
}


// do while
$i = 0;
do {
    echo $i . '<br>';
    $i++;
} while ($i < 10);


// for
for ($i = 0; $i < 10; $i++) {
    echo $i . '<br>';
}


// foreach
$colors = ['red', 'green', 'blue'];
foreach ($colors as $color) {
    echo $color . '<br>';
}


// foreach with key
$colors = ['red' => '#f00', 'green' => '#0f0', 'blue' => '#00f'];
foreach ($colors as $key => $color) {
    echo $key . ': ' . $color . '<br>';
}

?>



