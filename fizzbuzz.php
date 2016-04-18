
<?php 
// for loop to list the start, end and incurment of the numbers. 
// if statement states FizzBuzz for any number that is multiple by 3 and 5. 
// first else if statement states Fizz for any number that is multiple by 3.
// first else if statement states Buzz for any number that is multiple by 5.

for ($i = 1; $i <= 100; $i++) {
	if ($i % 3 == 0 && $i % 5 == 0) {
		echo "FizzBuzz\n";
	} else if ($i % 3 == 0) {
		echo "Fizz\n";
	} else if ($i % 5 == 0) {
		echo "Buzz\n";
	} else {
	    echo $i . PHP_EOL;
	}
}