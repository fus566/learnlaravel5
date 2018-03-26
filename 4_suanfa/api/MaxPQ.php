<?php
//优先队列
//删除最大的元素和插入元素
class MaxPQ extends Sort{
	private $MaxPQ
	public function __constroller($MaxPQ){
		$this->MaxPQ = $MaxPQ;
	}
	public function size(){
		return count($this->MaxPQ);
	}
	public function Insert(){
		
	}
	public function delMax(){
		
	}
	public function isEmpty(){
		return empty($this->bag)?1:0;
	}
}