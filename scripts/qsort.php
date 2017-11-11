<?php



$level = 0 ;

function qsort($array,$side=NULL,$level){

	if($level > 20) die("something wrong");
	if(count($array) < 2) return $array;

	$l = $r  = array();
	
	$pkey = round(count($array)/2)-1 ;
	$pval = $array[$pkey]; 
	unset($array[$pkey]);

	msg($level,"$side : key($pkey) size(".count($array).") val($pval) & level($level)",$array);

	foreach($array as $k => $v){
		if($v > $pval) $r[] = $v;
		else           $l[] = $v;
	}
	$level++; 
	return array_merge(qsort($l,"L",$level) , array($pval), qsort($r,"R",$level) );
//	return array_merge(qsort(array_values($l),"L") , array($pval), qsort(array_values($r),"R") );
}


var_export(qsort(array(40,18,56,6,1 ,-6, 45,23,44,98,21,14,32,63,-9),"",1));

function msg($level,$msg,$arr){
	for($i=0; $i< $level ;$i++)
		echo "*";
	echo $msg; var_export($arr);
	echo "\n";
}
