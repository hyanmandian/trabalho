<?php

class FactoryStatistics {
    
    static function createStatistic($type){
        if(Converter::idToName($type)){
            $class = Converter::idToName($type);
            
            return new $class;
        }  else {
            header("Location: index.php");
        }
        
    }
}