<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Kesavan Muthuvel's Nexus 4 | Android Device [aka] E960 </title>
    <link rel="shortcut icon" href="kesavan.png" type="image/x-icon">
	<link rel="icon" href="k7.png">


<!-- 
<style>
div.dataTables_wrapper {
        margin-bottom: 3em;
    }
</style> -->

  </head>

  <body>

<?
	include('head.php');
	include('books.pl.js');


// Apps starting from line 20 

$apps = array (
# app = > cateogry ### license ### desc
	
"<u>MalarToon</u>"	=>"NEWS###Open/GPLv3+###Picks cartoon from Dinamalar.My very first own App with bugs :)",
"Rooting*"		=>"Rooting###Open/Your Own###Make your device , your own" ,
"AdAway*"		=>"Rooting###Open/GPL### Keep all the Ads away. Blocks completely :) ",
"MoDaCo ToolKit(Xposed)"=>"Rooting###Open/MIT### Multi users and juicy more stuff",
"Wanam Kit(Xposed)"	=>"Rooting###Open/MIT### Screen Shot , Screen Record , UI Changes ",
"Adv.Power Menu(Xposed)"=>"Rooting###Open/MIT### Advanced Power Menu",
"<u>XPrivacy(Xposed)*^</u>"=>"Rooting###Open/GPLv3###XPrivacy can prevent applications from leaking privacy-sensitive data by restricting the categories of data an application can access. XPrivacy feeds applications fake data or no data at all. It can restrict several data categories, such as contacts or location.",
"AndChat" 		=> "Chat/IM ### 	Open/GPL ### AndChat is a multi-server internet relay chat (irc)		" ,
"ConnectBot*"		=> "Tool ###Open/Apache2 	 ### 	SSH and local shell client	" ,
"Wikipedia"		=> "Internet ### Open/GPL	 ###Wikipedia.org client 		" ,
"VLC*"			=> "Media### Open/LGPLv3	 ###Video and audio player that supports a wide range of formats, for both local and remote playback." ,
"F-Droid*"		=> "Basic ### 	Open/LGPLv3+ ###Application manager ,contains only bona fide FOSS. 		" ,
"Android FireWall*" 	=> "Rooting###Open/GPLv3 ###Uses iptables to limit data usage and add security to Android. ",
"TWRP Manager*"		=> "Rooting###Open/GPLv3 ###Flash Tool - Backup, Restore, and Wipe your device all using TWRP ",
"OpenRecoveryScript*"   => "Rooting###Open ###Install zips, perform backups! An open scripting engine that any recovery and any app can use to as an API between app and recovery.",
"Open Explorer Beta"	=> "Tool###GPLv3###  an open source file manager for all Android devices",
"MultiRom*" 		=> "Rooting###Open ### multi-boot mod ((Firefox OS , Ubuntu Touch)! Install or update Multi ROM,recovery and kernels.ROMs are installed and managed via modified TWRP recovery",
"SuperSu*" 		=> "Rooting###Open/GPLv3 ### Allows for advanced management of Superuser access rights for all the apps on your device that need root",
"Clean Master(Cleaner)"	=> "Tool###Not Sure ### The most downloaded FREE cache cleaner, RAM booster, and antivirus & security suite - Clean Master gives you full control over your phone to maximize performance and keep it clear of junk files.",
"App Settings(Xposed)"=> "Rooting###Apache v2.0###Change rotation mode,locale language,permissions,DPI,screen size!per-app basis",
"Greenify(Xposed)"=> "Rooting###NotSure### identify and put the misbehaving apps into hibernation when you are not using them, to stop them from lagging your device and leeching the battery, in an unique way!" ,
"Stellarium Mobile Sky Map"=> "Science/Education###Proprietary###A fully-featured planetarium for your phone. It shows a realistic and accurate night sky map.***com.noctuasoftware.stellarium-1.apk",
"Star Chart Infinite" => "Science/Education###Proprietary###Provides a magical sky/star gazing experience like no other.map.***com.escapistgames.starchartgoogleeducation_3.0.08.apk",
"XuiMod (Xposed)" => "Rooting###Open###A Small Collection of Unique Features Ported From Other Roms.Customizable StatusBar Clock",
#"XMultiWindow (Xposed)*" =>"Rooting###Open/MIT### Port omni's splite view to other ROM's enjoy multi-window feature",
#"TamilVisai"		=>"Basic###Open/GPLv3###ThamiZha! Phonetic keyboard with English keys is back.Tamil99 layout added.",
#"Ezhuthani"		=>"Basic###Prop###Tamil Keyboard - support Tamil99 Keyboard  with full fledged Tamil Suggestion Keywords support with Tamil Reply Message Templates",
#"Angry Birds"		=>"Games###Prop###The game primarily for the Kids at my Home"	,
#"Astro FileManager"	=> "Productivity###Not Sure ### ASTRO Cloud & File Manager is a FREE file explorer and has over 80 million downloads worldwide!Organize, view and retrieve all of your pictures, music, videos, & documents; built-in app backup & task killer; manage all your files regardless of where they are stored (in a cloud or on another device)",
#"Superuser" 		=> "Rooting###Open###Grant and manage Superuser rights for your phone.",
#"QR barcode scanner"	=> "Tool###Prop###SCAN, DECODE, CREATE, SHARE",
#"Adobe Reader"		=>"Office###Prop###To read the PDF",
#"FlashLight"		=> "Basic ### NotSure 	 ### 	Super-Bright LED Flashlight!For Video Chat on Laptop, throws light on face	" ,


# "	"		=> " ### 	 ### 		" ,
# "	"		=> " ### 	 ### 		" ,
);

