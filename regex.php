<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Kesavan Muthuvel's 'RegEX me'</title>
    <link rel="shortcut icon" href="kesavan.png" type="image/x-icon">

<link rel="icon" href="k7.png">
  </head>

  <body>
<?
include('head.php');
?>
<!-- form -->
<form method="post" enctype="multipart/form-data">
  <br>Here is a simple script to verify a data match for regex pattern. <br> Send data sample:<br />
  RegEX  <input name="pattern" size='60' type="text" value="<?=stripslashes($_REQUEST['pattern'])?>">	^ABC$ <br />
  Sample <input name="sample" size='90' type="text" value="<?=$_REQUEST['sample']?>"> 	exactly ABC alone gets matched while bABCD and bABC not!<br />
  	<input name="icase"   type="checkbox"  <? echo ($_REQUEST['icase']==="icase")?"checked":"" ?> value="icase"  /> Ignore case<br />
  
  <input type="submit" value="Regex me!" />
</form>

<?php
#error_reporting(E_ALL);	
#error_reporting(-1);
#ini_set('display_errors','On');
#ini_set('error_reporting', E_ALL);


if(!$_REQUEST['pattern'] && !$_REQUEST['sample'] )	echo "<font color='orange'> WARNING: Submit values for both pattern as well as sample ! </font>";
else {
	$pattern = "/".stripslashes($_REQUEST['pattern'])."/"	;
	$sample =  $_REQUEST['sample'];

	if($_REQUEST['icase']==="icase") $pattern .= "i";

	echo "Processed pattern matching for $pattern over $sample is \n ";

	#REGEX parser
	if(preg_match($pattern,$sample) ) {
		echo " <font color='green'> Matched! </font>";
	}else 	echo " <font color='red'> Not matched </font>" ;
}
include('tail.php');

?>


