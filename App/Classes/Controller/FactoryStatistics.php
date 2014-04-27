<?php

class FactoryStatistics {
        
    static function createStatistic($type){
        $class = ucfirst($type);
        
        return new $class;
    }
}