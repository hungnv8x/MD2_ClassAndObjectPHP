<?php

class Rectangle
{
 public $width;
 public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->height * $this->width;
    }
    public function getPerimeter(){
        return ($this->height + $this->width) *2;
    }

    public function display()
    {
        return "Rectangle  co width : ".$this->width." va height : ".$this->height;
    }
}