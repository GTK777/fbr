<?php
// Файлы phpmailer
require 'class.phpmailer.php';
require 'class.smtp.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$note = $_POST['note'];
$nameProducte = $_POST['name-producte'];
$venderCodeProducte = $_POST['vender-code-producte'];
$subject = "Новый заказ с сайта nasosy-vakuumnye.ru";

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
$mail->Body    = "Заказ на приобретение товара, отправлено с сайта nasosy-vakuumnye.ru <br>Имя: $name<br> Телефон: $phone<br> Email: $email<br> Примечание: $note<br> Наименование товара: $nameProducte<br>"; // Текст письма

// Результат
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'ok';
}
?>