<?php
class Queue{
	public $stack=array();
	public function push($var){
		$this->queue[]=$var;
		return in_array($var,$this->queue);
	}
	public function pop(){
		array_shift($this->queue);
	}
	public function isEmpty(){
		return empty($this->bag)?1:0;
	}
	public function size(){
		return count($this->bag);
	}
	public function show(){
		
	}
}