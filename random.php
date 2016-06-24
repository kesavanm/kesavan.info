<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Kesavan Muthuvel's Personal Site | Generate Random Values</title>
    <link rel="shortcut icon" href="kesavan.png" type="image/x-icon">

<link rel="icon" href="k7.png">
  </head>
  <body>
<?
include('head.php');
?>
<p><b>Random String</b> <ins>That's random</ins>
<form method='POST'>
Count : <input name='count'  value='<?=$_REQUEST['count'] ? intval($_REQUEST['count']) :10?>' size='2'> </br>
Length: <input name='length' value='<?=$_REQUEST['length']? intval($_REQUEST['length']):10?>' size='2'> </br>
	<input type='submit' value='generate random values' > <input type='reset'> 
</form>
	<?
	$count = $_REQUEST['count'] ? intval($_REQUEST['count']) :10;
	$length= $_REQUEST['length']? intval($_REQUEST['length']):10;

	echo '<pre>';
	if($count+$length < 100)
		while($count--) echo generateRandomString($length)."\n";
	echo '</pre>';
	?>
&nbsp;
<?
include('tail.php');
?>

<?php
function generateRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	        $charactersLength = strlen($characters);
	        $randomString = '';
		    for ($i = 0; $i < $length; $i++) {
			            $randomString .= $characters[rand(0, $charactersLength - 1)];
				        }
		    return $randomString;
}
?>
