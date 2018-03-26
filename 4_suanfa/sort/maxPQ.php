<?php
//Priority queue 优先队列
//
require_once './sort.class.php';
class MaxPQ extends Sort{
	private $MaxPQ;
	public function __constroller($MaxPQ){
		foreach($MaxPQ as $val){
			$this->Insert($val);
		}
	}
	public function size(){
		return count($this->MaxPQ);
	}
	public function Insert($item){
		$indx = $this->size+1;
		$this->MaxPQ[$indx] = $item;
		$this->swim($indx);

	}
	public function delMax(){
		$max = $this->size($this->MaxPQ);
		self::exch($this->MaxPQ,$max,1);
		unset($this->MaxPQ[$max]);
		$this->sink(1);
	}
	public function isEmpty(){
		return empty($this->bag)?1:0;
	}
	public function swim($k){//上浮
		while($k>1 && self::less($k/2,$k)){
			self::exch($this->MaxPQ,$k/2,$k);
			$k*=2;
		}
	}
	public function sink($k){//下沉 从某个节点开始下沉
		while(2*$k <= $this->size()){
			$j = $k*2;
			if(self::less($j,$j+1)) $j++;
			if(!self::less($k,$j)) break;
			self::exch($this->MaxPQ,$k,$j);
			$k=$j;
		}

	}
}


//堆排序


