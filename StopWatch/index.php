<?php
include_once "StopWatch.php";
$watch = new StopWatch();
echo $watch ->getStartTime();
function sortArr(){
    $arr =[];
    for ($i = 0; $i < 10000000 ;$i++){
        $arr[]= rand(100,10000);
    }
    sort($arr);
}
$watch ->start();
sortArr();
$watch ->stop();
echo $watch ->getElapsedTime();

