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
    
	private function _filterByType($type, $field){
		switch ($type){
			case 0:
				return Helpers::age($field);
			case 1:
				return Helpers::schooling($field);
			case 2:
				return Helpers::income($field);
			case 3:
				return Helpers::sex($field);
		}
	}

	protected function generateStatistic($type){
          
        $statistic = array();
        
        foreach($this->getInterviewees() as $interview){
			$cadidate = Helpers::candidate($interview[4]);
			$field = $this->_filterByType($type, $interview[$type]);
			
            if (isset($statistic[$cadidate][$field])) {
                $statistic[$cadidate][$field] += 1;
            } else {
                $statistic[$cadidate][$field] = 1;
            }
        }
        
        return $statistic;
    }
    
    abstract function getName();

    abstract function render();
}
