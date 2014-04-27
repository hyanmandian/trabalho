<?php

class Sex extends Statistics {
    
    public function getName() {
        return "sexo";
    }
    
    public function render(){
        
        $statistic = array();
        
        foreach($this->getInterviewees() as $interview){
            if (isset($statistic[$interview[4]][$interview[0]])) {
                $statistic[$interview[4]][$interview[0]] += 1;
            } else {
                $statistic[$interview[4]][$interview[0]] = 1;
            }
        }
        echo "<pre>";
        print_r($statistic);
    }
}
