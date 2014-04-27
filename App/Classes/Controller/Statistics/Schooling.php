<?php

class Schooling extends Statistics {
    
    public function getName() {
        return "escolaridade";
    }
    
    public function render(){
        return $this->generateStatistic(2);
    }
}
