<?php

class FactoryStatistics {
    
    static function createStatistic($class){
        return new $class;
    }
}