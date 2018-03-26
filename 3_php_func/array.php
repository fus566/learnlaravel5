<?php
//array_change_key_case
//键名改为全小写或大写
$arr = array('test'=>1,'xx'=>2);
$new_arr = array_change_key_case($arr,CASE_UPPER);
var_dump($new_arr);

//array_chunk
//将一个数组分成多维数组
//array array_chunk ( array $array , int $size [, bool $preserve_keys = false ] )
$input_arr = array('test'=>1,'xx'=>2,'a','b','c','d','e');
$new_arr = array_chunk($input_arr,2,true);
print_r($new_arr);

//array_column — 返回多维数组中指定的一列
//array array_column ( array $input , mixed $column_key [, mixed $index_key = null ] )
//键值等于$column_key返回；index_key 作为返回数组的索引/键的列
$records = array(
	array('id'=>'xs','first_name'=>'john','last_name'=>'doe'),
	array('x'=>2105,'first_name'=>'fus','last_name'=>'dox'),
	array('x'=>2125,'first_name'=>'yue','last_name'=>'doxs')
	);
$first_name = array_column($records,'first_name','id');
var_dump($first_name);

//array_combine 创建一个数组，用一个数组的值作为其键名，另一个数组的值作为其值
//array array_combine ( array $keys , array $values )
//返回一个 array，用来自 keys 数组的值作为键名，来自 values 数组的值作为相应的值。
//如果两个数组的单元数不同则返回 FALSE。
$key = array('green','red','yellow');
$value = array('apple','xx','zz');
$arr = array_combine($key,$value);
print_r($arr);

//array_count_values — 返回一个数组： 数组的键是 array 里单元的值； 数组的值是 array 单元的值出现的次数
$array = array(1,1,1,2,3,4,5,6,7,'xx','2');
print_r(array_count_values($array));


//array_fill_keys 使用 value 参数的值作为值，使用 keys 数组的值作为键来填充一个数组。
$keys = array('foo', 5, 10, 'bar');
$a = array_fill_keys($keys, 'banana');
print_r($a);

//array_fill 用给定的值填充数组并返回
$a = array_fill(5,6,'banana');
$b = array_fill(-2,4,'bear');
print_r($a);
print_r($b);

//array_filter 用回调函数过滤数组中的单元


//array_flip - 交换数组中的键和值
//值需要能够作为合法的键名(string,int),类型不对，将出现一个警告，并且有问题的键／值对将不会出现在结果里。
//如果同一个值出现多次，则最后一个键名将作为它的值，其它键会被丢弃。

$input = array('oranges','apples','pears');
$flipped = array_flip($input);
print_r($flipped);

//array_diff_assoc() 返回一个数组，该数组包括了所有在 array1 中但是不在任何其它参数数组中的值。注意和 array_diff() 不同的是键名也用于比较
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
$result = array_diff_assoc($array1, $array2);
print_r($result);
//array_diff_key — 使用键名比较计算数组的差集
//array_diff_uassoc — 用用户提供的回调函数做索引检查来计算数组的差集
//array_diff_ukey — 用回调函数对键名比较计算数组的差集
//array_diff — 计算数组的差集
//
//array_intersect_assoc — 带索引检查计算数组的交集
//array_intersect_key()返回一个数组，该数组包含了所有出现在 array1 中并同时出现在所有其它参数数组中的键名的值。


//array_key_exists — 检查数组里是否有指定的键名或索引
$search_array = array('first'=>1,'second'=>'2');
if(array_key_exists('first',$search_array)){
	echo 'true';
}


//array_keys — 返回数组中部分的或所有的键名


//array_map();为数组的每个元素应用回调函数
//array array_map ( callable $callback , array $array1 [, array $... ] )
//返回数组，包含 callback 函数处理之后 array1 的所有元素。

//array_merge_recursive();
//array array_merge_recursive ( array $array1 [, array $... ] )
//
$ar1 = array('color'=>array("favorite"=>"red"),5);
$ar2 = array(10,'color'=>array('favorite'=>'green','blue'));
$result = array_merge_recursive($ar1,$ar2s);
