<?php
setcookie("fav_food", "pizza", time() + (86400 * 2), "/"); // 86400 = 1 day
setcookie("fav_color", "blue", time() + (86400 * 3), "/"); // 86400 = 1 day
setcookie("fav_animal", "dog", time() + (86400 * 4), "/"); // 86400 = 1 day

/*
foreach ($_COOKIE as $key => $value) {
    echo "{$key}  =  {$value} <br>";
}
*/

if (isset($_COOKIE["fav_food"])) {
    echo "Buy some {$_COOKIE["fav_food"]} <br>";
} else {
    echo "I don't know your favorite food";
}
