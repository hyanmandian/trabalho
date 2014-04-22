<?php

class Statistics {

    private $interviewees;
    private $type;

    public function __construct($type) {
        $this->type = $type;
        $this->interviewees = new Csv();
        $this->interviewees = $this->interviewees->getAll(FALSE);
    }

    private function _intentionByAge() {
        return "AGE";
    }

    private function _intentionBySchooling() {
        return "SCHOOLING";
    }

    private function _intentionByIncome() {
        return "INCOME";
    }

    private function _intentionBySex() {
        return "SEX";
    }

    public function render() {
        $method = "_intentionBy" . ucfirst($this->type);
        return $this->$method();
    }

    public function getStatisticsName() {
        switch ($this->type) {
            case "age":
                return "idade";
            case "schooling":
                return "nível de escolaridade";
            case "income":
                return "renda";
            case "sex":
                return "sexo";
        }
    }

}
