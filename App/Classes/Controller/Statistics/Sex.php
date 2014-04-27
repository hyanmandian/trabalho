<?php

class Sex extends Statistics {
    
    public function getName() {
        return "sexo";
    }
    
    public function render(){
        return $this->generateStatistic(3);
    }
}
