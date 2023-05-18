<?php

class Desktop extends Computer{
    public function __construct($name, $monitor, $hardDisk, $cpu, $image, public string $case, public string $keyboard, public string $mouse,) {
        parent::__construct($name, $monitor, $hardDisk, $cpu, $image);
        $this->case = $case;
        $this->keyboard = $keyboard;
        $this->mouse = $mouse;
    }

    public function getType()
    {
        return 'Computer';
    }
    
}