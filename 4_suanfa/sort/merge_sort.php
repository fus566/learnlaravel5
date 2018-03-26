<?php
//归并排序
require_once './sort.class.php';

class merge_sort extends Sort{
	public static $tmp;
	public static function sort(&$compare){
		$hi = count($compare)-1;
		self::doSort($compare,0,$hi);
	}
	public static function doSort(&$compare,$lo,$hi){
		if($hi<=$lo) return;
		$mid = $lo + ($hi-$lo)/2;
		self::doSort($compare,$lo,$mid);
		self::doSort($compare,$mid+1,$hi);
		self::merge($compare,$lo,$mid,$hi);		
	}
	public static function merge($compare,$lo,$mid,$hi){
		$i = $lo;$j = $mid+1;
		for($k = $lo;$k <=$hi;$k++) self::$tmp[$k] = $compare[$k];
		for($k = $lo;$k <=$hi;$k++){
			if    ($i > $mid)  					  $compare[$k] = self::$tmp[$j++];
			elseif($j > $hi)  					  $compare[$k] = self::$tmp[$i++]; 	
			elseif(self::less(self::$tmp[$j],self::$tmp[$i])) $compare[$k] = self::$tmp[$j++];
			else 								  $compare[$k] = self::$tmp[$i++];
		}
	}
}
$compare = [32,21,4,12,66,321,5,22,55,63,78,132,73,235,233,77,112,3321,423,4213,45,32,423,45,5552,523,523,1122,441,23,125,1112,112223,41,32,44];
var_dump(count($compare));
merge_sort::sort($compare);
var_dump(merge_sort::$tmp);
var_dump(merge_sort::isSorted($compare));




