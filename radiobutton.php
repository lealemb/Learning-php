<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="radiobutton.php" method="post">
        <input type="radio" name="credit_card" value="Visa"> Visa <br>
        <input type="radio" name="credit_card" value="Master Card"> Master Card <br>
        <input type="radio" name="credit_card" value="American Express"> American Express <br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>

</html>

<?php

if (isset($_POST["confirm"])) {

    $credit_card = null;


    if (isset($_POST["credit_card"])) {
        $credit_card = $_POST["credit_card"];
    }
    if ($credit_card == "Visa") {
        echo "You have selected Visa";
    } elseif ($credit_card == "Master Card") {
        echo "You have selected Master Card";
    } elseif ($credit_card == "American Express") {
        echo "You have selected American Express";
    } else {
        echo "Please make a selection";
    }
}
?>