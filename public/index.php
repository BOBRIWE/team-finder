<?php require_once '../vendor/autoload.php';?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Page</title>
</head>
<body>
<?php
use TeamFinder\MathExample\Calc;

$var = Calc::Add(1, 2);

echo $var;

?>
</body>
</html>