<?php

REQUIRE_ONCE 'Rectangle.php';

$Rectangle = new Rectangle(20, 40);
echo 'Rectangle One area is: ' . $Rectangle->area() . PHP_EOL;
$Rectangle = new Rectangle(3, 100);
echo 'Rectangle Two area is: ' . $Rectangle->area() . PHP_EOL;
