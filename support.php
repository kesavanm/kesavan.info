<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Kesavan Muthuvel's Personal tools</title>
    <link rel="shortcut icon" href="kesavan.png" type="image/x-icon">

<link rel="icon" href="k7.png">
  </head>

  <body>
  	
<?php
include('head.php');

echo "<h3>I always support </h3>";

$tools  = array (
		'GNU'			=> "Freedom! Respect your freedom. #####	
						http://www.gnu.org/	#####	
						gnu.png",		
		'Wiki' 		=> "	Support Wikipedia	#####	
					http://wikimediafoundation.org/wiki/Support_Wikipedia/en	#####	
					wiki.png",
		'LibreOffice'	=> "	LibreOffice		#####	
					http://www.libreoffice.org	#####	
					libreoffice.png",
		'Linux'		=> "	Linux	#####	
					http://en.wikipedia.org/wiki/Linux	#####	
					Linux.png",
		'Femen'		=> "	FEMEN from Ukrainian	#####
					http://femen.livejournal.com/	#####
					Femen.png",
		'Peta'		=> "	Peta | Be Veg	#####
					http://www.peta.org/ #####
					Peta.png",
		'Firefox'	=> "	Open Web	#####
					http://www.mozilla.org/ #####
					Firefox.png",
		'Apache'	=> "	A-Patchy Server #####			
					http://www.apache.org/ #####
					Apache.png",				# RoyalEnfield 7299042007
		'MySQL'		=> "	My favorite SQL server	#####
					http://www.mysql.com	#####
					MySQL.png",
		'PHP'		=> "	I love to script with it! PHP #####
					http://www.php.net/ #####
					PHP.png",
		'VLC'		=> "	My very first application after OS installation.Throw anything.Just enjoy.VLC	#####
					http://www.videolan.org/vlc	#####
					Vlc.png",
		'Vorbis'	=> "	Freedom to enjoy your Music and Videos. Play OOG and OGV , Wiki & OpenWorld recommends	#####
					http://www.vorbis.com	#####
					vorbis.png",

		'ePub'		=> "	Next to the universal TXT format, I love to read book in 'open' ePub format #####
					http://idpf.org/	#####
					ePub.gif",
		'Vi(m)'		=> "	Vi IMproved , is open source and freely distributable #####
					http://www.vim.org/sponsor/	#####
					vim.jpeg",
		
		'Internet Archive'=> "Internet Archive is a non-profit digital library offering free universal access to books, movies & music, as well as 150 billion archived web pages			#####
					http://www.archive.org		#####
					ia.jpeg",
		'Project Gutenberg'		=> "From Project Gutenberg, the first producer of free ebooks.#####
						http://www.gutenberg.org/wiki/Main_Page#####
					gutenberg.jpg"							,
					
		'Tor - Anonymity Online'=> "Protect your privacy. Defend yourself against network surveillance and traffic analysis. ##### 
						https://www.torproject.org/#####
					tor.png"		,
		'TestDisk'	=> 	" Recover lost partitions and/or make non-booting disks bootable!#####
					http://www.cgsecurity.org	#####
					TestDisk-logo.png" 		,
		'PhotoRec'	=> 	" Recover lost files !   #####
					http://www.cgsecurity.org#####
					photorec_64x64.png	"		,
		'CmosPwd'	=>	" Recover  BIOS setup  password	#####
					http://www.cgsecurity.org/wiki/CmosPwd	#####
					cmospwd.gif	",
		'Security-in-a-Box' => "Security in a Box - Digital security tools and tactics #####
					https://securityinabox.org/en/ #####
					securityinabox.png",


		/**************************************************************************************
		''		=> "			#####
							#####
							"						
		**************************************************************************************/		


		#IMG RECOMMENDED SIZE 50*50

		
		);
//ksort($tools,SORT_NATURAL | SORT_FLAG_CASE); //works only in php5+
uksort($tools, "strnatcasecmp"); 

    // example HTML image gallery
echo    "<div class=\"Collage\">";

foreach($tools as $key=>$value){
	list($alt,$uri,$src) = explode("#####",$value);
	$alt = trim($alt); $uri=trim($uri);$src="images/logos/modified/".trim($src);
	echo " <a target='_blank' href=\"$uri\"><img src=\"$src\" title=\"$key - $alt\" alt=\"$alt\"/></a> \n";
}
echo    "        </div>";


echo <<< "HARDCODED"


<p>

<a href="http://www.getgnulinux.org/" title="Get GNU/Linux - an alternative to Windows; free as in beer and speech">
<img src="https://getgnulinux.org/images/slides/GNU_Tux.svg" alt="Get GNU/Linux" width="125" height="50" border="0"/></a>

<a href="http://www.upgradefromwindows8.com"><img src="images/logos/modified/closewin.png" alt="Close Windows, Open Doors"/></a> 




HARDCODED;

include('tail.php');


/********


<script type="text/javascript" language="javascript" src="tmp/ed-lea-jquery-collagePlus-2085c67/jquery.collagePlus.js"></script>
<script src="jquery/jquery.js">

<script  type="text/javascript" charset="utf-8">
// collagePlus-ify it! 

$('.Collage').collagePlus();
</script>

***********/


?>