?>

<p>
<p>
<h3>Apps I <strike>like</strike> have in my Nexus4</h3>

Here are some apps which are  useful for Android.These apps mostly for me as I frequently flashed my Nexus4 and it's difficult to find what're the apps are used in past and my favorite.
<p><p>

<div class="column21">		
<?	



echo "<table align='left' class=\"display\" id=\"\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width='100%' > \n
			<thead>	<tr>
				<th> Category </th><th> App </th><th> License </th>  <th> Desc </th> \n
				<th style = \"display:none\"></th> <!--hidden , but for search--> \n	
				\n</tr>
			</thead>


                        <tfoot> <tr>
                                <th> Category </th><th> App </th><th> License </th>  <th> Desc </th> \n
                                <th style = \"display:none\"></th> <!--hidden , but for search--> \n
                                \n</tr>
                        </tfoot> ";



foreach($apps as $app => $what ){
	$apk = '';
	list($cat,$lic,$desc) = explode('###',$what);
	list($desc,$apk) = explode('***',$desc);
	if($apk) $app_extra = "<span title='Looking for paid verision? side load the apk!'</span> 
		<a target=\"_blank\" download href=\"services/pirated/$apk\"> <font color='red'> <b>$$</b></font> </a> ";
	echo "	<tr>
			<td>".trim($cat)."</td> 
			<td><b>".trim($app)."</b> ".$app_extra ."  </td> 
			<td>".trim($lic)."</td><td> 
			<span title='".trim($desc)."'>".substr(trim($desc),0,50)."...</span></td>
			<td style=\"display: none; \" >  ".trim($desc)."  </td>
			</tr>\n";
	
	unset($cat,$lic,$desc,$apk,$app_extra);
}

echo 	"</table>\n";


