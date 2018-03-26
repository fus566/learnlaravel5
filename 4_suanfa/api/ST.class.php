<?php

class ST{
    private $ST;
    private $keys;
    public function __construct(){

    }

    public function put($key,$vaklue){

    }

    public function get($key){

    }

    public function key(){

    }

    public function delete($key){
        $this->put($key,null);
    }

    public function size(){
        return count($this->ST);
    }

    public function isEmpty(){
        return $this->size() == 0;
    }

    public function contains(){
        $values = [];
        foreach($this->keys as $k){
            $value=$this->get($k);
            if($value!=null){
                $valus[]=$value;
            };
        }
        return $values;
    }

    public function equals($p,$q){
        return $p===$q;
    }

    public function floor($key){

    }

    public function ceiling(){

    }

    public function rank(){

    }

    public function min(){

    }

    public function max(){

    }




}