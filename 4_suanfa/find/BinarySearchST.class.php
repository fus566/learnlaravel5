<?php
require_once '../api/ST.class.php';
class BinarySearchST {
    private $keys = array();
    private $values = array();
    private $length = 0;

    public function get($key){
        if($this->isEmpty()) return null;
        $indx = $this->rank($key);
        return $this->values[$indx];
    }
    public function put($key,$value){
        $indx = $this->rank($key);
        //var_dump($indx);
        if(!isset($this->values[$indx])){
            $this->keys[]=$key;
            $this->values[]=$value;
            $this->length++;
            return;
        }
        $this->values[$indx] = $value;

    }
    public function size(){
        return $this->length;
    }

    public function rank($key){
        $lo = 0;$hi = $this->length-1;
        while($lo<$hi){
            $mid = intval(($lo+$hi)/2);
            $bool = $key-$this->keys[$mid];
            if($bool>0){
                $lo = $mid - 1;
            }elseif($bool<0){
                $hi = $mid + 1;
            }else{
                return $mid;
            }
        }
        return $lo;
    }

    public function isEmpty()
    {
        if(!$this->values) {
            return true;
        }else{
            return false;
        }
    }

    public function min(){
        return $this->keys[0];
    }

    public function max()
    {
        return $this->keys[$this->length-1];
    }
    public function delete($key){
        $indx = $this->rank($key);
        $this->keys[$indx] = $this->keys[$this->length-1];

    }
    public function ceiling()//进一
    {

    }
    public function show(){
        $key ='';$val='';
        foreach($this->keys as $k) {
            $key .= $k.'-';
        }
        foreach($this->values as $v) {
            $val .= $v.'-';
        }
        echo 'key:'.$key.'<br>';
        echo 'val:'.$val;
    }

}
$BS=new BinarySearchST();
//$BS->put(1,23);
$BS->put(0,22);
$BS->put(0,21);
$BS->show();
$val = $BS->get(0);
//echo $val;

