<?php

/**
 * In this file you need to learn on
 * how if else works in php
 * and how comparison operators works
 * Operator Name    Example Result
        ==  Equal   $x == $y    Returns true if $x is equal to $y
        === Identical   $x === $y   Returns true if $x is equal to $y, and they are of the same type
        !=  Not equal   $x != $y    Returns true if $x is not equal to $y
        <>  Not equal   $x <> $y    Returns true if $x is not equal to $y
        !== Not identical   $x !== $y   Returns true if $x is not equal to $y, or they are not of the same type
        >   Greater than    $x > $y Returns true if $x is greater than $y
        <   Less than   $x < $y Returns true if $x is less than $y
        >=  Greater than or equal to    $x >= $y    Returns true if $x is greater than or equal to $y
        <=  Less than or equal to   $x <= $y    Returns true if $x is less than or equal to $y
 */


//initialize variable
$a = 0;
$b = 1;
$c = '1';

//basic if else
if ($a > $b) {
    //take a look the . (period), it's called concat we combine a php variable into string
    echo 'yes ' . $a . ' greater than ' . $b;
} else {
    echo 'no ' . $a . ' less than '. $b;
}

//defensive if else
//here we set the value of the text
$text = 'yes ' . $a . ' greater than ' . $b;

if ($a < $b) {
    //if the condition meet, changed the value of the $text
    $text = ' no ' . ' less than ' . $b;
}

//and print the value of $text
echo $text;


$identical = 'its not identical';

//here we show how identical comparison operators work
//we know the value of $b and $c is 1
//but $b is an int and $c is a string
// the ==== also compare the datatype
if ($b === $c) {
    $identical = ' its identical';
}

echo $identical;
