<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="associativArray.php" method="post">
        <label>Enter a country</label><br>
        <input type="text" name="country"><br>
        <input type="submit" value="submit">
    </form>
</body>

</html>
<?php
// associative array = array with key-value pairs
/** 
$capitals = array(
    "USA" => "Washington D.C.",
    "Argentina " => "Bounus Aires",
    "canada" => "Toronto",
    "Brazil" => "Brasilia",
    "italy" => "Rome"
);
 */
// echo $capitals["USA"] . "<br>";

// foreach ($capitals as $key => $value) {
//     echo "{$key} = {$value} <br>";
// }

// associative array = array with key-value pairs

$capitals = array(
    "USA" => "Washington D.C.",
    "Argentina " => "Bounus Aires",
    "canada" => "Toronto",
    "Brazil" => "Brasilia",
    "italy" => "Rome"
);

$capital = $capitals[$_POST['country']];
echo $capital;
?>