<?php

class queue {
	private $queue=[];	
	public function pop(){
		if(empty($this->queue)){
			echo 'queue is emptyed';
			return;
		}
		array_shift($this->queue);
	}
	public function push($item){
		array_push($this->queue,$item);
	}
	public function length(){
		return coutn($queue);
	}
	public function show(){
		print_r($this->queue);
	}

}
$queue = new queue;
$queue->push('aaa');
$queue->show();
$queue->push('bbb');
$queue->show();
$queue->pop();
$queue->show();

