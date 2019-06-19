<?
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Your feedback is important - Kesavan  </title>
    <link rel="shortcut icon" href="kesavan.png" type="image/x-icon">

<link rel="icon" href="k7.png">
  </head>
  <body>
<?
#error_reporting(E_ALL);

include('head.php');

?>
<h3>Feedback </h3>

<?php

if (!$_POST['feedback']){


list($ans,$qn) =   captcha();

if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}
$token = $_SESSION['token'];
?>

	<form name="contactform" method="post">
	<table width="450px">
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
	  <input  type="email" name="email" maxlength="80" size="30">
	 </td>
	</tr>
	<tr>
	 <td valign="top">
	  <label for="telephone">Telephone Number</label>
	 </td>
	 <td valign="top">
	  <input  type="tel" name="telephone" maxlength="30" size="30">
	 </td>
	</tr>
	<tr>
	<tr>
	 <td valign="top">
	  <label for="date">Date observed</label>
	 </td>
	 <td valign="top">
	  <input  type="date" name="date">
	 </td>
	</tr>
	<tr>
	 <td valign="top">
	  <label for="comments">Comments *</label>
	 </td>
	 <td valign="top">
	  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
	 </td>
	</tr>


  <tr>
	 <td valign="top">
	  <label for="human">Answer <?=$qn?> is </label>
	 </td>
	 <td valign="top">
	  <input name="ans" type="text" /> <font color='red'> Ignore those VOWELS ( aeiou), ie If answer is `ten` , just type `tn` </font>
	 </td>
	</tr>
<input  type="hidden" name="encans" value='<?=md5($ans)?>'  />
<input  type="hidden" name="token"  value="<?php echo $token; ?>" />


	<tr>
	 <td colspan="2" style="text-align:center">
	  <input type="submit" value="Submit" name='feedback'>
	 </td>
	</tr>
	</table>
	</form>
<?php
}
//if they DID upload a file...

if(isset($_POST['email']) && !empty($_POST['token'])) {

    function died($error) {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo "<font color='red'>".$error."</font>"."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
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


    if (!hash_equals($_SESSION['token'], $_POST['token'])) {
     // Proceed to process the form data
     died('We are sorry, but there appears to be a problem with the form you submitted :).');
    }

    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $date= $_POST['date']; // not required
    $comments = $_POST['comments']; // required

    $error_message = "";

    if(md5($_POST[ans])!=$_POST[encans]) {
      $error_message ="Confirm you're Human! Check your answer.<br />";
    }

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
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Date: $date \n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
    $email_message .= "Remote IP: ".$_REQUEST['REMOTE_ADDR']."\n";
    $email_message .= "Token: ".$_REQUEST['token']."\n";
	

	// create email headers
	$headers = 'From: '."feedback@kesavan.info"."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();

	$DEBUG =0;
  // EDIT THE 2 LINES BELOW AS REQUIRED
  $email_to = "hi@kesavan.info";
  $email_subject = "FEEDBACK KESAVAN.INFO v2";

	if(!mail($email_to, $email_subject, $email_message, $headers)){
		echo  "Seems someone vommits in my server! \n <br>";
		if($DEBUG) echo "$email_to -- $email_subject -- $email_message -- $headers \n <br>";
	}
	else
		echo "Thank you for contacting. Will be in touch with you very soon.";
 }

}
include('tail.php');


function captcha(){

  // Qns area
  $set = array("6+7###13","8-2###6","7*2###14","9-6###3","60/5###12","7*3###21","65-4###61","45-7###38",
  		"3+2###5","10+1###11","10+10###20","10+7###17","10+3###13","1+1###2","2+9###11","9+8###17","9+4###13",
  		"1+5###6","8+6###14","2+8###10","8+6###14","6+8###14","8+1###9","6+10###16","2+6###8","10+2###12","6+9###15",
  		"8+5###13","2+8###10","6+4###10","7+4###11","1+6###7","8+2###10","1+5###6","7+2###9","3+4###7","8+9###17",
  		"2+5###7","9+8###17","4+10###14","3+4###7","1+8###9","3+9###12","3+4###7","7+8###15","8+4###12","1+9###10",
  		"9+9###18","10+10###20","4+6###10","1+6###7","10+8###18","5+1###6","3+3###6","8+7###15","3+1###4","1+4###5",
  		"8+3###11","2+1###3","7+8###15","9+4###13","1+10###11","3+10###13","8+2###10","9+1###10","7+10###17",
  		"7+7###14","8+1###9","8+10###18","3+5###8","6+6###12","5+6###11","9+3###12","9+10###19","4+6###10","7+2###9",
  		"10+8###18","1+2###3","7+8###15","3+6###9","8+10###18","5+4###9","7+2###9","4+4###8","1+7###8","8+7###15",
  		"2+3###5","3+10###13","6+2###8","10+9###19","7+7###14","1+6###7","4+1###5","8+10###18","8+1###9","5+6###11",
  		"10+10###20","10+6###16","1+4###5","9+2###11","10+7###17","9+2###11","10+1###11","2+5###7","2+1###3","4+9###13","7+4###11","5+10###15",
  		"3*5###15","2*5###10","3*9###27","4*6###24","1*8###8","1*6###6","5*6###30","5*9###45","4*7###28","1*8###8",
  		"2*5###10","4*9###36","1*7###7","5*9###45","2*8###16","3*8###24","4*8###32","4*6###24","3*7###21","3*8###24",
  		"2*8###16","1*6###6","5*9###45","1*8###8","2*6###12","3*8###24","2*6###12","4*7###28","4*7###28","3*9###27",
  		"1*9###9","3*8###24","3*6###18","1*5###5","5*8###40","4*5###20","2*9###18","3*6###18","4*7###28","5*5###25",
  		"4*7###28","5*5###25","4*7###28","3*6###18","5*5###25","1*9###9","5*8###40","4*7###28","1*9###9","3*5###15","3*6###18",
  		"2*8###16","1*8###8","1*9###9","1*5###5","5*9###45","3*9###27","5*5###25","2*7###14","3*6###18","3*8###24","2*7###14",
  		"2*9###18","5*7###35","4*6###24","3*6###18","3*8###24","1*8###8","2*5###10","3*7###21","1*7###7","2*7###14","2*6###12",
  		"4*7###28","5*5###25","5*7###35","4*5###20","1*5###5","1*9###9","4*9###36","1*5###5","1*8###8","5*5###25","2*6###12",
  		"1*8###8","4*6###24","1*5###5","5*7###35","3*7###21","1*7###7","4*9###36","1*7###7","5*5###25","3*9###27","5*6###30",
  		"4*5###20","3*9###27","5*6###30","5*6###30","4*5###20"

  );

  $set = [ "eight plus one###nn", "12minus5###svn", "twenty-14###sx"];
  $rand = rand(0,count($set)-1);

  $qn_ans = explode("###",$set[$rand]);
  $ans = $qn_ans[1];
  $qn = $qn_ans[0];

  return [$ans,$qn];
}




?>
