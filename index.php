<?php

require_once 'Printable.php';
require_once 'Furniture.php';
require_once 'Sofa.php';
require_once 'Chair.php';
require_once 'Bench.php';


$furniture = new Furniture(130, 200, 30);

echo "Area: " . $furniture->area() . "<br>";
echo "Volume: " . $furniture->volume() . "<br>";

$furniture->setIsForSeating(true);
$furniture->setIsForSleeping(false);

echo "Is for seating? " . ($furniture->getIsForSeating() ? 'Yes' : 'No') . "<br>";
echo "Is for sleeping? " . ($furniture->getIsForSleeping() ? 'Yes' : 'No') . "<br>";

echo "<br>";
echo "<br>";


$sofa = new Sofa(100, 150, 100, 4, 4, 150);
$sofa->setIsForSeating(true);
$sofa->setIsForSleeping(false);

echo "Area: " . $sofa->area() . "<br>";
echo "Volume: " . $sofa->volume() . "<br>";
echo $sofa->areaOpened() . "<br><br>";

$sofa->setIsForSleeping(1);
$sofa->setLengthOpened(200);
echo $sofa->areaOpened() . "<br><br>";


$furniture2 = new Furniture(100, 50, 200);
$furniture2->setIsForSeating(true);
echo $furniture2->print() . "<br>";
echo $furniture2->sneakpeek() . "<br>";
echo $furniture2->fullinfo() . "<br><br>";

$sofa2 = new Sofa(120, 80, 250, 3, 2, 300);
$sofa2->setIsForSleeping(true);
echo $sofa2->print() . "<br>";
echo $sofa2->sneakpeek() . "<br>";
echo $sofa2->fullinfo() . "<br><br>";

echo $sofa2->areaOpened();

$chair = new Chair(50, 100, 50);
$chair->setIsForSeating(true);
echo $chair->print() . "<br>";
echo $chair->sneakpeek() . "<br>";
echo $chair->fullinfo() . "<br><br>";


$bench = new Bench(150, 40, 300, 5, 0, 350);
$bench->setIsForSleeping(false);
echo $bench->print() . "<br>";
echo $bench->sneakpeek() . "<br>";
echo $bench->fullinfo() . "<br>";