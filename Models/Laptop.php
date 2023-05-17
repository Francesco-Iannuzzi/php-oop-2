<?php 

class Laptop extends Computer{
    public function __construct($name, $monitor, $hardDisk, $cpu, $type, $image, public string $battery) {
        parent::__construct($name, $monitor, $hardDisk, $cpu, $type, $image);
        $this->battery = $battery;
    }

    public function setType($type)
    {
        $this->type = 'LAPTOP';
       return $this->type;
    }

}