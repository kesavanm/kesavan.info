<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Kesavan Muthuvel's KODI [aka] XBMC [aka] OpenELEC on RaspberryPi , Android , FireTV  </title>
    <link rel="shortcut icon" href="kesavan.png" type="image/x-icon">
	<link rel="icon" href="k7.png">
<!-- 
<style>
div.dataTables_wrapper {
        margin-bottom: 3em;
    }
</style> -->

<style>
pre {
    white-space: pre-wrap;       /* CSS 3 */
    white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
    white-space: -pre-wrap;      /* Opera 4-6 */
    white-space: -o-pre-wrap;    /* Opera 7 */
    word-wrap: break-word;       /* Internet Explorer 5.5+ */
}
</style>

  </head>

  <body>

<?
	include('head.php');
	include('books.pl2.js');


// Apps starting from line 20 

	$apps =[	#app 		=> cateogry ### repo ### desc ### related uri
	
	#Weather
	"Open Weather Map"	=> "Weather ### Official Repo ### Open Source Weather tool",
	"Yahoo! Weather*"	=> "Weather ### Official Repo ### Yahoo! Weather tool ",

	#Music
	"TuneIn Radio"		=> "Music ### Official Repo  ### 50000+ stations ",
	
	#Videos
	"Cartoons8"		=> "Video ### SuperRepo      ### Best for <b>Kids</b>. 100% Verified for quality.I love to watch Dora & Minions on this " ,
	"1Channel*"		=> "Video ### TV Addons Repo ### Wide selection of movies and shows.<b>Library </b>Integration. ### www.PrimeWire.ag",
	"Navi X"		=> "Video ### TV Addons Repo ### GPL Program.<b>Verified User Media</b> from Public. Search whatever you look for ### http://fusion.tvaddons.ag"	,
	"YouTube"		=> "Video ### Official Repo  ### YouTube Videos on KODI.<b> No ADS </b> ",
	"Watch 1080"		=> "Video ### Fusion Repo    ### Only high quality videos from a selection of <b>direct hosts</b> ### https://twitter.com/metal_kettle",
	"Genesis"		=> "Video ### Fusion Repo    ### Was one of the best video addon.<b>Library </b>Integration.Discontinued :( ### https://twitter.com/og_s7eele",
	"Cartoon HD"		=> "Video ### xUnityTalk Repo### One of Best video addons for <b>Kids</b>. I enjoyed a lot on Disney and Barbies###http://dlcartoonhd.com/mobile/ ",
	"Cartoon Extra"		=> "Video ### xUnityTalk Repo### Another from the Cartoon HD, but not only limited for cartoons but for all ages.###http://dlcartoonhd.com/mobile/ ",
	"Exodus*"		=> "Video ### Fusion Repo    ###<strong>Top Rated 2016 Video Addon</strong> from Lambda, creator of Genesis ### " ,
	"URLResolver"		=> "Video ### TV Addons Repo    ### Resolve common video host URL's to be playable in XBMC/Kodi ### ",

	#Skins
	"CCM (Helix)"		=> "Skin### Super Repo ### Improved SKIN and advanced settings.Explore your KODI",

	#Repo,Services,Script,Program
	"Fusion"		=> "Repo / Media  ### Total Revolution Repo ### Addons & more.Part of Total Revolution Project 	### http://fusion.tvaddons.ag ",
	"Addon Installer"	=> "Repo / Media  ### Fusion Repo    	    ### plugin.program.addoninstaller-X.X.X.zip ",
	"SuperRepo"		=> "Repo / Media  ### SuperRepo - Self      ### Another 3rd party market 			### http://srp.nu ",
	"xUnityTalk"		=> "Repo / Media  ### xUnityTalk - Self     ### 3rd party add ons & the home of XUNITY	### http://xunitytalk.me/xfinity",

	#IPTV
	"PVR IPTV Simple Client"=> "PVR IPTV EPG  ### Official Repo  ### Personal Video Recorder & IP TV lists to view TV SHOWS ### http://kesavan.info/kodi#iptv_m3u",
	"Rytec EPG Downloader"	=> "PVR IPTV EPG  ### SuperRepo      ### Electronic Programming Guide, Interactive guide to watch TV ### http://kodilive.eu/",	
	"PseudoTV Live & <br>PseudoLibrary "=> "PVR IPTV EPG  ### SuperRepo      ### Channel-surfing. <b>AutoTuning is good one.</b>### http://www.pseudotvlive.com",


	#"HD Movie 14

	"Global Search"		=> "General  ### Official Repo ### find any item in your video and music library. ### ", 
	];

