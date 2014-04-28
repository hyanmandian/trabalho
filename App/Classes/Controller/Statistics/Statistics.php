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
    
    protected function generateStatistic($type){
          
        $statistic = array();
        
        foreach($this->getInterviewees() as $interview){
            if (isset($statistic[$interview[4]][$interview[$type]])) {
                $statistic[$interview[4]][$interview[$type]] += 1;
            } else {
                $statistic[$interview[4]][$interview[$type]] = 1;
            }
        }
        
        return $statistic;
    }
    
    abstract function getName();

    abstract function render();
}
