<?php

REQUIRE_ONCE 'Rectangle.php';
REQUIRE_ONCE 'Square.php';
$Rectangle = new Rectangle(20, 40);
echo 'Rectangle One area is: ' . $Rectangle->area() . PHP_EOL;
$Rectangle = new Rectangle(3, 100);
echo 'Rectangle Two area is: ' . $Rectangle->area() . PHP_EOL;
$Square = new Square(2, 2);
echo 'Square area is: ' . $Square->area() . PHP_EOL;
echo 'Square perimeter is: ' . $Square->perimeter() . PHP_EOL;
$Square = new Square(8, 8);
echo 'Square area is: ' . $Square->area() . PHP_EOL;
echo 'Square perimeter is: ' . $Square->perimeter() . PHP_EOL;
?>