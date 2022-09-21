<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Thulasi Kesavan </title>
    <link rel="shortcut icon" href="kesavan.png" type="image/x-icon">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="jquery.bsPhotoGallery.js"></script>



<link rel="icon" href="k7.png">
  </head>

  <body>
<?
include('head.php');
?>


<center>
<p>

<h2> Blessed with a baby girl on 10/08/2020 - குந்தவை  கேசவன்     Kundavai Kesavan </h2>
<h2> Blessed with a baby girl on 02/02/2016 - துளசி கேசவன்     Thulasi Kesavan </h2>
<div>

	<hr> 
	<h1>Pongal Celebs - 2022 - ஆடல் மற்றும் பாடல் </h1>
	<div>
	<iframe width="560" height="315" src="https://youtube.com/embed/020pncoMlpI?start=490" frameborder="0" allowfullscreen></iframe>
	<iframe width="560" height="315" src="https://youtube.com/embed/020pncoMlpI?start=2382" frameborder="0" allowfullscreen></iframe>
	<hr>

<a data-flickr-embed="true" href="https://www.flickr.com/photos/193810939@N04/albums/72157720088779800" title="2021 - Kundavai&#x27;s 1st B&#x27;day"><img src="https://live.staticflickr.com/65535/51603835040_25750cffd2_z.jpg" width="640" height="480" alt="2021 - Kundavai&#x27;s 1st B&#x27;day"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>

	<a data-flickr-embed="true"  href="https://www.flickr.com/photos/k7/albums/72157719789261045" title="thulasi"><img src="https://live.staticflickr.com/65535/51405243646_febf9fa2df_z.jpg" width="640" height="427" alt="thulasi"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>


	<a data-flickr-embed="true"  href="https://www.flickr.com/photos/k7/albums/72157665209061676" title="thulasi"><img src="https://farm2.staticflickr.com/1642/25348265025_9fd9165c35_z.jpg" width="640" height="427" alt="thulasi"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>

	<a data-flickr-embed="true" href="https://www.flickr.com/photos/k7/albums/72157669822504504" title="2016 August | Little Krishna at Houston"><img src="https://live.staticflickr.com/8354/28621903384_fb4f232057_n.jpg" width="640" height="427" alt="2016 August | Little Krishna at Houston"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>

	<a data-flickr-embed="true" href="https://www.flickr.com/photos/k7/albums/72157670491224625" width="640" height="427"></a>
	<hr>
	
	<img width='300p' src='images/photo315817020269635620.jpg' >
	<img width='300p' src='images/photo315817020269635621.jpg' >

	<hr>
	<!-- Video -->
	<iframe width="560" height="315" src="https://www.youtube.com/embed/5SC_RJgHA1o" frameborder="0" allowfullscreen></iframe>


	<hr>

	<style type="text/css"> 
	.flickr_badge_image {margin:0px;display:inline;}
	.flickr_badge_image img {border: 3px solid #666666 !important; padding:2px; margin:3px;}
	#flickr_badge_wrapper {width:860px;text-align:left}
	</style>

	<div id="flickr_badge_wrapper"> 
		<?php 	echo gen_slideshow();	?>
	</div>


	<a data-flickr-embed="true" data-header="true" data-footer="true" href="https://www.flickr.com/photos/k7/galleries/72157626677301353" title="Stone-Art"><img src="https://live.staticflickr.com/2238/2196009168_a124b178e5_z.jpg" width="640" height="480" alt="Stone-Art"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>

</div>
					<script async src='//embedr.flickr.com/assets/client-code.js' charset="utf-8"></script>


</center>


<?

	function gen_slideshow(){ 
		$albums = array( 72157665209061676 , 72157666096112713,72157667449566700,
			72157670491224625,	#Thulasi-Peacock
			72157670115825102 ,	#Thulasi | Shopping
			72157669822504504 , 	# 2016 August | Little Krishna at Houston 
		);
		rsort($albums);
		foreach($albums as $set){
#			$slideshow .= " <a data-flickr-embed='true' href='https://www.flickr.com/photos/k7/albums/".$set."'> width='640' height='427'></a>\n";
		}

		return $slideshow;
	}


	function gen_badges(){
		global $albums;
		foreach($albums as $set){

			//flickr.photosets.getInfo
			// TODO OPEN KEY ISSUE 
			$api_url	= "https://api.flickr.com/services/rest/?" ;
			$api_method 	= "method=flickr.photosets.getInfo&" ;
			$api_key 	= 'api_key=f3637beb8d63d1f84b7221a55f77f6b8&';
			$api_userid	= "user_id=29018477@N00&";
			$set_info = file_get_contents_curl($api_url.$api_method.$api_key."photoset_id=$set&".$api_userid."&format=php_serial");
			$set_info = unserialize($set_info);
			$title = $set_info['photoset']['title']['_content'] ;
			$date = date_create();
			date_timestamp_set($date,$set_info['photoset']['date_create']);

			$script .= "<hr><p><b>$title</b> on ".date_format($date,'Y-m-d')."\n";
			$script .= "<script type='text/javascript' src='https://www.flickr.com/badge_code_v2.gne?".
				"count=10&display=latest&size=m&layout=x&source=user_set&set=$set'></script>";
		}
		return $script;
	}


	function file_get_contents_curl($url) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36');
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		$data = curl_exec($ch);
		$retcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);
		if ($retcode == 200) {
			return $data;
		} else {
			return null;
		}
	}	

include('tail.php');
?>

<script>

$(document).ready(function(){
  $('ul.first').bsPhotoGallery({
      "classes" : "col-lg-2 col-md-4 col-sm-3 col-xs-4 col-xxs-12",
		  "hasModal" : true
  });
});


$(document).ready(function(){
	 $("#flickr_badge_wrapper a").attr('target','_blank');
}); 
</script>
