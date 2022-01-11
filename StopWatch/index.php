<?php
include_once "StopWatch.php";
$watch = new StopWatch();
function sortArr(){
    $arr =[];
    for ($i = 0; $i < 100000 ;$i++){
        $arr[]= rand(100,10000);
    }
    sort($arr);
}
$watch ->start();
sortArr();
$watch ->stop();
echo $watch ->getElapsedTime();

