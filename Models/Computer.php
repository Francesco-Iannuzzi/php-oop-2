<?php 
class Computer{

    public $name;
    public $monitor;
    public $hardDisk;
    public $cpu;
    public $image;


    public function __construct(string $name, string $monitor, string $hardDisk, string $cpu, string $image) {
        $this->name = $name;
        $this->monitor = $monitor;
        $this->hardDisk = $hardDisk;
        $this->cpu = $cpu;
        $this->image = $image;
    }

    public function getType()
    {
        return 'Desktop';
    }

}