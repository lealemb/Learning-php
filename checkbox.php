<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="checkbox.php" method="post">
        <input type="checkbox" name="foods[]" value="pizza">Pizza<br>
        <input type="checkbox" name="foods[]" value="burger">Burger<br>
        <input type="checkbox" name="foods[]" value="pasta">Pasta<br>
        <input type="checkbox" name="foods[]" value="fries">Fries<br>
        <input type="submit" name="submit" value="submit">

    </form>
</body>

</html>
<?php
if (isset($_POST["submit"])) {

    if (isset($_POST["foods"])) {
        $foods = $_POST["foods"];
        foreach ($foods as $food) {
            echo $food . "<br>";
        }
    }

    /*if (isset($_POST["pizza"])) {
        echo "You have selected pizza <br>";
    }
    if (isset($_POST["burger"])) {
        echo "You have selected burger <br>";
    }
    if (isset($_POST["pasta"])) {
        echo "You have selected pasta <br>";
    }
    if (isset($_POST["fries"])) {
        echo "You have selected fries <br>";
    }

    if (empty($_POST["pizza"])) {
        echo "You Don't like pizza <br>";
    }
    if (empty($_POST["burger"])) {
        echo "You Don't like burger <br>";
    }
    if (empty($_POST["pasta"])) {
        echo "You Don't like pasta <br>";
    }
    if (empty($_POST["fries"])) {
        echo "You Don't like fries <br>";
    }
    */
}

?>