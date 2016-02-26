<?php
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
try{
	ini_set("SMTP", "smtp.gmail.com");
    ini_set("sendmail_from", "kuanchenglai@gmail.com");

	echo 'Running';
	$success = mail("kuanchenglai@gmail.com","My subject",$msg);
	echo $success;
	echo 'Fininshed';
} catch (Exception $e) {
	echo 'Caught exception: ',  $e->getMessage(), "\n";

}
?>