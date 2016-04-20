
<?php
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function searchArray($name, $array)
{
	if (array_search($name, $array) !== false){
		return TRUE;
	} else {
		return FALSE;
	}
	
}
function compareArrays($name1, $compare2)
{	
	$count = 0;
	foreach($name1 as $name){
		if (array_search($name, $compare2) !== false){
			$count++;
		}	
	}
	return $count; 
}
var_dump(searchArray('Tina',$names)) . PHP_EOL;
var_dump(searchArray('Bob',$names)) . PHP_EOL;
echo compareArrays($names, $compare) . PHP_EOL;