echo "	<table align='left' cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width='100%' > \n
		<tr>
		<td>
			<br>* - Items I can't live without.
			<br>^ - See additional tips on the left side.
		
		<hr><p></p><p> </p> &nbsp; <u><b>FAQs / HowTO ?</b></u> <br>

		 <ul>
			<li> Qn #1 <b> How to recover the lost Original Kernel during zip installation(flashing) of other(incompactable) kernel ?</b>
				<br> Ans : Flash again the same OS (on the same ROM , if applicable on MultiROM). Don't wipe the data .</li>
			<li> Qn #2 <b> Secondary OS failed to verify ROOT in MultiROM.(or) Developer Options crash in Settings </b>
				<br> Ans : Switch the Secondary OS with the Primary.</li>
		</ul>
			<hr>		</p><br>
			<u><b>MultiROM Recommended Kernels</b></u></td>
		</tr>
	</table>\n";




echo "<table align='left' class=\"display\" id=\"\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width='100%' > \n
	<thead> <tr>
		<th> Status</th><th> OS </th><th>OS - Brand </th> 
		<th> Release/Build # </th>  <th> Kernel </th><th>Notes</th> \n </tr>\n
                        </thead> 
		<tr>
                        <td>	Active 				</td>
                        <td>	Android 4.4.4 			</td>
                        <td>	CyanogenMod 11 			</td>
                        <td>	11-20141220-NIGHTLY-mako 	</td>
			<td>	Franco Kernel<br>3.4.88-franco-r206_CM11-USB-OTG <br>gaurav@Justvarshney #5			</td>
			<td> <ul>
				<li>fk-r206_CM11-USB-OTG_justvarshney.zip Forum/Download 
					<a href='http://forum.xda-developers.com/nexus-4/development/kernel-patch-multiple-kernels-usb-t2586524' >xda-dev</a></li>
				<li>Download 4.4.3_Wifi_Fix.zip - 
					<a href='http://forum.xda-developers.com/attachment.php?attachmentid=2778855&d=1401823769'> xda-dev</a>! Forum 
					<a href='http://forum.xda-developers.com/showpost.php?p=53131623&postcount=56047' target='_blank' > on XDA </a> </li>
				</ul>	
					Previous kernel:11-20140726-NIGHTLY-mako
					
								</td>
                </tr>\n

		<tr>
                        <td>	Active </td>
                        <td>    Firefox OS 			</td>
                        <td>    Platform 30.0a1 		</td>
                        <td>    20140311175537			</td>
                        <td>    Boot2Gecko 1.4.0.0-prerelease	</td>
                        <td>    Free and opensource from Mozilla</td>
                </tr>\n

	        <tr>
                        <td>	Active </td>
                        <td>    Android 5.1.1 			</td>
                        <td>    STOCK	</td>
                        <td>    Breadcrumbs-N-Bunnies		</td>
                        <td>    Mako-L-Breadcrumbs-N-Bunnies-5.9</td>
                        <td>    Highly customized by Google 	</td>
                </tr>\n

	        <tr>
                        <td>	Retired				</td>
                        <td>    Android L 			</td>
                        <td>    STOCK	- Developer Preview	</td>
                        <td>    Breadcrumbs-N-Bunnies		</td>
                        <td>    Mako-L-Breadcrumbs-N-Bunnies-5.9</td>
                        <td>    Highly customized by Google 	</td>
                </tr>\n

          <tr>
                        <td>	Active </td>
                        <td>    Ubuntu	 			</td>
                        <td>    Touch Saucy			</td>
                        <td>    </td>
                        <td>    </td>
                        <td>    </td>
                </tr>\n
         <tr>
                        <td>	Active </td>
                        <td>	Android 4.4.4	</td>
                        <td>	STOCK - Stable	</td>
                        <td>	KTU84P		</td>
                        <td>	3.4.0-perf-g6e2edb0 <br> tassadar@nymeria #215 </td>
                        <td>	Previous kernel(s): [Worth to try]  <li>shankar@Matr1x.shankar #2  <li>3.4.0-cfs-g625da78 </td>
        </tr>\n
	<tr>
                        <td>	Retired				</td>
                        <td>    Android 4.3.1			</td>
                        <td>    CyanogenMod 10 - Stable		</td>
                        <td>    10.2.1-mako			</td>
                        <td>    3.4.0-cyanogenmod-gb7efce1 	<br>
				build@cyanogenmod #1 </td>
                        <td>   Plain Build; No USB-OTG avail.Need flashing on extra features </td>
                </tr>\n";







