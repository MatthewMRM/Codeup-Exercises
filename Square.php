<?php
class Square extends Rectangle
{
    public function __construct($height)
    {
         $this->setHeight($height);
    } 
    public function setHeight($height)
    {
        $this->height = $height;
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function area() 
    {
        return $this->height * 2;
    }
    public function perimeter()
    {
        return $this->height * 4;
    }
};
?>