<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input {
            width: 40px;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <p>
        <input type="text" name="a"> X^2 +
        <input type="text" name="b"> X +
        <input type="text" name="c"> = 0
    </p>
    <button>GiaiPT</button>
</form>
</body>
</html>
<?php
include_once "QuadraticEquation.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_REQUEST["a"];
    $b = $_REQUEST["b"];
    $c = $_REQUEST["c"];
}
$pt = new QuadraticEquation($a, $b, $c);
$delta = $pt->getDiscriminant();
if (isset($a) && isset($b) && isset($c)) {
    if ($a == 0) {
        if ($b == 0) {
            if ($c == 0) {
                echo "Phuong Trinh vo so nghiem";
            } else {
                echo "Phuong trinh vo nghiem";
            }
        } else {
            echo "Phuong trinh co 1 nghiem X = " . -$c / $b;
        }
    } else {
        if ($delta < 0) {
            echo "The equation has no roots";
        } elseif ($delta == 0) {
            echo "Phuong trinh co nghiem X1 = X2 = " . (-$b / 2 * $a);
        } else {
            echo "Phuong trinh co 2 nghiem phan biet X1 = " . $pt->getRoot1() . " va X2 = " . $pt->getRoot2();
        }
    }

}
