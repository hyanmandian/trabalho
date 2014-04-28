<?php

class Age extends Statistics {
    
    public function getName() {
        return "idade";
    }
    
    public function render(){
        return $this->generateStatistic(0);
    }
}
