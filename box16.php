<?php
session_start();
if (!isset($_SESSION['bb'])) {
    $_SESSION['bb'] = array();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form {
            display: inline-block;
        }

        .redbox {
            display: inline-block;
            background-color: red;
            width: 20px;
            height: 20px;
            padding: 50px;
            border: 5px red;
            border-radius: 50px;
            margin: 20;


        }

        .bluebox {
            display: inline-block;
            background-color: blue;
            width: 20px;
            height: 20px;
            padding: 50px;
            border: 5px blue;
            border-radius: 50px;
            margin: 20;

        }

        .greenbox {
            display: inline-block;
            background-color: green;
            width: 20px;
            height: 20px;
            padding: 50px;
            border: 5px green;
            border-radius: 50px;
            margin: 20;

        }

        .yellowbox {
            display: inline-block;
            background-color: yellow;
            width: 20px;
            height: 20px;
            padding: 50px;
            border: 5px yellow;
            border-radius: 50px;
            margin: 20;

        }
    </style>
</head>

<body>

    <form action="box16.php" method="get">
        <input type="text" name="Number">

        <select name="chooseColor">
            <option value="Red">Red</option>
            <option value="Blue">Blue</option>
            <option value="Green">Green</option>
            <option value="Yellow">Yellow</option>
        </select>
        <input type="submit" name='add' value='Add'>
        <input type="submit" name="remove" value="Remove">
        <hr>
    </form>
    <?php

    if (isset($_GET['removeLine']) && 
        isset($_GET['line']) ) {

        array_splice($_SESSION['bb'],$_GET['line'],1);
        // remove element number  $_GET['line'] from the array $_SESSION['bb'] !!!!
        //print "yaay you are about to remove line number" . $_GET['line'];
    }

    if (isset($_GET['remove'])) {

        session_destroy();
        session_unset();
        print "Your data has been deleted !!!";
    } else {
        if (
            isset($_GET['Number']) &&
            isset($_GET['add']) &&
            is_numeric($_GET['Number'])
        ) {
            $result = "";
            for ($i = 0; $i < $_GET['Number']; $i++) {

                if ($_GET["chooseColor"] == 'Red') {
                    $result = $result . '<div class="redbox"></div>';
                }
                if ($_GET["chooseColor"] == 'Blue') {
                    $result = $result . '<div class="bluebox"></div>';
                }
                if ($_GET["chooseColor"] == 'Green') {
                    $result = $result . '<div class="greenbox"></div>';
                }
                if ($_GET["chooseColor"] == 'Yellow') {
                    $result = $result . '<div class="yellowbox"></div>';
                }
            }
            array_push($_SESSION['bb'], $result);
        }
        if (
            isset($_GET['Number']) &&
            !is_numeric($_GET['Number'])
        ) {
            print("Invalid number");
        }

        print "<br>";
        for ($i = 0; $i < sizeof($_SESSION['bb']); $i++) {
            print $i + 1;
            print $_SESSION['bb'][$i];
            ?>
            <form action="box16.php" method="get">
                <input type="hidden" name="line" value="<?php print $i; ?>">
                <input type="submit" name="removeLine" value="Remove this line">
            </form>
            <br>
    <?php
        }
    }
    ?>

</body>

</html>