<?php

class Csv {
    private $file;

    public function __construct() {
        $this->file = $this->_open("r");
    }
    
    private function _open($mode){
        $fileName = DOCROOT . "../uploads/election_poll.csv";
        return fopen($fileName, $mode);
    }
    
    private function _filterFields($participant) {
        $participant[0] = Helpers::age($participant[0]);
        $participant[1] = Helpers::schooling($participant[1]);
        $participant[2] = Helpers::income($participant[2]);
        $participant[3] = Helpers::sex($participant[3]);
        $participant[4] = Helpers::candidate($participant[4]);
        
        return $participant;
    }
    
    public function add($values){
        $file = $this->_open("a");
        fputcsv($file, $values, ";");
    }
    
    public function getAll($filtrated = TRUE) {
        $participants = array();

        while (($participant = fgetcsv($this->file, 0, ";")) !== FALSE) {
            $participants[] = $filtrated ? $this->_filterFields($participant) : $participant;
        }

        return $participants;
    }

}
