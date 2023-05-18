<?php

class Desktop extends Computer{
    public $case;
    public $keyboard;
    public $mouse;

    public function __construct($name, $monitor, $hardDisk, $cpu, $image, string $case, string $keyboard, string $mouse,) {
        parent::__construct($name, $monitor, $hardDisk, $cpu, $image);
        $this->case = $case;
        $this->keyboard = $keyboard;
        $this->mouse = $mouse;
    }

    public function getType()
    {
        return 'Desktop';
    }

    public function getDetails()
    {
        return "Name: {$this->name} - Monitor: {$this->monitor} - Hard Disk: {$this->hardDisk} CPU: {$this->cpu} - Case: {$this->case} - Keyboard: {$this->keyboard} - Mouse: {$this->mouse} - Price: {$this->getPrice()}";
    }
    
}