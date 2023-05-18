<?php 
class Computer{

    public function __construct(public string $name, public string $monitor, public string $hardDisk, public string $cpu, public string $image) {
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