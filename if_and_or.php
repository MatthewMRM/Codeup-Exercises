<?php

$x = 0;
$y = 5;
$z = 10;

// TODO:
// If $x < $y < $z then echo "{$x} < {$y} < {$z}\n";
if ($x < $y && $y < $z) {
	echo "{$x} < {$y} < {$z}\n";
}

// TODO:
// If 0 is less than $x OR $x is less than 10
// then echo the result as a sentence "0 is less than {$x} OR {$x} is less than 10".
if ($x < $x || $x < $z) {
	echo "0 is less than {$x} || {$x} is less than 10\n";
}
// TODO:
// repeat the if statement for $y and $z.
if ($y < $y || $y < $z) {
	echo "5 is less than {$y} || {$y} is less than 10\n";
}

// TODO:
// If 0 is less than $x AND $x is less than 10
// then echo the result as a sentence "0 is less than {$x} AND {$x} is less than 10".
if ($x < $x && $x < $z) {
	echo "0 is less than {$x} && {$x} is less than 10\n";
}

// TODO:
// repeat the if statement for $y and $z.
if ($y < $y && $y < $z) {
	echo "0 is less than {$y} && {$y} is less than 10\n";
}
