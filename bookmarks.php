<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Kesavan Muthuvel's Personal Page | Bookmarks </title>
    <link rel="shortcut icon" href="kesavan.png" type="image/x-icon">

<link rel="icon" href="k7.png">
  </head>

  <body>
 
<?php
include('head.php');
//phpinfo();

$bookmarks = array( 
		'social' => array(
				'socializer.cc' 	=> 'https://socializer.cc/stream',
				'loadaverage.org'	=> 'https://loadaverage.org/',
                                'kindofnormal'		=> 'http://kindofnormal.com/truthfacts',
                                'twitter'		=> 'https://twitter.com/kesavan2000in',),
		'misc' => array(
                                'unicode converstion' 	=> "http://www.jyotirmani.com/uni/fileconverterindex.php5",
				'unicode conv2' 	=> "http://www.innovatrix.co.in/unicode/fileconverterindex.php5"        ,
				'pdf2epub - by xerox'	=> "https://pdf2epub.services.open.xerox.com",
				'mozilla - addons' 	=> "https://addons.mozilla.org/en-us/firefox/collections/kesavan/kesavan"    ,
				'regexr' 		=> "http://www.regexr.com/",
				'PDF split and merge' 	=> 'http://www.pdfsam.org/basic-version/',),
                'smile'=> array(
                                'too-much-information'	=> 'http://timesnewgeek.blogspot.com/2014/04/the-tmi-too-much-information-age.html',
                                'sleep-and-math'	=> 'http://timesnewgeek.blogspot.com/2014/04/calculations-sleep-and-math.html',
				'inspirationgreen' 	=> 'http://www.inspirationgreen.com/monsanto-cartoons-and-posters.html',
				'notfunny'		=> 'http://static.notfunny.com/toondb/120424.html?utm_source=diaspora',
				'abstrusegoose'		=> 'http://abstrusegoose.com/558',
                                'abstrusegoose2'	=> 'http://abstrusegoose.com/531',
				'cartoonmovement'	=> 'http://www.cartoonmovement.com/cartoon/9421'),                                 

		'astronomy'=>array(
				'phet-solar-system'	=> 'http://phet.colorado.edu/sims/my-solar-system/my-solar-system_en.html',
				'phet-simulations'	=> 'http://phet.colorado.edu/en/simulations/category/new',
				'seasons-simulator'	=> 'http://astronomy.beamappzone.com/?m=simulations',
				'3d-appzend-simulator'	=> 'http://solarsystem.appzend.net/?q=solarsimulator1',
				'pioneer-10-plaque'	=>'http://earthspacenews.com/plaque-pioneer-10/',
			'5th-dimension'=>'http://en.wikipedia.org/wiki/Wikipedia:Reference_desk/Archives/Science/2012_August_17#physics.2F5th_Dimension',
					),
		'trip/travel' => array(
		'india-art-and-archaeology' => 'http://www.art-and-archaeology.com/india/india.html', 
'hoysala-temples' => 'http://in.lifestyle.yahoo.com/five-hoysala-temples-off-the-tourist-map.html',
'காசியில் நான்கு நாட்கள்' => 'http://meedpu.blogspot.co.uk/2013/10/18_3103.html',
'புல்வெளிதேசம் ' => 'http://www.jeyamohan.in/?p=2854',
'சேரன் பாண்டியன் பெருவழித்தடம்' => 'http://maduraivaasagan.wordpress.com/2013/11/09/%E0%AE%9A%E0%AF%87%E0%AE%B0%E0%AE%A9%E0%AF%8D-%E0%AE%AA%E0%AE%BE%E0%AE%A3%E0%AF%8D%E0%AE%9F%E0%AE%BF%E0%AE%AF%E0%AE%A9%E0%AF%8D-%E0%AE%AA%E0%AF%86%E0%AE%B0%E0%AF%81%E0%AE%B5%E0%AE%B4%E0%AE%BF%E0%AE%A4/'
)

	);

?>
<p> Here goes all my bookmarks. <p>

<div class="column1"> <? echo bookmark('social'); echo bookmark('smile'); ?> </div> 
<div class="column2"> <? echo bookmark('misc'); echo bookmark('astronomy'); ?> </div>
<div class="column3"> <? echo bookmark('trip/travel'); ?></div>
<div class="rest">    <hr><h3>Misc</h3><p> Wanna see my resume? <a href="resume.php">here</a> it is.<? include('tail.php');?> </div>

<?php
function bookmark($type){
	global $bookmarks;
	foreach($bookmarks[$type] as $bookmark => $desc )
		$return .= "<li> $bookmark  - <a target = 'blank' href='$desc'> ".substr(trim($desc),0,50). "</a> \n ";
	return "<h3>$type</h3>". $return;
}
?>


