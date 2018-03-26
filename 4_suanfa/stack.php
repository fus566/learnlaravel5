<?php

class stack{
	private $stack=[];
	public function push($item){
		array_push($this->stack,$item);
	}
	public function pop(){
		array_pop($this->stack);
	}
	public function length(){
		return count($this->stack);
	}
	public function show(){
		print_r($this->stack);
	}

}

$stack = new stack;
