<?php 
$line1 = array(
			'index'  	=> 'Index',
			'bookmarks'	=> 'Bookmarks',
			'support'	=> "I'm supporting",
			'about'		=> 'More info?',
			'thunder'	=> 'Royal Thunderbird!',
			'n900'		=> 'Maemo N900',
			'e960'		=> 'Nexus 4 (Android + more  )',
			'kodi'		=> 'KODI [aka] XBMC <img src="images/new.gif">',
			'gpg'		=> 'My Public Key (GPG) <img src="images/new.gif">',
			'sign'		=> 'My Sign'
		);


$line2 = array(
			"thanks"	=>"Thanks to..",
			"materials"	=>"Open Materials",
			"qns"		=>"interview qns",
			"script"	=>"scripts to look",
			"regex"		=>"RegEx me!",
			"tricks"	=>"Web Dev tips<img src='images/new.gif'> ",
		);		

$line3 = array(
			"life"	=>"Looking for a girl",
			"toon"	=>"A day - a cartoon",
			"promo"	=>"Shameless self promo",
			"random"=>"Generate random values"
			//"muzic"	=>"Muzic Time"
		);	


		
			
		
?>			

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> </head>
<link rel="stylesheet" type="text/css" href="stallman.css">

<center>
    <h3 class="c1">Kesavan Muthuvel's Personal Home Page </h3>
	<div class="c2">
	<?
	foreach($line1 as $link => $label )
		echo "<a href=\"$link\">$label</a> | ";
	?>
	<a href="http://www.flickr.com/k7/sets" target="_blank" >Travel Photos</a>  
	| <a href="http://blog.kesavan.info">Blog</a>
	</div>

	<div class="c2">
	<?
	foreach($line2 as $link => $label )
		echo "<a href=\"$link\">$label</a> | ";
	?>	
	 <a href="books.pl">eBooks Collection</a>
	</div> 

	<div class="c2">
	<?
	foreach($line3 as $link => $label )
		echo "<a href=\"$link\">$label</a>  ";
#	| <a href="muzic.php">Muzic Time Collection</a>
#	</div> 
	?>	
	<div class="c2">
		<span id="highlight" name="highlight">	<a target='_blank' href="wed-lock">Wed Lock - 2014</span></a> 		| 	
		<span id="highlight" name="highlight">	<a target='_blank' href="invite.php">Wedlock Invitation</span></a>	| 
		<span id="highlight" name="highlight">	<a href="thulasi.php"> Thulasi Kesavan</span><img src="images/new.gif"> </a>
	</div> 

</center>


<img align='right' src='images/slam-on-kb-bloody.gif'>

<hr>
<style>
#highlight{
    background-color: #AFF;
    color: #000000;
}
</style>
