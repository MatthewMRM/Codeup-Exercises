<?php
// Functions listed below to call upon the variables
function add($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
        return "ERROR: Both arguments must be numbers\n";
    }
}

function subtract($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    } else {
        return "ERROR: Both arguments must be numbers\n";
    }
}

function multiply($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
        return $a * $b;
    } else {
        return "ERROR: Both arguments must be numbers\n";
    }
}

function divide($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
        return $a / $b;
    } else {
        return "ERROR: Both arguments must be numbers\n";
    }
}

function modulus($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
        return $a % $b;
    } else {
        return "ERROR: Both arguments must be numbers\n";
    }
}

// My variables listed that are called upon
echo add(10,5) . PHP_EOL;
echo subtract(10, 5) . PHP_EOL;
echo multiply(10,5) . PHP_EOL;
echo divide(10,5) . PHP_EOL;
echo modulus(10,5) . PHP_EOL;

// Add code to test your functions here
