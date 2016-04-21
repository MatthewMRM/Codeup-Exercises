<?php
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];
function search($name, $array){
    $result = array_search($name, $array);
    if($result !== false) {
        return true;
    } else {
        return false;
    }
}
function compareArrays($arrayOne, $arrayTwo){
    $count = 0;
    foreach($arrayOne as $name){
        if(search($name, $arrayTwo)){
            var_dump($name);
            $count++;
        }
    }
    return $count;
}
function combineArrays($arrayOne, $arrayTwo)
{
    $newArray = [];
    foreach ($arrayOne as $person1) {
       $comparison = array_shift($arrayTwo);
       if ($person1 == $comparison) {
           array_push($newArray, $person1);
       } else{
            array_push($newArray, $person1, $comparison);
       }
    }
    return $newArray;
}
print_r(combineArrays($names, $compare)) ;


echo "There are " . compareArrays($names, $compare) . " items in the array that match." . PHP_EOL;
var_dump(search('Tina', $names));


