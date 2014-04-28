<?php

class Helpers {
        
    static function converterIdToClassName($id){
        switch ($id) {
            case 1:
                return "Age";
            case 2:
                return "Schooling";
            case 3:
                return "Income";
            case 4:
                return "Sex";
            default :
                return FALSE;
        }
    }
    
    static function isCurrent($id){
        return $_GET["type"] == $id ? "disabled" : "";
    }
}