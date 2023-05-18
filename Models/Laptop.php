<?php 

class Laptop extends Computer{
    public function __construct($name, $monitor, $hardDisk, $cpu, $image, public string $battery) {
        parent::__construct($name, $monitor, $hardDisk, $cpu, $image);
        $this->battery = $battery;
    }

    public function getType()
    {
        return 'Laptop';
    }

}