<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

<?php

$arr = array();

array_push($arr, 1);
array_push($arr, 10);
array_push($arr, 20);

for($i=0;$i<sizeof($arr);$i++)
    print $arr[$i];

    // DO SOMETHING TO REMOVE THE ELEMENT 10

    // print the array again !!!
for($i=0;$i<sizeof($arr);$i++)
    print $arr[$i];


?>
    
</body>
</html>