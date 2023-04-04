<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Kesavan Muthuvel's Shameless Self Promo</title>
	<link rel="shortcut icon" href="kesavan.png" type="image/x-icon">

<link rel="icon" href="k7.png">
  </head>

  <body>
	
<?php
include('head.php');



$promo = array(
						"Mozilla Family" => "awarded badges from mozilla.org 
													#####
													https://badges.mozilla.org/en-US/profiles/profile/kesavan" ,
						"Wikipedia"=> "contributions for wikipedia.org 
													#####
													https://en.wikipedia.org/wiki/Special:Contributions/K7.india" ,
						"தமிழ் விக்கிப்பீடியா(  Wiki - Tamil)" => 
													"தமிழ் விக்கிப்பீடியாவிற்கு  பயனர் பங்களிப்புக்கள்
													#####
													https://ta.wikipedia.org/wiki/%E0%AE%9A%E0%AE%BF%E0%AE%B1%E0%AE%AA%E0%AF%8D%E0%AE%AA%E0%AF%81:Contributions/K7.india" ,
						"Global Wiki"=> "contributions towards wikimedia-wikis 
													#####
													https://tools.wmflabs.org/guc/index.php?user=K7.india" ,
						"Mozilla's Bugzilla" => "working with mozilla
													#####
													https://bugzilla.mozilla.org/buglist.cgi?emailreporter2=1&emailtype2=exact&order=Importance&emailcc2=1&query_format=advanced&emailqa_contact2=1&email2=hi%40kesavan.info&emailassigned_to2=1&emaillongdesc2=1",
						"MalarToon - Android App" => "First app to fetch cartoons from Tamil Daily
													#####
													apps/MalarToon-MalarToon.apk",
						"GitHub" => "My open buggies(codes)
													#####
													https://github.com/kesavanm/"													
													,
						"PonniyinSelvan" => "Ponniyin Selvan in ePub format (Tamil language ta_IN)( Improved version at <a href='http://ponniyinselvan.in/830/announcements/ponniyin-selvan-novel-online-ebook-format'>PSVP announcement 2016-10-07 </a>	 ) ##### docs/Ponniyin_Selvan.epub"
													,);


$latest = ["இல்லாதவன் பிள்ளை"=>"New (tamil lang) e-Book on <a href='https://read.amazon.com/kp/kshare?asin=B0BVNRT38H'>Amazon/Kindle</a> ##### https://www.amazon.com/%E0%AE%87%E0%AE%B2%E0%AF%8D%E0%AE%B2%E0%AE%BE%E0%AE%A4%E0%AE%B5%E0%AE%A9%E0%AF%8D-%E0%AE%AA%E0%AE%BF%E0%AE%B3%E0%AF%8D%E0%AE%B3%E0%AF%88-Tamil-%E0%AE%95%E0%AF%87%E0%AE%9A%E0%AE%B5%E0%AE%A9%E0%AF%8D-%E0%AE%AE%E0%AF%81%E0%AE%A4%E0%AF%8D%E0%AE%A4%E0%AF%81%E0%AE%B5%E0%AF%87%E0%AE%B2%E0%AF%8D-ebook/dp/B0BVNRT38H "]		;										

$latest["List of books"] = "Amazon's Author page! showing the works from me ( <a href='https://www.amazon.in/Kesavan-Muthuvel/e/B0BZFGQWCC'>  IN</a> version)  ##### https://www.amazon.com/stores/Kesavan-Muthuvel/author/B0BZFGQWCC";

echo "<h2> Latest works: </h2>"; 
foreach($latest as $site => $matter){
	list($what , $uri) = explode('#####',$matter);
	echo "<li> <a target='_blank' href='".trim($uri)."'>$site</a> - $what</li>\n";
}

echo "<hr>";

echo "<h2> Notable other works: </h2>"; 

ksort($promo);
echo "\n";
foreach($promo as $site => $matter){
	list($what , $uri) = explode('#####',$matter);
	echo "<li> <a target='_blank' href='".trim($uri)."'>$site</a> - $what</li>\n";
}


include('tail.php');

?>



