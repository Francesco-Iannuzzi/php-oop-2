<?php 

class Laptop extends Computer{
    public $battery;
    public function __construct($name, $monitor, $hardDisk, $cpu, $image, string $battery) {
        parent::__construct($name, $monitor, $hardDisk, $cpu, $image);
        $this->battery = $battery;
    }

    public function getType()
    {
        return 'Laptop';
    }

    public function getEssential()
    {
        return "Name: {$this->name} - Price: {$this->getPrice()}";
    }

}