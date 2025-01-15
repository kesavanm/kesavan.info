<?php 
$line1 = array(
	'index'	=> 'Index',			'bookmarks'	=> 'Bookmarks',		'support'	=> "I'm supporting",
	'about'	=> 'More info? (About me!)',	'thunder'	=> 'Royal Thunderbird!','n900'		=> 'Maemo N900',
	'e960'	=> 'Nexus & Pixel (Android + more  )','kodi'		=> 'KODI [aka] XBMC <img src="images/new.gif">',
	'gpg'	=> 'My Public Key (GPG) <img src="images/new.gif">',	'sign'	=> 'My Sign', );
$line1 += ['https://www.flickr.com/k7/sets' =>"_Travel Snaps", 'https://blog.kesavan.info'=>"_Blog"];

$line2 = array(
	"thanks"	=>"Thanks to..",	"materials"	=>"Open Materials",        "qns"	=>"interview qns",	
	"script"	=>"scripts to look",	"books.pl"	=>"eBooks Collection",	   "tricks"	=>"Web Dev tips<img src='images/new.gif'> ",
	"https://github.com/kesavanm" => "Fork my (GitHub) projects!"
	);		

$line3 = array(
	"life"	=>"Looking for a girl",		"toon"	=>"A day - a cartoon","promo"	=>"Shameless self promo",
	"goog"  =>"Goodbye GMail",		);
	//"muzic"	=>"Muzic Time"

$blog = ["https://blog.kesavan.info" => "_(we)blogs from Kesavan", "https://blog2.kesavan.info" => "_Fallback blogs", "https://blog2.kesavan.info/grav" => "_Grav, quick logs"];

$tamil = ["tamil-type"	=>"Type தமிழ் ",        "pythagoras"=> "Sorry, pythagoras! ", "kural" =>'Thirukkural - #PIEM <img src="images/new.gif">',];

$tools = ["ip"		=> "What's your IP",	"image-resize"	=> "Resize your image",	"tor-status"	=> "Dark status from Tor", "random" => "Random token gen",
        "regex"		=>"RegEx me!",      ];

$hl    = ["wed-lock" => "_Wed Lock - 2014",	"invite" => "_Wedlock Invitation",
	"thulasi" => "Thulasi Kesavan<img src='images/new.gif'>","kundavai"=>"Kundavai Kesavan<img src='images/new.gif'>" ];

function generateLinks( $links, $hl=0, $title=""){
	$o =  $oo = '';

	foreach($links as $link => $label){
		$link = ($label[0]=='_') ? $link. " target='_blank'":$link;
		$oo .= "\n\t\t<a href=$link >". trim($label,'_')."</a>|";
	}

	$oo = trim($oo,'|');

	$title = $title?"<b>$title:</b>":'';
	$outcome = ($hl)? "\n".'<span id="highlight" name="highlight">' . $oo ."\n".'</span>': $oo;
	$o .= "<div class='c2'> $title $outcome \n </div> \n";
	return $o;
}

?>			
<link rel="icon" href="images/favico/1879445_pkT_11.ico">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> </head>
<link rel="stylesheet" type="text/css" href="stallman.css">

<center>
    <h3 class="c1">Kesavan Muthuvel's Personal Home Page </h3>
	<?php
	echo	generateLinks($line1);
	echo	generateLinks($line2);
	echo	generateLinks($line3);
        echo	generateLinks($tamil,0,'தமிழ்');
	echo 	generateLinks($tools,0,"Tools");
	echo 	generateLinks($blog,0,"Blogs");
	echo	generateLinks($hl,1, "Double trouble");
	?>	
</center>
<img align='right' src='images/slam-on-kb-bloody.gif'>

<hr>
<style>
#highlight{
    background-color: #AFF;
    color: #000000;
}
</style>
