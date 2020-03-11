<?php
// Файлы phpmailer
require 'class.phpmailer.php';
require 'class.smtp.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$subject = "Заявка на обратный звонок(nasosy-vakuumnye.ru)";

// Настройки
$mail = new PHPMailer;

$mail->isSMTP(); 
$mail->Host = 'smtp.mail.ru';  
$mail->SMTPAuth = true;                      
$mail->Username = 'gtksnab'; // Ваш логин в Яндексе. Именно логин, без @yandex.ru
$mail->Password = 'Sanshez123gtk123456'; // Ваш пароль
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465;
$mail->CharSet = "UTF-8"; // кодировка
$mail->setFrom('gtksnab@mail.ru'); // Ваш Email
$mail->addAddress('gtksnab@mail.ru'); // Email получателя
                                 
// Письмо
$mail->isHTML(true); 
$mail->Subject = "$subject"; // Заголовок письма
$mail->Body    = "Заявка на обратный звонок, отправлено с сайта nasosy-vakuumnye.ru <br>Имя: $name<br> Телефон: $phone<br> "; // Текст письма

// Результат
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'ok';
}
?>