<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>
<?php
$a = isset($_GET['a']) ? $_GET['a'] :0;

$b = isset($_GET['b']) ? $_GET['b'] :10;
echo $a + $b;

?>
</h2>
</body>
</html>