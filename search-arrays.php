<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


function searchArray($query, $names)
{
	if(array_search($query, $names) !== false){
		return "TRUE" . PHP_EOL;
	} else {
		return "FALSE" . PHP_EOL;
	} 
}
function compareArray($names, $compare) 
{
	$match = 0;
	foreach ($names as $name) {
		if(array_search($name, $compare) !== false)
		{
			$match++;
		}
	}	
	return $match;
}
echo searchArray($compare, $names) . PHP_EOL;
echo compareArray($names,$compare) . PHP_EOL;