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

    public static function getType()
    {
        return 'Desktop';
    }

    public function getEssential()
    {
        return "Name: {$this->name} - Price: {$this->getPrice()}";
    }
    
}