?>

<p>
<p>
<h3>Apps I <strike>like</strike> have in KODI [aka] XBMC [aka] OpenELEC</h3>

Here are some addons which are  useful for KODI.These addons mostly for me as I frequently flash my devices and it's difficult to find what're the addons are used in past and my favorite.
<p><p>

<div class="XXXcolumn21XXX">		
<?	



echo "<table align='left' class=\"display\" id=\"example\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width='100%' > \n
			<thead>	<tr>
				<th> Category </th><th> Addon </th><th> Repo </th> <th> Desc </th> <th> URL</th> \n
				<th style = \"display:none\"></th> <!--hidden , but for search--> \n	

				\n</tr>
			</thead>


                        <tfoot> <tr>
				<th> Category </th><th> Addon </th><th> Repo </th> <th> Desc </th> <th> URL</th> \n
                                <th style = \"display:none\"></th> <!--hidden , but for search--> \n
                                \n</tr>
                        </tfoot> ";



foreach($apps as $app => $what ){
	list($cat,$lic,$desc,$uri) = explode('###',$what);
	list($desc,$apk) = explode('***',$desc);
	$apk = trim($apk);
	if($apk) $app_extra = "<span title='Looking for paid verision? side load the apk!'</span> 
		<a target=\"_blank\" download href=\"services/pirated/$apk\"> <font color='red'> <b>$$</b></font> </a> ";
	echo "	<tr>
			<td>".trim($cat)."</td> 
			<td><b>".trim($app)."</b> ".$app_extra ."  </td> 
			<td>".trim($lic)."</td>
			<td><span title='".trim($desc)."'>".substr(trim($desc),0,100)."...</span></td>
			<td> <a target='_blank' href='".trim($uri)."'>   ".trim($uri)." </a> </td>
			<td style=\"display: none; \" >  ".trim($desc)."  </td>
		</tr>\n";
}

echo 	"</table>\n";


