<?php
$err_message = '';

	if (empty($_POST['name'])) {
    	$err_message .= "Вы не ввели Имя"."<br>";
	}
	if (empty($_POST['email'])) {
    	$err_message .= "Вы не ввели Почту"."<br>";
	}
	if (empty($_POST['message'])) {
    	$err_message .= "Вы не ввели сообщение"."<br>";
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

 echo $_POST['name'].", Сообщение успешно отправлено!"."<br><br>";
}

var_dump($_POST['name']);

?>
