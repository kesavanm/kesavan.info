<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
include_once('head.php');
print "	<table> <tr> <td >";	#PSEUDO TABLE 

include_once('books.pl.js');

#	if (!$_POST['feedback']){
?>

	<form name="contactform" method="post">
	<table >
	<tr>
	 <td valign="top">
	  <label for="first_name">First Name *</label>
	 </td>
	 <td valign="top">
	  <input  type="text" name="first_name" maxlength="50" size="30">
	 </td>
	</tr>
	<tr>
	 <td valign="top">
	  <label for="last_name">Last Name *</label>
	 </td>
	 <td valign="top">
	  <input  type="text" name="last_name" maxlength="50" size="30">
	 </td>
	</tr>
	<tr>
	 <td valign="top">
	  <label for="email">Email Address *</label>
	 </td>
	 <td valign="top">
	  <input  type="text" name="email" maxlength="80" size="30">
	  
	  <font color='green'><i>&nbsp;Not&nbsp;published.I&nbsp;love&nbsp;your&nbsp;privacy&nbsp;:)</i></font>
	 </td>
	</tr>
	<tr>
	 <td valign="top">
	  <label for="telephone">Telephone Number</label>
	 </td>
	 <td valign="top">
	  <input  type="text" name="telephone" maxlength="30" size="30"> 
	  <font color='green'><i>&nbsp;Not&nbsp;published.I&nbsp;love&nbsp;your&nbsp;privacy&nbsp;:)</i></font>
	 </td>
	</tr>
	<tr>
	 <td valign="top">
	  <label for="comments">Few words *</label>
	 </td>
	 <td valign="top">
	  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
	 </td>
	</tr>
	<tr>
	 <td colspan="2" style="text-align:center">
	  <input type="submit" value="Submit" name='feedback'>
	 </td>
	</tr>
	</table>
	</form>
<?php
#}

if(isset($_POST['email'])) {
	
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "hi@kesavan.info";
    $email_subject = "FEEDBACK on MARRIAGE";
 
    function died($error) {
        echo "I'm very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo "<font color='red'>".$error."</font>"."<br /><br />";
        echo "Please try again fix these errors.<br /><br />";
      #  die();
    }
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');      
    }
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }

	if($telephone)
	  if(!preg_match("/^[-\d]{6,15}$/",$telephone)) {
	    $error_message .= 'The Phone you entered does not appear to be valid.<br />';
	  }
	 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died( $error_message);
  }
  
  else{
    $email_message = "Form details below.\n\n";

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href","\n","\r");
      return str_replace($bad,"",$string);
    }
 
  $email_message .= "First Name: ".clean_string($first_name)."\n";
  $email_message .= "Last Name: ".clean_string($last_name)."\n";
  $email_message .= "Email: ".clean_string($email_from)."\n";
  $email_message .= "Telephone: ".clean_string($telephone)."\n";
  $email_message .= "Comments: ".clean_string($comments)."\n Add line : \n";
  $for_approval = "\"".clean_string($first_name)."\"=>\"".clean_string($last_name)."###  ###".clean_string($comments)." \",\n";
	$email_message .= $for_approval;
	
	$f = fopen('wishes.txt','a+x') ; fwrite($f,$for_approval); fclose($f);

	// create email headers
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();

	$DEBUG =0;

	if(!mail($email_to, $email_subject, $email_message, $headers)){
		echo  "Seems someone vommits in my server! \n <br>";
		if($DEBUG) echo "$email_to -- $email_subject -- $email_message -- $headers \n <br>";
	}
	else
		echo "	<span id=\"highlight\" name=\"highlight\">	Thank you for wishes. Your wish'll be posted soon here <br> Join us !</span> ";
 }	

}

if($nothing){
	;
}

///////////////// NEW VERSION ///////////////////////////
$FILE_IN = 'wishes.approved.txt';
$lines = file( $FILE_IN ,  FILE_SKIP_EMPTY_LINES  );

if(count($lines)){
	echo "<h3>Here's some words from my well wishers </h3>";  
	echo "<table ";
	
	if(preg_match('/firefox/i',$_SERVER['HTTP_USER_AGENT']) || 
		preg_match('/gecko/i',$_SERVER['HTTP_USER_AGENT'])) 
			echo "align='left' " ;
			
	echo " class=\"display\" id=\"books\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width='100%' > \n
				<thead>	<tr>
					<th>  Name </th>
					<!--
					<th> Last Name  </th>
					 <th>Email  </th>  -->
					<th> Wish </th> \n
					</tr></thead> ";

	foreach ($lines as $line_num => $line) {
		list($name , $ln_cont_wish)  = explode ('=>',$line);
		list($ln,$cont,$wsh) 	= explode ('###',$ln_cont_wish);	
	//	echo $name = ucfirst($name);
		echo "
						<tr>".
						"<td> 
					
						<b> ".ucwords(strtolower(trim($name,'"')))." ".ucwords(strtolower(trim($ln,'"')))." </b></td> ".
						// <span title='".$wsh."'>".
						//substr(trim($wsh),0,50).
						"<td>".str_replace('",','',trim($wsh,'" ,')).
						"</span></td> 
						</tr>\n"					
		;
	}
		echo 	"</table>\n";
}else echo "<h3>Be the first to wish them! </h3>";  

////////////////////END OF NEW VERSION ///////////////////
print "</td> </tr> <tr> <td> ";  include 'tail.php'; echo " </td> </table>";	#PSEUDO TABLE 
?>
