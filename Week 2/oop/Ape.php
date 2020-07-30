<?php

class Ape{
    public $name;
    private $yell = 'Auooo';
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function yell()
    {
        echo $this->yell;
    }
}
