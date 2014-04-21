<?php

class Csv {
    private $file;

    public function __construct() {
        $this->file = $this->_open("r");
    }
    
    private function _open($for){
        $fileName = DOCROOT . "../uploads/election_poll.csv";
        return fopen($fileName, $for);
    }
    
    private function _age($age) {
        switch ($age) {
            case 1:
                return "De 16 a 30 anos";
            case 2:
                return "De 31 a 45 anos";
            case 3:
                return "De 46 a 60 anos";
            case 4:
                return "Acima de 60 anos";
        }
    }

    private function _level_of_education($level) {
        switch ($level) {
            case 1:
                return "Ensino fundamental incompleto";
            case 2:
                return "Ensino fundamental completo";
            case 3:
                return "Ensino médio completo";
            case 4:
                return "Ensino superior completo";
        }
    }

    private function _family_income($income) {
        switch ($income) {
            case 1:
                return "Abaixo de R$ 1.000";
            case 2:
                return "De R$ 1.000 a R$ 3.000";
            case 3:
                return "De R$ 3.000 a R$ 5.000";
            case 4:
                return "De R$ 5.000 a R$ 7.000";
            case 5:
                return "Acima de R$ 7.000";
        }
    }

    private function _candidate($candidate) {
        switch ($candidate) {
            case 1:
                return "Barack Obama";
            case 2:
                return "Dilma Rousseff";
            case 3:
                return "Kim Jong-un";
            case 4:
                return "Vladimir Putin";
        }
    }
    
    private function _sex($sex) {
        switch ($sex) {
            case 1:
                return "Masculino";
            case 2:
                return "Feminino";
        }
    }
    
    private function _filterFields($participant) {
        $participant[0] = $this->_age($participant[0]);
        $participant[1] = $this->_level_of_education($participant[1]);
        $participant[2] = $this->_family_income($participant[2]);
        $participant[3] = $this->_sex($participant[3]);
        $participant[4] = $this->_candidate($participant[4]);
        
        return $participant;
    }
    
    public function add($values){
        $file = $this->_open("a");
        fputcsv($file, $values, ";");
    }
    
    public function getAll() {
        $participants = array();

        while (($participant = fgetcsv($this->file, 0, ";")) !== FALSE) {
            $participants[] = $this->_filterFields($participant);
        }

        return $participants;
    }

}
