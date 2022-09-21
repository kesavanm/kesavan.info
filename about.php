<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Kesavan Muthuvel's 'about me'..,</title>
	<link rel="shortcut icon" href="kesavan.png" type="image/x-icon">
	<link rel="icon" href="k7.png">


    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDweiQkvCeqlusLnuvlwUWvJ522fAf9H80"></script>
    <script type="text/javascript">
        var locations = [

            ['Home town', 'Sholvandan',1],
			['Home city', 'Madurai',2]
        ];
        function InitMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 13,
                center: new google.maps.LatLng(10.022251,77.962568),	
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            var infowindow = new google.maps.InfoWindow();
            var marker, i;
            for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map
                });
                google.maps.event.addListener(marker, 'click', (function (marker, i) {
                    return function () {
                        infowindow.setContent(locations[i][0]);
                        infowindow.open(map, marker);
                    }
                })(marker, i));
            }
        }
    </script>



  </head>
  <body   onload="InitMap();">>
<?
include('head.php');
include_once('jquery/dataTable/dataTable.php');
?>
I love Open source concept & it's <a href='https://www.gnu.org/philosophy/'>philosophy</a>. along with some portion of Yahoo!,Google & other commercial portals ., Personally for computing I prefer GNU OSes over the Windows/Macs,<br>
open the unix,close the windows<br>
<br>
<pre>
$411 kesavan
+1 832-874-4138
$
</pre>

<h2><font size=3 >Occupation</font ></h2> <font  ><li>Service Manager - Cognizant Technology Solution US Corp</font ></p>

<H2  align=left style="margin-top: 0in; margin-bottom: 0in; ">
<font size=3 style="font-size: 11pt">Employment</font ></H2>
<p>		
	<table cellpadding="0" cellspacing="0" border="0" class="display" id="employment" width='55%' >
		<thead> 
			<tr> <th>Organization</th>     <th>Position</th>     <th>Time</th> </tr> 
		</thead> 
		<tbody>
			<tr> <td > Cognizant Technology Solutions</td>		<td>Service Manager</td><td>2022 - present </td> </tr>
			<tr> <td > Cognizant Technology Solutions</td>		<td>Sr.Associate</td><td>2016 - 2022</td> </tr>
			<tr> <td > Cognizant Technology Solutions</td>		<td>Associate</td><td>2010 - 2016 </td> </tr>
			<tr> <td> Cognizant Technology Solutions</td>		<td>Programmer Analyst</td><td>2008 - 2010 </td> </tr>
			<tr> <td> ConsimInfo&nbsp;Pvt&nbsp;Ltd&nbsp;[BharatMatrimony.Com]</td><td>Developer</td><td>2007 - 2008</td> </tr>
			<tr> <td> Avni Infotainment</td>			<td>Engineer</td><td>2006 - 2007</td> </tr>
			<tr> <td> PPP Infotech</td>				<td>Developer</td><td>2005 - 2006 </td> </tr>
		</tbody>
		<tfoot>
			<tr>
				<?php 
				
				if(NO_COL_SEARCH) { 
					echo "<tr> <th colspan='3'> &nbsp;</th> </tr> ";
				 }else { 
					echo "<th><input type='text' value='Search Organization' class='search_init' /></th>
					<th><input type='text' value='Search Position' class='search_init' /></th>
					<th><input type='text' value='Search Time' class='search_init' /></th>";
				}
				?>
			</tr>
		</tfoot>

	</table>

<br> <p>

