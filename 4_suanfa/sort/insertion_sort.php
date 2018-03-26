<?php
require_once './sort.class.php';
class insertion_sort extends  Sort{
	public static function doSort(&$compare){
		$n = count($compare);
		for($i=0;$i<$n;$i++){
			for($j=$i;$j>0 && self::less($compare[$j],$compare[$j-1]);$j--){
				self::exch($compare,$j,$j-1);
			}
		}
	}
}
$compare = [2,4,6,123,3,2,45,67,8,32,5,111];
insertion_sort::doSort($compare);
insertion_sort::show($compare);