echo    "</table>\n";
echo    "</div>\n";

?>


<div class="column22 ">	
	<h3> <u> Tips </u> </h3>
<ul>
<li>
	<b>Rooting</b> - a lot of methods available.<a target='_blank' href='tmp/mako/HOWTOROOT.TXT' target='_blank'> Here's what I tried last time  </a> 
</li>
<li>
	<b>Flashing</b> - a lot of methods available.<a target='_blank' href='tmp/mako/flash-android.log' target='_blank'> Here's how I flashed last time</a> 
</li>
<li>
	<b>SHELL/SQLITE ACCESS</b> - <code> adb shell </code> <a target='_blank' href='tmp/mako/sqlite.log' target='_blank'> Here's how I removed duplicates in call log last time</a> </li>


<li>
	<b>Lock screen Orientation</b> by <a target='_blank'  href='http://forum.xda-developers.com/showthread.php?t=2146772'>xaueious</a> : <br>
	Temporary :	<font face='courier' >setprop lockscreen.rot_override true </font> on the console as root <br>
	Persistent: Add <font face='courier' > lockscreen.rot_override=true</font> on /system/build.prop
</li>



<li>
	<b>Home screen Orientation (Launcher)</b> by <a target='_blank'  href='http://forum.xda-developers.com/showthread.php?t=2437377'>App Settings</a> : <br>
	Persistent: Xposed >> App Settings >> Launcher >> Orientation >> Normal
</li>

<li><b> Telephony/Dialer Orientation</b> First - Unlock the screen Orientation . Then use above mentioned 'App Settings' tools for Dialer app</li>


<li>
	<b>Multiple user  mode</b>(Settings >> Users ):<br>
	Temporary :	<font face='courier' > setprop fw.max_users 5 </font> on the console as root for 5 users <br>
	Persistent: Add <font face='courier' > fw.max_users=5 </font> on /system/build.prop or /sdcard/build.prop [based on how your device boot]
</li>

<li>
	<b>XPrivacy</b> - <br> XPrivacy > Filter > Filter on user/system applications <br>
			XPrivacy > Application > Operations... > Apply template (categories+functions) > OK 	<br>

</li>


<li>
	Unless otherwise noteddown , the information in this page is all about and/or verified on  <span style="background-color: #FFFF00"> 
Nexus 4 (aka) LG E960 (aka) Occam (aka) MAKOZ30d (aka) <b>MAKO</b>  with Baseband version :  	M9615A-CEFWMAZM-2.0.1700.98 </span>
</li>


</ul>		

	
	
	<hr> 
	<h3> <u> Screenshots </u> </h3>

	<img src="images/e960/Screenshot_2014-02-15-22-35-41.png" > <br>
	You can find much more interseting  Screenshots on Nexus 4/5/7 , Samsung Galaxy SkyRocket, and other devices at :
	<ul>
		<li><a href='http://downloads.kesavan.info'>downloads section</a>(under __radios__) or 
		<li><a href='https://cloud2.kesavan.info/public.php?service=files&t=48f441e26b35d627cce34c91f3f52df9'>ownCloud instance</a>(a symb-link of earlier)
	</ul>
	<hr>

	<h3> <u> Screencasts </u> </h3>
		<video width="360" height="288" controls="controls">
			<source  src="images/e960/scr_20140216_120352.webm"></source>
			<p>Your browser doesn't support this video</p>
		</video>

</div>


<div class="rest">

<h3>Need more info ?</h3>
You can find more information and communinty updates with latest apps on <a target='_blank' href='http://forum.xda-developers.com'> Xda-developers</a> official site.
	
<?
include('tail.php');
?>

