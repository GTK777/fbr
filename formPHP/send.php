<?php
// Файлы phpmailer
require 'class.phpmailer.php';
require 'class.smtp.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$firm = $_POST['firm'];
$city = $_POST['city'];
$message = $_POST['message'];
$subject = $_POST['subject'];

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
$ip = $_SERVER["REMOTE_ADDR"];

// Прикрепление файлов
  for ($ct = 0; $ct < count($_FILES['userfile']['tmp_name']); $ct++) {
    $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['userfile']['name'][$ct]));
    $filename = $_FILES['userfile']['name'][$ct];
    if (move_uploaded_file($_FILES['userfile']['tmp_name'][$ct], $uploadfile)) {
        $mail->addAttachment($uploadfile, $filename);
    } else {
        $msg .= 'Failed to move file to ' . $uploadfile;
    }
}   
                                
                                 
$arrFormAn = array();

//Проверка имени
if (preg_match_all("/[a-zA-Z]+/i", $name) || preg_match_all("/\d+/i", $name) || preg_match_all("/[-_+=~!@$%^&*()<>|?!@%^&*()_+|><,.:;№\/]+/i", $name)) {
    array_push($arrFormAn, 1);
} else {
    array_push($arrFormAn, 0);
}

//Проверка телефона
if (preg_match_all("/[a-z]+/i", $phone) || preg_match_all("/[а-я]+/i", $phone) || preg_match_all("/[-_+=~!@$%^&*()<>|?!@%^&*()_+|><,.:;№\/]+/i", $name)) {
    array_push($arrFormAn, 1);
} else {
    array_push($arrFormAn, 0);
}

//Проверка компании
if (preg_match_all("/[-=~`?!#$%^&*()_+|>\<,.:;№\/]+/i", $firm)) {
    array_push($arrFormAn, 1);
} else {
    array_push($arrFormAn, 0);
}

//Проверка города
if (preg_match_all("/[a-zA-Z]+/i", $city) || preg_match_all("/\d+/i", $city) || preg_match_all("/[-_+=~!@$%^&*()<>|?!@%^&*()_+|><,.:;№\/]+/i", $city)) {
    array_push($arrFormAn, 1);
} else {
    array_push($arrFormAn, 0);
}

// Проверка сообщения
if (preg_match_all("/[><]+/", $message)) {
    array_push($arrFormAn, 1);
} else { 
    array_push($arrFormAn, 0);
}

// //Проверка email
if (preg_match_all("/[_=~`!#$%^&*()<>|\/?!#$%^&*(}{})|><,:;№]+/", $email)) {
    array_push($arrFormAn, 1);
} else { 
    array_push($arrFormAn, 0);
}

function testForm($variable) {
    if(in_array("1", $variable))  {
        $abr = false;
    } else {
        $abr = true;
    }
    return $abr;                                 
}

$pusk = testForm($arrFormAn);

if($pusk == true) {
    // Письмо
    $mail->isHTML(true); 
    $mail->Subject = "$subject"; // Заголовок письма
    $mail->Body    = "Отправлено с сайта fbr-burners.ru<br><br>Имя: $name<br> Почта: $email<br> Телефон: $phone<br> Компания: $firm<br> Город: $city<br><br> Сообщение:$message <br><br><br><br><br> <b>Если данное сообщение является спамом, то отметьте его флажком или перешлите на gtk-company@yandex.ru (IP отправителя:$ip)</b>"; // Текст письма
} else {
    echo "Error";
}

// Результат
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'ok';
}
?>
