<?php 

trait Marketability
{
    public $price;
    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice(float $numb, string $unit)
    {
        $this->price = $numb.'.00 ' . $unit;
    }

}