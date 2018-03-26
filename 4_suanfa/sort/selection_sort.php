<?php
//选择排序
//步骤一、找到数组最小的元素和第一位互换
//步骤二、在余下的数组进行步骤一
require_once './sort.class.php';
class selection_sort extends Sort{
	public static function doSort(&$compare){
		$n = count($compare);
		//var_dump($n);
		for($i=0;$i<$n;$i++){
			for($j=$i+1;$j<$n;$j++){
				if(self::less($compare[$j],$compare[$i])) self::exch($compare,$i,$j);
			}
		}
	}
}
$compare = [1,2,34,56,6,7,8,9,23,67];
selection_sort::doSort($compare);
selection_sort::show($compare);
$res = selection_sort::isSorted($compare);
var_dump($res);