<H2  align=left style="margin-top: 0in; margin-bottom: 0in; ">
<font size=3 style="font-size: 11pt">Education</font ></H2>
<p>
	<table cellpadding="0" cellspacing="0" border="0" class="display" id="employment-2" width='55%' >
			<thead> 
				<tr> <th>Where</th>     <th>What I learnt</th>     <th>Time</th> </tr> 
			</thead> 
			<tbody>
				<tr> <td >Joe Suresh Engineering College </td>		<td>int main()</td><td> 2001 - 2004 </td> </tr>
				<tr> <td >RVS College of Engg &amp; Tech </td>		<td>TCP/IP Sockets	&amp; Hello</td><td> 2004 - 2005</td> </tr>
				<tr> <td>Madurai Meenachi Metric Hr. Sec. School </td>		<td>E=mc^2</td><td>2000 - 2001</td> </tr>
				<tr> <td>Vivekananda Metric Hr. Sec. School </td>		<td>Basic</td><td>1990 - 1999</td> </tr>
				<tr> <td>Sophia English School [KG's] </td>		<td>ABCD's</td><td>1985 - 1987</td> </tr>
			</tbody>
			<tfoot>
				<tr>
					<?php 
					
					if(NO_COL_SEARCH) { 
						echo "<tr> <th colspan='3'> &nbsp;</th> </tr> ";
					}else { 
						echo "<th><input type='text' value='Search Organization' class='search_init' /></th>
						<th><input type='text' value='Search Position' class='search_init' /></th>
						<th><input type='text' value='Search Time' class='search_init' /></th>";
					}
					?>
				</tr>
			</tfoot>
	</table>
	<br> <p>

<H2  align=left style="margin-top: 0in; margin-bottom: 0in; ">
<font color="#888888"><font ><font size=3 style="font-size: 11pt">Places lived</font ></H2>
<P align=left style="margin-bottom: 0in; border: none; padding: 0in; widows: 2; orphans: 2">
<font ></font>
<!--
<IMG SRC="https://maps-api-ssl.google.com/maps/api/staticmap?size=195x150&amp;sensor=false&amp;client=google-profiles&amp;markers=size:small%7Ccolor:blue%7C13.060422,80.249583&amp;markers=size:small%7Ccolor:green%7C9.915997,78.121847%7C8.733,77.7%7C10.35672,77.976051%7C10.021144,77.961016&amp;signature=88hpQNivegCV9mCJuwqaVkq-lGA%3D" name="graphics1" alt="Map of the places where this user has lived" align=BOTTOM BORDER=0>
	src="https://maps-api-ssl.google.com/maps/api/staticmap?api=AIzaSyDweiQkvCeqlusLnuvlwUWvJ522fAf9H80&size=512x512&sensor=false&markers=size:small|color:blue|13.060422,80.249583&markers=size:small|color:green|9.915997,78.121847|8.733,77.7|10.35672,77.976051|10.021144,77.961016" 
-->
<iframe
width="600"
  height="450"
  frameborder="0" style="border:0" 
	src="https://www.google.com/maps/embed/v1/search?key=AIzaSyDweiQkvCeqlusLnuvlwUWvJ522fAf9H80&q=Sholavandan+Madurai" allowfullscreen
	 name="graphics1" alt="Map of the places where this user has lived" align=BOTTOM BORDER=0>
	 </iframe>

</P>
<!--
<div id="map" style="height: 500px; width: auto;">
-->
<UL>
	<li><P align=left style="margin-bottom: 0in; ">	<font   >Houston</font ></P>
	<li><P align=left style="margin-bottom: 0in; ">	<font   >Chennai</font ></P>
	<li><P align=left style="margin-bottom: 0in; ">	<font   >Madurai</font ></P>
	<li><P align=left style="margin-bottom: 0in; ">	<font   >Tirunelveli</font ></P>
	<li><P align=left style="margin-bottom: 0in; ">	<font   >Dindigul</font ></P>
	<li><P align=left style="margin-bottom: 0in; ">	<font   >Sholavandan</font ></P>
</UL>
<H2  align=left style="margin-top: 0in; margin-bottom: 0in; ">
<font color="#888888"><font ><font size=3 style="font-size: 11pt">Gender</font ></H2>
<P align=left style="">
<font   >Male</font ></P>
<H2  align=left style="margin-top: 0in; margin-bottom: 0in; ">
<font color="#888888"><font ><font size=3 style="font-size: 11pt">Other
names</font ></H2>
<P align=left style="">
<font   >kesu</font ></P>
<H2  align=left style="margin-left: 0.1in; margin-top: 0in; margin-bottom: 0.16in; ">
<font color="#888888"><font ><font size=3 style="font-size: 11pt">Links</font ></H2>
	
<?


$domains = array (
		"docs.google.com#####wish-list" 	=> "http://docs.google.com/Doc?id=d7dktnn_373sr7739dv",
		"360.yahoo.com#####mY!"			=> "http://360.yahoo.com/kesavan2000in",
		"kuppaigal.blogspot.com#####iG"		=> "http://kuppaigal.blogspot.com/",
		"twitter.com#####twitter"		=> "http://twitter.com/kesavan2000in",
		"youtube.com#####YouTube - kesavan2000in"=> "http://youtube.com/user/kesavan2000in",
		"www.blogger.com#####Blogger (Profile)" => "http://www.blogger.com/profile/16392207344087164229",
		"www.google.com#####Google Reader"	=> "http://www.google.com/reader/shared/17942083349304532292",
		"picasaweb.google.com#####Picasa Web "	=> "http://picasaweb.google.com/k7.india",
		"pulse.yahoo.com#####kesavan2000in"	=> "http://pulse.yahoo.com/kesavan2000in",
		"www.flickr.com#####k7"			=> "http://www.flickr.com/people/k7/"
);

$cache = "https://s2.googleusercontent.com/s2/favicons?alt=p&amp;domain=";
foreach ($domains as $domain => $href ){
	list($uri,$app ) = explode("#####",$domain);
	echo "<img src='".$cache.$uri."' width='16' height='16' border='0' > <a href='".$href."' target='_blank'>$app</a> &nbsp; &nbsp;  ";	
}					

?>


</p>
<?
include('tail.php');
?>

</BODY>
</HTML>

