<?php

class StopWatch
{
public $startTime;
public $endTime;

    public function __construct()
    {
        $this->startTime = microtime();
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function start(){
        $this->startTime = microtime();
    }
    public function stop(){
        $this->endTime = microtime();
    }
    public function getElapsedTime() {
       return $this->getEndTime() - $this->getStartTime() ;
    }
}