echo "	<table align='left' cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width='100%' > \n
		<tr>
			<td><br>* - Items I can't live without.<hr><p></p><p> </p> &nbsp; <u><b>FAQs / HowTO ?</b></u> <br>

		<div id='iptv_m3u'>
		 <ul>
			<li> Qn #1 <b> Need more info on KODI </b><br>
			     Ans : Read my blogs on kodi at <a target='_blank'  href='https://blog.kesavan.info/tag/kodi/' > https://blog.kesavan.info/tag/kodi/  </a> .<br>

			<li> Qn #2 <b> EPG / IPTV /PVR ... , What they're ? Why I need ?</b><br>
			     Ans : Electronic Programming Guide / Internet Protocol TV / Persona Video Recorder .<br>
				Gives you interactive way to watch the TV over Internet.You can even record shows with PVR & watch later.<br>
				Make sure you've a EPG service plugin (Rytec EPG Downloader).For things go better you need : <br>
					<ol>
						<li> IPTV list  - Format : m3u
						<li> EPG guide  - Format : gz (or xml in case of merge of multiple guides) 
					</ol>

			<li> Qn #3 <b> Where I find perfect IPTV m3u playlist & EPG guides ? </b><br>
			     Ans : <b>No where</b>.You need to spend your time,do some research.But I've few to shortlist.But not sure how this 'll be updated by the time you read this.
				<ul>
					<li> <u><b>Realy good one:</b></u>
			       	<li> Both IPITV list & EPG guides <a href='http://kodilive.eu' target='_blank' > http://kodilive.eu </a>
					<li> <b>Only IPTV :</b>
					<li> http://pastebin.com/raw/7JFYpaDq 
					<li> http://kesavan.info/files/iptv_m3u/animacao_pt_br.m3u
					<li> http://kesavan.info/files/iptv_m3u/animation.m3u
					<li> http://kesavan.info/files/iptv_m3u/hd-channels.m3u
					<li> http://kesavan.info/files/iptv_m3u/moviesInt.m3u
					<li> http://kesavan.info/files/iptv_m3u/NewsInt.m3u
					<li> http://kesavan.info/files/iptv_m3u/today-20160128.m3u
					<li> http://kesavan.info/files/iptv_m3u/usa.m3u
					<li> http://kesavan.info/files/iptv_m3u/uslist.m3u
					<li> <b>Test & Go:</b>
				</ul>
				<div style=\"opacity:.5;\">
				<ul>
					<li> USA/UK IPTV - http://pastebin.com/raw.php?i=Z7ntMnF8
					<li> USA/UK IPTV - http://pastebin.com/raw.php?i=m3qAsuf9
					<li> USA/UK IPTV - http://pastebin.com/raw.php?i=xMBenkvm
					<li> http://file.xbmcmxtv.com/2legit.m3u
					<li> http://file.xbmcmxtv.com/latinomix2.m3u
					<li> http://bit.ly/kodilive
					<li> http://pastebin.com/raw/cQpVCrZw
					<li> http://cdn.domtardif.info/m3u/
									<li> http://www.kodipiguide.com/koditutorials/setup-live-tv-on-kodi-pvr-iptv-simple/
					<li> http://iptv-zak.blogspot.com/2015/01/arenasport-sk-exyu-balkan-albania.html?m=1
				</ul>
				</div>

			<li> Qn #4 <b> How to setup Rytec EPG Downloader(service.rytecepgdownloader-0.6.0.zip)?</b><br>
			     Ans : In short :Please refer instructions at http://kodilive.eu/ .<br>
			           In long : <code>System >> Add-ons >> My Add-ons >> Services >> Rytec EPG Downloader >> Configure</code> <br>
					<i> Quoting from http://kodilive.eu:</i>
					<pre> \"To set the addon you have to choose the folder where you download the file .gz EPG, enter the activation code 3025 , and select the list / lists XMLTV (broken down by countries) that you want to be discharged. So the configuration of PVR IPTV Simple Client settings in EPG enter the path of the downloaded file as local Destination . If you chose to download the EPG for channels more countries will create a file named merged_epg.xml, to be set in path XMLTV .\"
					</pre>

		 </ul>

		 </div>

			</p><br>
		</tr>
	</table>\n";

echo    "</div>\n";

?>


<div class="XXXcolumn22XXX ">	
	

</div>


<div class="rest">
	
	<hr> 
	<h3> <u> Screenshots </u> </h3>

	You can find much more interseting  Screenshots on KODI , and other devices at :
	<ul>
		<li><a target='_blank' href='http://downloads.kesavan.info'>downloads section</a>(under __radios__) or 
		<li><a target='_blank' href='https://cloud2.kesavan.info/public.php?service=files&t=48f441e26b35d627cce34c91f3f52df9'>ownCloud instance</a>(a symb-link of earlier)
	</ul>
	<hr>

<h3>Need more info ?</h3>
You can find more information and communinty updates with latest apps on <a target='_blank' href='http://kodi.tv/' > kodi.tv  official site </a> and  <a target='_blank' href='http://kodi.wiki/'> KODI Wiki official wiki</a>.
	
<?
include('tail.php');
?>

