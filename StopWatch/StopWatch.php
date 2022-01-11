<?php

class StopWatch
{
private $startTime;
private $endTime;

    public function __construct()
    {
        $this->startTime = date("h:i:s",time());;
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
        $this->startTime = date("h:i:s",time());
    }
    public function stop(){
        $this->endTime = date("h:i:s",time());
    }
    public function getElapsedTime() {
       return $this->stop() - $this->start() ;
    }
}