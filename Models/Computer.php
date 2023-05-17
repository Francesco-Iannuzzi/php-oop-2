<?php 
class Computer{

    public function __construct(public string $name, public string $monitor, public string $hardDisk, public string $cpu, public string $type) {
        $this->name = $name;
        $this->monitor = $monitor;
        $this->hardDisk = $hardDisk;
        $this->cpu = $cpu;
        $this->type = $type;
    }

    public function setType($type)
    {
       $this->type = 'nothing';
       return $this->type;
    }

}