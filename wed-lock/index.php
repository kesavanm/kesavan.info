<?php

if(preg_match('/(?i)msie/',$_SERVER['HTTP_USER_AGENT'])){
    // if IE<=8
		$html = '<center>
					<p>
					<br>
		
					<h2>This story is written in 
					
					<span id=\'highlight\' name=\'highlight\' >#HTML5</span> 
					
					and your browser seems hard to read that! 
					<br>I\'m sorry 
						<br> :( </h2>'.
					
					'<hr> '.
					"<p>Please use some better environment.I recommend to go with <u>Abrowser</u> on <b>
					
					<a href='http://trisquel.info/' target='_blank' >Trisquel</a> </b>
					<p>".
					"<br> You can find a better browser from <a href='https://www.mozilla.org' target='_blank'> Mozilla</a>, called <b>Firefox</b> <p> " .
					"<br> There's another (little) recommended is <a href='http://www.chromium.org' target='_blank'> Chromium </a> (  the open-source project behind the Chrome browser and Chrome OS, respectively ) <p>".
					"<br> Opera & Safari too read this story better , but I don't recommend them personally".
				
  " <p>
  	<br>
  	
  	You may interested in looking at these other version</a>	  
  	
  	<center> 
  	<p>
    Interactive Intro 
    | <span id='highlight' name='highlight' >
    <a href='../invite.php' target='_blank' data-step='1' data-intro='<br> Nerdy developer mode here!' >Developer's Version</a></span> 
    |<span id='highlight' name='highlight' >
    <a href='../invite-schema.htm' target='_blank' data-step='2' data-intro=' <br> Theres a highlevel schema here'> High level Schema </a></span>
    |<span id='highlight' name='highlight' >
    <a href='../funny.php' target='_blank' data-step='3' data-intro='<br> Here goes the real story!'>  End user's version</a> </span>

	<p>
	<br>
	
	<span id='yellow' name='yellow' >  Still Missing this Interactive Intro ? <br> At office ? <br>
		 <br>
		 
		 You may try at your <b>Android/iOS</b> . It's worth! </a> </span>
	
	
	 </center>";

  	
  	
}
else{
	header('Location:index.htm'); exit;  // if IE>8
}

/* 
	if(preg_match('/firefox/i',$_SERVER['HTTP_USER_AGENT']) || 
		preg_match('/gecko/i',$_SERVER['HTTP_USER_AGENT'])) 
	*/		
	
	?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	
	<title>Kesavan Muthuvel's Wed Lock invitation - June 01 2014 - Madurai, INDIA </title>
<style type="text/css">
body {
#background-color: #dddddd;
margin:0;
width: 100%;
height: 100%;

        margin-left:auto;
        margin-right:auto;
        
}

#highlight{
    background-color: #AFF;
    color: #000000;
}

#yellow{
    background-color: yellow;
    color: #000000;
}
</style>

		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
		<script type="text/javascript" src="http://yjl.googlecode.com/svn/trunk/JavaScript/falling_hearts.js"></script>
		



    <link href="../jquery/intro.js-0.8.0/introjs.css" rel="stylesheet">
    <script type="text/javascript" src="../jquery/intro.js-0.8.0/intro.js"></script>
     <script type="text/javascript" src="../jquery/jquery.js"></script>
</head>
<body align="center" onload="javascript:introJs().start();">
	<TABLE border=0 width="100%" height="100%"><TR><TD align="center" valign="center">
		
<?=$html ;?>	
</TD></TR></TABLE> 
<br>  <p> </p><br>  <p> </p> <br> <hr>

<i>Always update your environment for better experience!</i>
</body>

</html>
