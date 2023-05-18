<?php 

trait Marketability
{
    public $price;
    public function getPrice()
    {
        return $this->code;
    }

    public function setPrice(int $numb, string $unit)
    {
        $this->code = $numb . $unit;
    }

}