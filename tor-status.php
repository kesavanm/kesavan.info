<?php
	
$TOR_URI = "https://torstatus.blutmagie.de/query_export.php/Tor_query_EXPORT.csv";
$TOR_FILE = "Tor_query_EXPORT.csv";

function do_cache(){
	global $TOR_URI,$TOR_FILE;
	$filemtime = @filemtime($TOR_FILE);  					# returns FALSE if file does not exist

	if (!$filemtime or (time() - $filemtime >= 3600 )){			# Out of Cache Time
		file_put_contents($TOR_FILE, fopen($TOR_URI, 'r'));
		$msg =  "No cache avail.Getting a fresh data from Web <br></p> \n";
	}else{									# No need to refresh
		$msg = "Using Cache file. Time to expire : ".(3600 -(time()-$filemtime))." seconds<br> </p>\n";
	}
	return $msg;
}

function cal_stat($cc){
	global $stat;
	if(array_key_exists($cc,$stat))  $stat[$cc]++ ;
	else  $stat[$cc] =1;
}

function stat_tor(){
	global $TOR_FILE,$stat;
	$row = 1;
	if (($handle = fopen($TOR_FILE, "r")) !== FALSE) {
	    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		$num = count($data);
	#        echo "<p> $num fields in line $row: <br /></p>\n";
		for ($c=0; $c < $num; $c++) {
		    if( $row==1 &&  $data[$c]=="Country Code") {
			$router_col  = $c;
			continue 2;	
		    }
		}
		$row++;
		cal_stat($data[$router_col]);
	    }
	    fclose($handle);
	}
	arsort($stat);
	return $stat;
}

	$msg = 	do_cache();
	$stat = array();
	$stat2 = stat_tor();

	foreach($stat2 as $country  => $count){
		$rows .="['$country',$count],";
		$rows = rtrim($rows);
		#echo "$country	\t &nbsp; => \t\t &nbsp; $count <br> \n ";
	}
?>


<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Country Code');
        data.addColumn('number', 'Tor Nodes');
        data.addRows([	<?= $rows;?>        ]);

        // Set chart options
        var options = {'title':'Tor Node Availability',
                       'width':1400,
                       'height':980};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>

  <body>
	<?=$msg?>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>
  </body>
</html>



