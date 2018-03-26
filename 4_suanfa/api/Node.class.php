<?php

class Node{
    public $data = '';
    public $next = null;
    function __construct($data)
    {
        $this->data = $data;
    }
}


class LinkedList{
    private $head;
    private $length;
    public function __construct()
    {
        $this->head = 0;
        $this->length = 0;
    }

    public function addNode(){

    }
    public function delNode(){

    }
    public function setLength(){
            
    }

}
