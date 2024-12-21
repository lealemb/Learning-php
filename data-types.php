<?php
$name = "John";
$food = "Pizza";
$color = "Blue";

$age = 25;
$email = "fake@gmail.com";
$phone = "123-456-7890";

$gpa = 3.5;
$price = 19.99;

$employed = true;
$student = false;
$online = true;

echo "Hello {$name} <br>";
echo "you like {$food}";
echo "your favorite color is {$color} <br>";

echo "you are {$age} years old <br>";


echo "your email is {$email} <br>";
echo "your gpa is {$gpa} <br>";
echo "your phone number is {$phone} <br>";
echo "the price is \${$price} <br>";

echo "you are employed: {$employed} <br>";
echo "you are a student: {$student} <br>";
echo "you are online: {$online} <br>";
