<?php

class Sort{
	private $compare;
	public function __construct($compare){
		$this->compare = $compare;	
	}
	public static function less($p,$q){
		return $p<$q?1:0;
	}
	public static function exch(&$compare,$i,$j){
		$t = $compare[$i];
		$compare[$i] = $compare[$j];
		$compare[$j] = $t ;
	}

	public static function show($compare){
		var_dump($compare);
		echo '<br>';
	}
	public static function isSorted($compare){
		for($i=1;$i<count($compare);$i++){
			if(self::less($compare[$i],$compare[$i-1])) return false;
		}
		return true;
	}

}