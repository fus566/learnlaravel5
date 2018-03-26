<?php
//union_find
class UF{
	private $id=array();
	private $count=0;
	public function __controller($id){
		$this->$id=$id;
	}

	public function getcount(){
		return $this->count;
	}

	public function connected($p,$q){
		return $this->find($p)==$this->find($q) ? true:false ;
	}

	public function union($p,$q){
		$pID = $this->find($p);
		$qID = $this->find($q);
		if($pID == $qID) return;
		for($i=0;$i<count($this->id);$i++){
			if($this->id[$i]==$pID) $this->id[$i]=$qID;
		}
		$this->count--;
 	}	

	public function find($p){
		return $this->id[$p];
	}
}


$array=array(1,2,3,4,1,1,6,77,55,8,8,543,9,8,545,45,345);
$count = count($array);
$uf= new UF($array);
for($i=0;$i<$count;$i++){
	for($j=$i+1;$j<$count;$j++){
		$res=$uf->connected($i,$j);
		if($res) echo $array[$i].'  '.$array[$j];
	}
}