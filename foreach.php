<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach ($things as $datum) {
	if (is_string($datum)) {
		echo "Sgt. Pepper\n";
		echo "11\n";
	
	} else if (is_null($datum)) {
		echo " \n";
	} else if (is_array($datum)) {
		echo "Array (1,2,3)\n";
	} elseif (is_float(3.14)) {
		echo "3.14\n";
	} elseif (is_string($datum)){
		echo "12 + 7\n";
	} elseif (is_bool($datum)){
		echo " \n";
	} elseif (is_string($datum)){
		echo "11\n";
	}
}