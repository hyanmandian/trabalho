<?php

class Participants {
    
    const PERPAGE = 5;

    private $electionPoll;
    
    public function __construct() {
        $this->electionPoll = new Csv();
    }
    
    public function getElectionPoll($page){
        $participants = $this->electionPoll->getAll();
        $participants = array_chunk($participants, self::PERPAGE);
        return array("participants" => $participants[$page - 1], "quantity" => count($participants));
    }

}
