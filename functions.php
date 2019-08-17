<?php

/**
 * Here you need to learn php user defined functions
 */

//function is a php resereved word function
//function name is not case-sensitive
//but for standard purpose we use camelCase

function helloWorld()
{
    echo 'Hello World  <br />';
}

helloWorld();


//functions with arguments
//we can include as many arguements as we like, but surely your function will load slow
function whatsYourName($name)
{

    echo 'My Name is: ' . $name . '<br />';
}

whatsYourName('Juan');
whatsYourName('Pablo');
whatsYourName('Jesse');

//functions with default arguments
function setWeight($weight = 100)
{
    echo 'My weight is: ' . $weight . '<br />';
}
//if you declared the a default value and you call a function and submit a parameters
//it will overide the value of the default value of $weight else it will use the default
setWeight(80);
setWeight();

//function returning values
//we use return if we want to use the value that been process inside of our function
function sum($x, $y)
{
    $sum = $x + $y;
    return $sum;
}

echo sum(5, 10) . '<br >';
echo sum(2, 13) . '<br >';

$a = sum(1, 2);
$b = sum(5, 10);
$c = sum($a, $b);

echo $a . '<br>';
echo $b . '<br>';
echo $c . '<br>';
