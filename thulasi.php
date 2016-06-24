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

<h2> Blessed with a baby girl on 02/02/2016 - துளசி கேசவன்     Thulasi Kesavan </h2>
<div>

<!-- 
<ul class="first">
	<li><img width='300p' src='images/photo315817020269635620.jpg' > </li>
	<li><img width='300p' src='images/photo315817020269635621.jpg' > </li>
</ul>

-->

	<img width='300p' src='images/photo315817020269635620.jpg' >
	<img width='300p' src='images/photo315817020269635621.jpg' >

	<hr>
	<a data-flickr-embed="true"  href="https://www.flickr.com/photos/k7/albums/72157665209061676" title="thulasi"><img src="https://farm2.staticflickr.com/1642/25348265025_9fd9165c35_z.jpg" width="640" height="427" alt="thulasi"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>




<hr>

<iframe width="560" height="315" src="https://www.youtube.com/embed/5SC_RJgHA1o" frameborder="0" allowfullscreen></iframe>


<hr>


	<style type="text/css"> 
	.flickr_badge_image {margin:0px;display:inline;}
	.flickr_badge_image img {border: 3px solid #666666 !important; padding:2px; margin:3px;}
	#flickr_badge_wrapper {width:860px;text-align:left}
	</style>

	<div id="flickr_badge_wrapper">     

<?php 
/* 		<script 
			type="text/javascript" 
			src="http://www.flickr.com/badge_code_v2.gne?count=10&display=latest&size=m&layout=x&source=user_set&set=72157665209061676">
		</script>
 */
echo gen_badges();
?>
	</div>

</div>


</center>


<?

function gen_badges(){

	$albums = [72157665209061676 , 72157666096112713,72157667449566700];
	rsort($albums);
	foreach($albums as $set)
		$script .= "<script type='text/javascript' src='http://www.flickr.com/badge_code_v2.gne?".
			"count=10&display=latest&size=m&layout=x&source=user_set&set=$set'></script>";
	return $script;
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
