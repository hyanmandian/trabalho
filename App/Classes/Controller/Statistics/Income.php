<?php

class Income extends Statistics {
    
    public function getName() {
        return "renda";
    }
    
    public function render(){
        return $this->generateStatistic(1);
    }
}
