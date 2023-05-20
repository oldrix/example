<?php
    $name = $_POST['name'];
	$phone = $_POST['phone'];
    $surname = $_POST['surname'];

	$to = "zaitseva.alina96@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $to;
	$subject = "Заявка c сайта";

	
	$msg="
    Имя: $name /n
    Телефон: $phone /n
    Телеграм: $surname"; 	
	$result=mail($to, $subject, $msg, "From: $to ");

?>

<p>Сообщение отправлено! </p>
