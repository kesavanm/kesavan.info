<?php 

mb_language('uni');
mb_internal_encoding('UTF-8');

function dbconn(){
        $ln = mysql_connect(MYSQLHOST,MYSQLUSER,MYSQLPSWD) or die ("Conn err:".mysql_error());
        mysql_select_db(MYSQLDB,$ln) or die ("DB err:".mysql_error());
        return $ln;
}
function gen_json(){
	include_once('config.inc');
	$sql = "SELECT bc_ad,REPLACE(startDate,'-',',')startDate,REPLACE(endDate,'-',',')endDate,headline,etext `text`, media,credit,caption FROM `tamil_history`";
	$rs = mysql_query($sql,dbconn()) or die ("Qry err:$sql".mysql_error());

	$rows = array();
	if(mysql_num_rows($rs)){
		while($row=mysql_fetch_assoc($rs)){
			$row['asset'] = array('media'=>$row['media'] , 'credit'=>$row['credit'],'caption'=>$row['caption'] , 'bc_ad'=>$row['bc_ad'] );
			if($row['bc_ad'] =='bc') $row['startDate'] = '-'.$row['startDate'] ; 
			unset($row['media'],$row['credit'],$row['caption'], $row['bc_ad']);
				switch(substr(strtok($row['headline'] , " "),0,5)){
					case 'Chola': $row['headline'] = "<font color='green'>".$row['headline']."</font>";	break;
					case 'Pandi': $row['headline'] = "<font color='grey'>".$row['headline']."</font>";  	break;
					case 'Chera': $row['headline'] = "<font color='yellow'>".$row['headline']."</font>";    break;
				}
			$rows[] = $row;
		}
		mysql_free_result($rs);
	}
	return	json_encode($rows);
}

function final_json(){

	return '{
		    "timeline":
		    {
			"headline":"History Of Dravida Kingdoms and their sites",
			"type":"default",
				"text":"People say stuff",
				"startDate":"-1000,01,01",

			"date": '.
			gen_json()	.
			'   }
		}'
		;
}

$json = "history.tamil.gen.json";
$cachetime = 000;

if(! (file_exists($json) && time() - $cachetime < filemtime($json)))
{	$fh = fopen($json,"w") ; fwrite($fh,final_json()) ;fclose($fh);}

include_once('head.php'); 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Kesavan Muthuvel's Personal Page on History Of Dravida Kingdoms and their sites </title>
    <link rel="shortcut icon" href="kesavan.png" type="image/x-icon">
    <link rel="icon" href="k7.png">

    <!-- =============== TimeLineJS STUFF ============================ -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!-- Style-->
    <style>
      html, body {
       height:100%;
       padding: 0px;
       margin: 0px;
      }
    </style>
    <!-- HTML5 shim, for IE6-8 support of HTML elements--><!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

  </head>
  <body>
      <!-- BEGIN Timeline Embed -->
      <div id="timeline-embed"></div>
      <script type="text/javascript">
        var timeline_config = {
		width: "100%",
		height: "100%",
		source:"<?=$json?>"
        }
      </script>
     <script type="text/javascript" src="jquery/TimelineJS/build/js/storyjs-embed.js"></script>
      <!-- END Timeline Embed-->

<? include('tail.php'); ?>
