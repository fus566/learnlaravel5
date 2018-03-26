<?php
//不支持删除元素的集合数据类型
class Bag{
	private $bag=array();
	public function __controller(){

	}
	public function add($var){
		$this->bag[]=$var;
		return in_array($var,$this->bag);
	}
	public function isEmpty(){
		return empty($this->bag)?1:0;
	}
	public function size(){
		return count($this->bag);
	}
	public function show(){
		foreach($this->bag as $val){
			echo $val.'<br>';
		}
	}
}