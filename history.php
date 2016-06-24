<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Kesavan Muthuvel's Personal Page</title>
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
 
<?php include('head.php'); ?>


<?php

include_once('config.inc');
mb_language('uni');
mb_internal_encoding('UTF-8');


function dbconn(){
        $ln = mysql_connect(MYSQLHOST,MYSQLUSER,MYSQLPSWD) or die ("Conn err:".mysql_error());
        mysql_select_db(MYSQLDB,$ln) or die ("DB err:".mysql_error());
        return $ln;
}
function gen_json(){
	$sql = "SELECT REPLACE(startDate,'-',',')startDate,REPLACE(endDate,'-',',')endDate,headline,etext `text`, media,credit,caption FROM `km_history`";
	$rs = mysql_query($sql,dbconn()) or die ("Qry err:$sql".mysql_error());

	$rows = array();
	if(mysql_num_rows($rs)){
		while($row=mysql_fetch_assoc($rs)){
			$row['asset'] = array('media'=>$row['media'] , 'credit'=>$row['credit'],'caption'=>$row['caption']);
			unset($row['media'],$row['credit'],$row['caption']);
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
		"headline":"History of me",
		"type":"default",
			"text":"People say stuff",
			"startDate":"1983,07,07",

		"date": '.
		gen_json()	.
		'   }
	}'
	;
}

#echo final_json();

$json = "history.gen.json";
$cachetime = 18000;

if(! (file_exists($json) && time() - $cachetime < filemtime($json)))
{	$fh = fopen($json,"w") ; fwrite($fh,final_json()) ;fclose($fh);}

?>
      <!-- BEGIN Timeline Embed -->
      <div id="timeline-embed"></div>
      <script type="text/javascript">
        var timeline_config = {
		width: "100%",
		height: "100%",
		source:'history.gen.json'
        }
      </script>
     <script type="text/javascript" src="jquery/TimelineJS/build/js/storyjs-embed.js"></script>
      <!-- END Timeline Embed-->


<? include('tail.php'); ?>







