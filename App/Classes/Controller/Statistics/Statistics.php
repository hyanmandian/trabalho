<?php

abstract class Statistics {

    private $interviewees;

    public function __construct() {
        $this->interviewees = new Csv();
        $this->interviewees = $this->interviewees->getAll(FALSE);
    }
    
    protected function getInterviewees(){
        return $this->interviewees;
    }
    
    abstract function getName();

    abstract function render();
}
