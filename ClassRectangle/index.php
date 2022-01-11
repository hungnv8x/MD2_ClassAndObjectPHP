<?php
include_once "Rectangle.php";
$rect = new Rectangle(30,20);
echo "Dien tich : ". $rect ->getArea()."<br>";
echo "Chu vi: ". $rect ->getPerimeter()."<br>";
echo $rect ->display();