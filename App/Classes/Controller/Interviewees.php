<?php

class Interviewees {
    
    const PERPAGE = 5;

    private $poll;
    
    public function __construct() {
        $this->poll = new Csv();
    }
    
    public function getPoll($page){
        $interviewees = $this->poll->getAll();
        $interviewees = array_chunk($interviewees, self::PERPAGE);
		
		if(!empty($interviewees)){
			return array("interviewees" => $interviewees[$page - 1], "quantity" => count($interviewees));
		}else{
			return NULL;
		}
    }

}
