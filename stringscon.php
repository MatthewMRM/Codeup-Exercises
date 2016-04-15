<?php

echo "We don't need no education\n";
echo "We don't need no thought control" . PHP_EOL;
$limerick = <<<POEM
All the world's a stage,
And all the men and women merely players:
They have their exits and their entrances;
POEM;
echo $limerick;
$firstName = 'Joe';
$lastName = 'Blow';
$address = '123 Any Street';
echo "$lastName , $firstName , $address" . PHP_EOL;
echo "$firstName$lastName $address" . PHP_EOL;
echo "$firstName $lastName\n$address" . PHP_EOL;

