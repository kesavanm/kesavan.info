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
	 <td colspan="2" style="text-align:center">
	  <input type="submit" value="Submit" name='feedback'>
	 </td>
	</tr>
	</table>
	</form>
<?php
}
//if they DID upload a file...

if(isset($_POST['email'])) {
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "hi@kesavan.info";
    $email_subject = "FEEDBACK KESAVAN.INFO";
 
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
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $date= $_POST['date']; // not required
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
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Date: $telephone \n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
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
		echo "Thank you for contacting. Will be in touch with you very soon.";
 }	

}
include('tail.php'); 
?>
