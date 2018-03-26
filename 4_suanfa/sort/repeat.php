<?php
require_once './Sort.class.php';
class quick extends Sort{
	public static function getIsSortedArr(&$compare){
		$hi = count($compare)-1;
		self::doSort($compare,0,$hi);
		if(self::isSorted($compare)) self::show($compare);
	}
	public static function doSort(&$compare,$lo,$hi){
		if($lo>=$hi) return;
		$j = self::partition($compare,$lo,$hi);
		self::doSort($compare,$lo,$j-1);
		self::doSort($compare,$j+1,$hi);
	}
	public static function partition(&$compare,$lo,$hi){
		$v = $compare[$lo];
		$i=$lo;$j=$hi+1;
		while(true){
			while(self::less($compare[++$i],$v)) if($i==$hi) break;
			while(self::less($v,$compare[--$j])) if($j==$lo) break;
			if($i>=$j) break;
			self::exch($compare,$i,$j);
		}
		self::exch($compare,$lo,$j);
		return $j;
	}
}
$compare = [1,2,3,4,5,6,7,12,13,88,81,92,93,95,102,440,123,15];
quick::getIsSortedArr($compare);
