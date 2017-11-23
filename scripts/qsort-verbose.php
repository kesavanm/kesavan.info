<?php

$level = 0 ; $level_r = array();

function qsort($array,$side=NULL,$level){
	if($level > 20) die("something wrong");
	if(count($array) < 2) return $array;

	$l = $r  = array();
	
	$pkey = round(count($array)/2)-1 ;
	$pval = $array[$pkey]; 
	unset($array[$pkey]);

	msg($level,$side ," key($pkey) size(".count($array).") val($pval) & level($level)",$array);

	foreach($array as $v){
		if($v > $pval) $r[] = $v;
		else           $l[] = $v;
	}
	$level++; 
	return array_merge(qsort($l,"L",$level) , array($pval), qsort($r,"R",$level) );
}

var_export(qsort(array(40,18,56,6,1 ,-6, 45,23,44,98,21,14,32,63,-9),"",1));
var_export($level_r); 
function msg($level,$side,$msg,$arr){
	global $level_r;
	for($i=0; $i< $level ;$i++)
//		echo "*";
	$level_r[$level.$side.'--'.md5($level.$side)] = $arr; 
//	echo $msg; var_export($arr);
//	echo "\n";
}
