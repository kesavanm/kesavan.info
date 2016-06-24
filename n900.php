<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Kesavan Muthuvel's Maemo Device [aka] N900 </title>
    <link rel="shortcut icon" href="kesavan.png" type="image/x-icon">

<link rel="icon" href="k7.png">
  </head>

  <body>
<?
include('head.php');


$apps = array (
		'Desktop' => array(
				"Catorise GUI" 	=> "Catorise GUI for Maemo (N900) by Recep Karadas is a graphical user interface for Catorise",
				"OMWeather"	=> "Weather Forecast on Nokia N900. Ultra-customisable weather widget for showing forecast the way you want"	,
				"Sticky Notes"	=> ""
				),
		'Education' => array("Dorian"	=> "Dorian is an e-book reader supporting books published in DRM-free EPUB format.",
				"Kobo" => "I hate read/store books on Amazon. Hate their DRM's"
				),
		'Games'		=> array("Angry Birds" => "",
					"Blocks"=>"",
					"Bounce"=>"",
					"Chess"=>"",
					"Mahjong"=>"",
					"Marbles"=>"",
					"tuxrace"=>""
				),
		'Graphics'	=> array("FrontView"=>"",
					"Photos"=>"",
					"Sketch"=>""),
		'Location & 
		    navigation'	=> array("GPS Recorder"=>"",
					"Mappero"=>"",
					"Maps"=>""),
		'Multimedia'	=> array("Camera" => "",
					"GNOME ALSA Mix"=>"",
					"KMPLayer"=>"",
					"Knips"=>"",
					"Maemo Recorder"=>"",
					"Media Player"=>"",
					"QRadio"=>"",
					"Radio"=>"",
					"SMPlayer"=>""),
		'Network'	=> array("Conversations" => "",
					"E-mail"=>"",
					"Fennec"=>"",
					"Iceweasel Web B"=>"",
					"Opera"=>"",
					"Phone"=>"",
					"QT Mobile Hotsp"=>"",
					"RSS"=>"",
					"Transmission"=>"",
					"TweeGo"=>"",
					"Web"=>""),
		'Office'	=> array("Calendar" => "",
					"Contacts"=>"",
					"Erminig"=>"",
					"Evince"=>"",
					"GPE Contacts"=>"",
					"GPE To-do"=>"",
					"Notes"=>"",
					"OpenOffice"=>"",
					"PDF reader"=>"",
					"Scout"=>"",
					"SyncEvolution"=>""),					
		'Ovi'		=> array("Store"=>""),
		'System'	=> array("App. manager" => "",
					"Backup"=>"",
					"BT HID Connect"=>"",
					"BT HID Watcher"=>"",
					"Close Debian"=>"",
					"Deb Img Install"=>"",
					"Debian chroot"=>"",
					"Debian LXDE"=>"",
					"Fix LXDE kbd"=>"",
					"h-e-n"=>"",
					"MouseCursor"=>"",
					"Nokia Kernel" => "",
					"Set Deb HW Keys"=>"",
					"Settings"=>"",
					"Synaptic Pkg Mg"=>"",
					"User Guide"=>""),
		'Utilities'	=> array("Calculator" => "",
					"Clock"=>"",
					"Currency Convert"=>"",
					"File Manager"=>"",
					"glogarchive"=>"",
					"mBarcode"=>"",
					"Midnight Comm"=>"",
					"pierogi"=>"",
					"Qalculette"=>"",
					"X Terminal"=>""),
		'Other'		=> array("Get started"=>"")
	);

$widgets = array( 
		"Desktop Photoapplet"=>"Plays photos on your Desktop",
		"Google"=>"",
		"Home Screen selector"=>"",
		"Location"=>"",
		"QT Battery Widget"=>"",
		"Sticky Notes"=>""
	);

$misc = array(
		"Recaller"=>""
		);	




$applist =  "<ul> \n";
foreach ( $apps as $subappk => $subapp) {
	$applist .=  "	<li> <h4><u>$subappk</u></h4> \n
				<ul>";
		foreach($subapp as $app=>$desc)
			$applist .=  "<li> <b>$app</b> - $desc </li> \n";
	$applist .=  		"</ul> \n
		</li> \n";
}
$applist .=  "</ul> \n";



$widlist = "<ul> \n";
	foreach($widgets as $widget=>$desc)
		$widlist .=  "<li> <b>$widget</b> - $desc </li> \n";
$widlist.= "</ul> \n";


$misclist = "<ul> \n";
	foreach($misc as $item=>$desc)
		$misclist .=  "<li> <b>$item</b> - $desc </li> \n";
$misclist.= "</ul> \n";


?>

<p> The idiot <a href='https://twitter.com/#!/poomalairaj'> pooma </a> feels that my Samsung GT 5233S doesn't fit for me and it can't be made for me. And moreover he is going to bring a N900 for him , and in parallel brainwash'd me for the same.Finally he brought me a second hand N900 for cheapest maket price. [Cheap itself alone comes around INR. 14000+] And I'm moving with my pocket PC now-a-days.

<p>
<h3>Apps I <strike>like</strike> have in my N900</h3>

Here are some apps which are  useful for N900.These apps mostly for me as I frequently flashed my N900 and it's difficult to find what're the apps are used in past and my favorite.
<p><p>
<div class="column21">	

<?php	
	echo 	"<hr> <h3> <u> Applications </u> </h3>".$applist .
		"<hr> <h3> <u> Widgets </u> </h3>". $widlist .
		"<hr> <h3> <u> Misc </u> </h3>". $misclist;
?>

</div>

<div class="column22 ">	
	<hr> 
	<h3> <u> Screenshots </u> </h3>
	
	<?php
		$img_r = array();
		$dir = "images/n900";
		// Open a known directory, and proceed to read its contents
		if (is_dir($dir)) {
		    if ($dh = opendir($dir)) {
			while (($file = readdir($dh)) !== false) {
				$img = $dir.'/'.$file;
				if($file != '.' && $file != '..'  )
					$img_r[] = $img;
			}
			closedir($dh);
		    }
		}
		sort($img_r);
		foreach( $img_r as $img)
			echo "<img src='$img' width='460' > \n";
	?>
	
	
	<hr> 
	
	<h3> <u> Screencasts </u> </h3>

<video width="360" height="288" controls="controls">  
        <source src="images/videos/n900-20s.webm" type='video/webm; codecs="vp8.0, vorbis"'>
        <p>This is fallback content</p>
</video>

<video width="360" height="288" controls="controls">  
        <source src="images/videos/n900-18s.webm" type='video/webm; codecs="vp8.0, vorbis"'>
        <p>This is fallback content</p>
</video>

<video width="360" height="288" controls="controls">  
        <source src="images/videos/n900-1.04m.webm" type='video/webm; codecs="vp8.0, vorbis"'>
        <p>This is fallback content</p>
</video>
</div>


<div class="rest">
	<h3>Need more info ?</h3>
You can find more information and communinty updates with latest apps on <a href='https://maemo.org/'> Maemo's</a> official site.
	
<?
include('tail.php');
?>








