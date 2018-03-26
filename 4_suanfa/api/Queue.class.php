<?php
//先进先出
class Queue{
	public $queue=array();
	public function enqueue($var){
		$this->queue[]=$var;
		return in_array($var,$this->queue);
	}
	public function dequeue(){
		array_shift($this->queue);
	}
	public function isEmpty(){
		return empty($this->bag)?1:0;
	}
	public function size(){
		return count($this->bag);
	}
}