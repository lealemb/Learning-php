<?php
// array = "variable" which can hold more than one value at a time.

$foods = array('pizza', 'pasta', 'salad', 'vegetables');
/** 
echo $foods[0] . "<br>";
echo $foods[1] . "<br>";
echo $foods[2] . "<br>";
echo $foods[3] . "<br>";
 */
// array_push($foods, 'fruit', 'meat');
// array_pop($foods);
// array_shift($foods);
array_shift($foods);
foreach ($foods as $food) {

    echo $food . "<br>";
}
