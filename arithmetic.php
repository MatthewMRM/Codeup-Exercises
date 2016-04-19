<?php

function validateNumber($a, $b)
{
	return is_numeric($a) && is_numeric($b);
}
function validateNotZero($b)
{
	return $b == 0; 
}

function errorMessage($a, $b, $errortype)
{
	switch ($errortype) {
		case 'nonNumeric':
			echo "Error! You must enter two numbers, you entered {$a} and {$b} ";
			break;
		
		case 'divideByZero':
			echo "Error, you can't divide by zero! You entered {$a} and {$b} ";
			break;
		default:
			echo "Error not found!";
			break;
	}
}		
// Functions listed below to call upon the variables
function add($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
        return errorMessage($a, $b, nonNumeric);
    }
}

function subtract($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    } else {
        return errorMessage($a, $b, nonNumeric);
    }
}

function multiply($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
        return $a * $b;
    } else {
        return errorMessage($a, $b, nonNumeric);
    }
}

function divide($a, $b)
{
	if(!validateNumber($a, $b)){
		errorMessage($a, $b, 'nonNumeric');
	} else if(validateNotZero($b)){
		errorMessage($a, $b, 'divideByZero');
	} else {
    	return $a / $b;
    }
}

function modulus($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
        return $a % $b;
    } else {
        return errorMessage($a, $b, nonNumeric);
    }
}

// My variables listed that are called upon
echo add(10,w) . PHP_EOL;
echo subtract(10, 5) . PHP_EOL;
echo multiply(10,5) . PHP_EOL;
echo divide(10,0) . PHP_EOL;
echo modulus(10,5) . PHP_EOL;

// Add code to test your functions here
