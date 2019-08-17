<?php
/**
 * how to use looping statement in php
 */

$x = 0;
//while loop
while ($x <= 0) {
    echo 'the value of $x is: ' . $x . '<br />';
    $x++; //we increament the value of $x by 1
}

//for loop
for ($a = 0; $a <= 10; $a++) {
    echo 'the value of $a is: ' . $a . '<br />';
}


//foreach loop works only on array and objects
//in array we have $key and $value
//$key is always on the left and $value is on the right
//multi dimensional array sample
$array = ['car' => [
            'model' => 'Civic',
            'brand' => 'Honda',
            'make' => '2019'
        ],
        [
            'model' => 'Vios',
            'brand' => 'Toyota',
            'make' => '2019'
        ],
        [
            'model' => 'All new accent',
            'brand' => 'Hyundai',
            'make' => '2019'
        ]
    ];

foreach ($array as $key => $value) {
    if ($key == 'car') {
        foreach ($value as $k => $v) {
            echo $k . ' => '. $v . '<br />';
        }
    }
}
