<?php

abstract class Statistics {

    private $interviewees;

    public function __construct() {
        $this->interviewees = new Csv();
        $this->interviewees = $this->interviewees->getAll(FALSE);
    }
    
    static function factory($type){
        $class = ucfirst($type);
        
        return new $class;
    }
    
    abstract function getName();

    abstract function render();
}
