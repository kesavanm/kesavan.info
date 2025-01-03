<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Kesavan Muthuvel's view on Thirukural </title>
    <link rel="shortcut icon" href="kesavan.png" type="image/x-icon">
	<link rel="icon" href="k7.png">
  </head>

  <body>

<? 

include('head.php');
include('books.pl.js');
include_once('vendor/kesavanm/kural-piem/kural.php');


print "<h1>குறள் PIEM</h1>";
# Thou a beautiful poem π , just at look - tiggers
# hot love, you never change great constant !
$மாதிரி = " கவிதை நீ ஆகிறாய் பை, கண்டதும்
	    காதல்தூண்டிவிடும் மாறா மாறிலிநீயடி";
$மாதிரி = $_REQUEST['piem']??$மாதிரி  ;

print "	<table> <tr> <td >";	#PSEUDO TABLE             
print '	<table align="left" width=100% class="display" id="books" cellpadding="0" cellspacing="0" border="0" >
          <thead> <tr> 
                    <th>பாடல்</th> <th>பாடல் பையமா?</th><th>விளக்கம்</th>
                   </tr>
          </thead>';
$பாடல் = new பாடல்($மாதிரி);
$wow  = $பாடல்->பாடல்_பையமா();
  if(isset($wow)){ 
    print "<tr> <td>".$பாடல்->பாடல்_break().      "</td>";
    print "     <td>".$wow['state'].        "</td>";
    print "     <td>"; foreach($wow['log'] as $word){
    print                 $word."<br>\n";
                        }              
    print "</td>";
  }


print "    </tr>\n";
print '	</table>';
print "</table>";	#PSEUDO TABLE
?>

<form action="" method="POST">
  <h3>Check my #PIEM</h3> 
  <label for="piem"> your sample piem(max:100 words):</label>

  <textarea id="piem" name="piem" rows='5' cols='32' value="<?=$piem?>" required ></textarea>
  <input type="submit" value="Confirm my piem!"></input>
</form>

<?

$random_terms = array('அன்பு','குறள்','தேடல்','அறன்','காதல்','உலகு','அணங்கு','நெஞ்சு','அறிவு','ஒளி','களவி','ஓசை','சுவை','மாதர்','பொருள்');
$random_search = $random_terms[array_rand($random_terms,1)];
$search = $_REQUEST['தேடல்']??$random_search;

?>
<hr>
<form action="" method="POST">
  <h1>குறள் தேடல்</h1> <h2> Thanks <a href='https://github.com/kesavanm/kural-piem'>kural-piem</a> </h2>
  <label for="name">வார்த்தை(1 to 24 characters):</label>

  <input type="text" id="name" name="தேடல்" value="<?=$search?>" required
        minlength="1" maxlength="24" size="16"></input>
  <input type="submit" value="Search குறள்"></input>
  <style>
      label {
          display: block;
          font: 1rem 'Fira Sans', sans-serif;
      }
      input,
      label {
          margin: .4rem 0;
      }
  </style>
</form>

<?

if ($search){
  
  print "	<table> <tr> <td >";	#PSEUDO TABLE 
  print '	<table width="100%" align="left" class="display" id="books" cellpadding="0" cellspacing="0" border="0" >
          <thead> <tr> 
            <th>#</th>
            <th>குறள்</th>
          </tr></thead>';

    $குறள்கள் = file('vendor/kesavanm/kural-piem/குறள்.txt');       
    foreach($குறள்கள் as $குறள் ){
        $count++;
        $பாடல் = new பாடல்($குறள்);
        $row = $பாடல்->பாடல்_தேடல்($search)?$பாடல்->பாடல்_break():"";
        $row = preg_replace("/($search)/Ui", "<mark>$1</mark>", $row);
        print $row? "<tr>  <td> $count </td>  <td>$row</td></tr>\n":"";        
    }

    print '	</table>';

    print "</td> </tr> 
          </table>";	#PSEUDO TABLE 
    print "</body> </html>";
}

include('tail.php'); ?>
