<?php

require_once './sort.class.php';

class quick extends Sort{
	// public static $compare;
	public static function getIsSortedArr(&$compare){
		$hi = count($compare)-1;
		self::doSort($compare,0,$hi);
		if(self::isSorted($compare)) self::show($compare);	
	}

	public static function doSort(&$compare,$lo,$hi){
		if($hi<=$lo) return;
		$j = self::partition($compare,$lo,$hi);
		//self::show($compare);
		self::doSort($compare,$lo,$j-1);
		self::doSort($compare,$j+1,$hi);
	}	
	public static function partition(&$compare,$lo,$hi){
		$v = $compare[$lo];
		$i=$lo;$j=$hi+1;
		while(true){
			while(self::less($compare[++$i],$v)) if($i==$hi) break;//比$v小
			while(self::less($v,$compare[--$j])) if($j==$lo) break;//比$v大
			if($i>=$j) break;
			self::exch($compare,$i,$j);
		}
		self::exch($compare,$lo,$j);
		return $j;
	}
}

//三向切分的快速排序

class quick3way	extends quick{
	public static function doSort(&$compare,$lo,$hi){
		$lt = $lo+1;$gt = $hi;
		$v = $compare[$lo];
		while($lt>=$gt){
			$cmp = $v-$compare[$i];
			if    ($cmp>0)	self::exch($compare,$lt++,$i++);	
			elseif($cmp<0)	self::exch($compare,$gt--,$i);
			else 			$i++;
		}
		self::doSort($compare,$lo,$lt-1);
		self::doSort($compare,$gt+1,$hi);
	}
}

$compare = [1,2,3,4,5,6,7,8,9,0,11,12,13,14,15,16];
shuffle($compare);
quick3way::getIsSortedArr($compare);