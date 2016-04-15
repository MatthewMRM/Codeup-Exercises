<?php
$bottles = 99;
$less_bottles = $bottles - 1;
while ($bottles > 0){
	if ($bottles > 1){
		echo "{$bottles} bottles of beer on the wall, {$bottles} bottles of beer. Take one down and pass it around. {$less_bottles} bottles of beer on the wall.\n";
		$bottles--;
		$less_bottles = $bottles - 1;
	} else if ($bottles = 1){
		echo "{$bottles} bottle of beer on the wall. {$bottles} bottle of beer.  Take one down and pass it around, no more bottles of beer on the wall.\n";
		$bottles--;
	}
}
echo "No more bottles of beer on the wall, no more bottles of beer. Go to the store and buy some more, 99 bottles of beer on the wall.\n
	";
