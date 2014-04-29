<?php

class Helpers {

	static $_fields = array(
		"0" => array(
			"1" =>"De 16 a 30 anos",
			"2" =>"De 31 a 45 anos",
			"3" =>"De 46 a 60 anos",
			"4" =>"Acima de 60 anos",
		),
		"1" => array(
			"1" => "Ensino fundamental incompleto",
			"2" => "Ensino fundamental completo",
			"3" => "Ensino médio completo",
			"4" => "Ensino superior completo",
		),
		"2" => array(
			"1" => "Abaixo de R$ 1.000",
			"2" => "De R$ 1.000 a R$ 3.000",
			"3" => "De R$ 3.000 a R$ 5.000",
			"4" => "De R$ 5.000 a R$ 7.000",
			"5" => "Acima de R$ 7.000",
		),
		"3" => array(
			"1" => "Masculino",
			"2" => "Feminino",
		),
		"4" => array(
			"1" => "Barack Obama",
			"2" => "Dilma Rousseff",
			"3" => "Kim Jong-un",
			"4" => "Vladimir Putin",
		),
	);

	static function converterIdToClassName($id) {
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

	static function isCurrent($id) {
		return $_GET["type"] == $id ? "disabled" : "";
	}
	
	static function getFields($type){
		$type = $type - 1;
		switch ($type){
			case 0 : 
				return self::$_fields[0];
			case 1:
				return self::$_fields[1];
			case 2:
				return self::$_fields[2];
			case 3:
				return self::$_fields[3];
		}
	}
	
	static function age($age) {
		return self::$_fields[0][$age];
	}

	static function schooling($schooling) {
		return self::$_fields[1][$schooling];
	}

	static function income($income) {
		return self::$_fields[2][$income];
	}

	static function sex($sex) {
		return self::$_fields[3][$sex];
	}

	static function candidate($candidate) {
		return self::$_fields[4][$candidate];
	}
	
	static function getLength($type){
		if($type == "Income"){
			return $length = 5;
		}elseif($type == "Sex"){
			return $length = 2;
		}else{
			return $length = 4;
		}
	}
}
