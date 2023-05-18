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

    public function getDetails()
    {
        return "Name: {$this->name} - Monitor: {$this->monitor} - Hard Disk: {$this->hardDisk} CPU: {$this->cpu} - Battery: {$this->battery} ";
    }

}