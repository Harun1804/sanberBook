<?php

class Frog{
    public $name;
    private $jump = 'hop hop';
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function jump()
    {
        echo $this->jump;
    }
}
