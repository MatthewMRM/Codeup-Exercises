
<?php
class Square extends Rectangle
{
    public function __construct($height)
    {
        parent::__construct($height, $height);
    } 
    public function area() 
    {
        return $this->height * 4;
    }
    public function perimeter()
    {
        return ($this->height * 2) + ($this->width * 2);
    }
};
?>