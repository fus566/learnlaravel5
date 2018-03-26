<?php

require_once '../api/ST.class.php';

class node{
    public $value = null;
    public $key = null;
    public $next = null;
    public function __construct($key,$value,$next)
    {
        $this->key = $key;
        $this->value = $value;
        $this->next = $next;
    }

}

class SequantialSearchST extends ST
{
    private $first='';

    public function put($key,$value)
    {
        for($i=$this->first;$i!=null;$i=$i->next)
        {
            if($this->equals($key,$i->key)){
                $i->key = $key;return;//更新
            }
        }
        $this->first = new node($key,$value,$this->first);
    }

    public function get($key)
    {
        if($this->first=='') return false;
        for($i=$this->first;$i!=null;$i=$i->next)
        {
            if($i->key==$key) return $i->value;
        }
        return null;
    }

    public function delete($key)
    {

    }

    public function equals($p, $q)
    {
        return ($p===$q);
    }

    public function size()
    {
        if($this->first=='') return 0;
        $j=0;
        for($i=$this->first;$i!=null;$i=$i->next)
        {
            $j++;
        }
        return $j;
    }

    public function show()
    {
        for($i=$this->first;$i!=null;$i=$i->next){
            echo $i->key.'---'.$i->value.'<br>';
        }
    }
}
//
$st = new SequantialSearchST();
$st->put('round1',1);
$st->put('ro2',8);
$st->put('rou3',9);
$st->put('rou4',10);
$st->put('rou5',11);
$st->put('rou6',12);
$st->put('rou7',13);
$st->put('rou8',14);
//echo $st->get('ro2');
echo $st->show();
echo $st->size();

