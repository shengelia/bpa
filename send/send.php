<?php

	if(isset($_POST['submit'])){
	$to = "samira.shengelia@gmail.com";
	$from = "no-reply@chingiz.az";
 
	/* Указываем переменные, в которые будет записываться информация с формы */
	$first_name = $_POST['first_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$subject = "Форма отправки сообщений с сайта Epic Blog";
     
	/* Проверка правильного написания e-mail адреса */
	if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
	{
		show_error("<br /> Е-mail адрес не существует");
	}
     
	/* Переменная, которая будет отправлена на почту со значениями, вводимых в поля */
	$mail_to_myemail = "Здравствуйте! 
	Было отправлено сообщение с сайта! 
	Имя отправителя: $first_name
	E-mail: $email
	Номер телефона: $phone
	Текст сообщения: $message
	Чтобы ответить на письмо, создайте новое сообщение, скопируйте электронный адрес и вставьте в поле Кому.";
     
	$headers = "From: $from \r\n";
     
	/* Отправка сообщения, с помощью функции mail() */
	mail($to, $subject, $mail_to_myemail, $headers);
	echo "Soobshenie otpravleno, " . $first_name . ", mi skoro svajemsa s vami.";
	} 
?>