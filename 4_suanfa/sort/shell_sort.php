<?php
require_once './sort.class.php';
class shell_sort extends  Sort{
	public static function doSort(&$compare){
		$n = count($compare);
		$h = 1;
		while($h<$n/3) $h=$h*3+1;
		while($h>=1){
			for($i=$h;$i<$n;$i++){
				for($j=$i;$j>$h && self::less($compare[$j],$compare[$j-1]);$j-=$h){
					self::exch($compare,$j,$j-$h);
				}
			}
			$h=$h/3;
		}
	}
}
$compare = [2,4,6,123,3,2,45,67,8,32,5,111];
shell_sort::doSort($compare);
shell_sort::show($compare);