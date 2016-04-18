
<?php 
$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
echo "Prints type using gettype()." . PHP_EOL;
foreach ($things as $thing) {
	echo gettype($thing) . PHP_EOL;
}
echo PHP_EOL . "Goes through if and else ifs to figure out what type each one is." . PHP_EOL;
foreach ($things as $thing) {
	if (is_int($thing)){
		echo "{$thing} is a number.\n";
	} else if (is_float($thing)){
		echo "{$thing} is a floating number.\n";
	} else if (is_bool($thing)) {
		echo "{$thing} is a boolean.\n";
	} else if (is_array($thing)) {
		echo print_r($thing) . " is an array.\n";
	} else if (is_null($thing)) {
		echo "{$thing} is a null.\n";
	} else if (is_string($thing)) {
		echo "{$thing} is a string.\n";
	}
}
	
echo PHP_EOL . "Prints out all the items in the array." . PHP_EOL;
foreach ($things as $thing) {
	if (is_scalar($thing)){
		echo $thing .PHP_EOL;
	} else if (is_array($thing)) {
		print_r($thing) . PHP_EOL;
	} else if (is_bool($thing)) {
		var_dump($thing) .PHP_EOL;
	} else if (is_null($thing)) {
		echo $thing . PHP_EOL;
	}
}