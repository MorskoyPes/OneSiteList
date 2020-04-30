<?php
$err_message = '';

	if (empty($_POST['name'])) {
    	$err_message .= "You did not enter a Name"."<br>";
	}
	if (empty($_POST['email'])) {
    	$err_message .= "You did not enter a Mail"."<br>";
	}
	if (empty($_POST['message'])) {
    	$err_message .= "You did not enter a Message"."<br>";
	}
echo $err_message;

if (empty($err_message)) {

$to = $_POST['email'];
$subject = $_POST['name'];
$message = $_POST['message'];
$headers = 'From: kaktyc_real_ii@mail.ru' . "\r\n" .
    'Reply-To: kaktyc_real_ii@mail.ru' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);

 echo $_POST['name'].", Message sent successfully!";
}
?>
