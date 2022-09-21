<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Kesavan Muthuvel's Wedding Invite </title>
    <link rel="shortcut icon" href="kesavan.png" type="image/x-icon">
    <link rel="icon" href="k7.png">
		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
		<script type="text/javascript" src="./jquery/falling_hearts.js"></script>
		

    <!-- Add IntroJs styles 
    <link href="http://usablica.github.io/intro.js/introjs.css?v=060" rel="stylesheet">
    <link href="http://usablica.github.io/intro.js/css/bootstrap-responsive.min.css" rel="stylesheet">
    <script type="text/javascript" src="http://usablica.github.io/intro.js/intro.js?v=060"></script>
-->

    <!-- Add IntroJs styles from local  
     <link href="http://usablica.github.io/intro.js/css/bootstrap-responsive.min.css" rel="stylesheet">
     -->
    <link href="./jquery/intro.js-0.8.0/introjs.css" rel="stylesheet">
    <script type="text/javascript" src="./jquery/intro.js-0.8.0/intro.js"></script>
  </head>
  

  </head>
	<body onload="javascript:introJs().start();">
		
<?
include('head.php');
?>
<h3>Wedding Invitation - 2014 </h3>
<center>
	<p>
		


	<span id='highlight' name='highlight'  data-step='1' data-intro='<br>  Hello ! :) Try an interactive mode here' >	
<a href='wed-lock' target='_blank' > 	Interactive Intro </a></span>
	|
	<span id='highlight' name='highlight'  >
	Developer's Version</span> 
	|<span id='highlight' name='highlight' >
	<a href='invite-schema.htm' target='_blank' data-step='2' data-intro=' <br> There's a highlevel schema here' > High level Schema </a></span>
	|<span id='highlight' name='highlight' >
	<a href='funny.php' target='_blank' data-step='3' data-intro='<br> Here goes the real story!' > End user's version</a> </span>
	</p>
</center>
The following script is going to run over my life forever. Hopefully it won't trouble much the host. You may find a high level schema at <a href='docs/invite.png' target='_blank'> here</a> .Also there's a <a href='funny.php' 
	target='_blank'>  document </a> explains why you have to appear on that moment to witness this run over.   

<style>
#invite	 {background-color:black;}
/*body{background-color:grey;}
invite {background-color:grey;}*/
</style>


<div id='invite' name='invite' >
<pre>
<?
include('docs/wedding.txt');
?>

</pre>
</div>

<font color='black' >
<h3  >Have some console words for her? 
	<span  data-step='4' data-intro='<br>Have your thoughts here!'>
	 Advise for me? </span></h3>


<table > <tr> <td>	
<? @include('wishes.php'); ?>
</td></tr>	</table>


<?
#include('tail.php');
?>

<style>
#highlight{
    background-color: #AFF;
    color: #000000;
}
</style>


