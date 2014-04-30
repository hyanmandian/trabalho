<?php

class FactoryStatistics {
    
    static function createStatistic($type){
		switch ($type) {
			case 1:
				return new Age;
			case 2:
				return new Schooling;
			case 3:
				return new Income;
			case 4:
				return new Sex;
			default :
				header("Location: index.php");
		}
    }
}