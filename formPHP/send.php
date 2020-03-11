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

$date = date('d.m.y H:i:s');

$ip = $_SERVER["REMOTE_ADDR"];;


$user_agent = $_SERVER["HTTP_USER_AGENT"];
 if (strpos($user_agent, "Firefox") !== false) $browser = "Firefox";
 elseif (strpos($user_agent, "Opera") !== false) $browser = "Opera";
 elseif (strpos($user_agent, "Chrome") !== false) $browser = "Chrome";
 elseif (strpos($user_agent, "MSIE") !== false) $browser = "Internet Explorer";
 elseif (strpos($user_agent, "Safari") !== false) $browser = "Safari";
 else $browser = "Неизвестный";


 $client  = @$_SERVER['HTTP_CLIENT_IP'];
 $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
 $remote  = @$_SERVER['REMOTE_ADDR'];
 $result  = array('country'=>'', 'city'=>'');
  
 if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
 elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
 else $ip = $remote;
  
 $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));    
 if($ip_data && $ip_data->geoplugin_countryName != null) {
     $result = $ip_data->geoplugin_countryName;
     $result1 = $ip_data->geoplugin_regionName;

 }

  

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
// Письмо
$mail->isHTML(true); 
$mail->Subject = "$subject"; // Заголовок письма
$mail->Body    = "<!DOCTYPE html>
<html>
<head>

<meta name='viewport' content='width=device-width' />
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

<title>nasosy-vakuumnye.ru email</title>

</head>
 
<body bgcolor='#FFFFFF' topmargin='0' leftmargin='0' marginheight='0' marginwidth='0' style='-webkit-font-smoothing:antialiased; 
    -webkit-text-size-adjust:none; width: 100%!important; height: 100%;'>

<!-- HEADER -->
<table class='head-wrap' bgcolor='#252525' width='100%'>
    <tr>
        <td></td>
        <td class='header container' style='display:block!important; max-width:600px!important; margin:0 auto!important; clear:both!important;'>
            
            <!-- /content -->
            <div class='content' style='padding:15px; max-width:600px; margin:0 auto; display:block;'>
                <table bgcolor='#252525' width='100%'>
                    <tr>
                        <td><img src='http://nasosy-vakuumnye.ru/img/logo.png' / width='100px'></td>
                        <td align='right'><h6 class='collapse collapse-24343' style='font-weight: 900; font-size: 14px; text-transform: uppercase;color: #FFF; margin:0; padding:0; '>nasosy-vakuumnye.ru</h6></td>
                    </tr>
                </table>
            </div><!-- /content -->
            
        </td>
        <td></td>
    </tr>
</table><!-- /HEADER -->

<!-- BODY -->
<table class='body-wrap' width='100%'>
    <tr>
        <td></td>
        <td class='container' style='display:block!important;
    max-width:600px!important;
    margin:0 auto!important; clear:both!important;' bgcolor='#FFFFFF' >
            
            <!-- content -->
            <div class='content' style='padding:15px; max-width:600px; margin:0 auto; display:block;'>
                <table width='100%'>
                    <tr>
                        <td>
                            <h1 class='fsize-2323' style='font-size:26px; font-weight:bold; margin-bottom: 10px'>Обращение с сайта [nasosy-vakuumnye.ru]</h1>
                            <p class='lead lh-34134' style='line-height: 1.4; margin-top: 0'>Сообщение было сформированно и отправлено в <b>$date</b></p>
                            
                            <!-- A Real Hero (and a real human being) -->
                            <p><img style='max-width: 100%;'  src='http://nasosy-vakuumnye.ru/img/email-delivery.jpg' /></p><!-- /hero -->
                        </td>
                    </tr>
                </table>
            </div><!-- /content -->

            <div class='content content-43' style='padding-bottom: 0; margin-bottom: 0;'>
                <table width='100%'>
                    <tr>
                        <td><h4 class='tti-745225' style='font-size:22px; font-weight:bold; margin: 0;'>Информация о пользователе:</h4></td>
                    </tr>
                </table>
            </div>  

            <div class='content' style='padding:15px; max-width:600px; margin:0 auto; display:block;'>
                <table class='ds-456346' width='100%' style='border: solid 1px #e4e6f3; border-collapse: collapse;'>
                    <tr class='tti-d435d2' style='padding: 15px;'  bgcolor='#f4f5fb'>
                        <td class='egr4-544' width='25%' style='padding: 5px; border: solid 1px #e4e6f3;'><b>Имя:</b></td>
                        <td style='padding: 5px; border: solid 1px #e4e6f3;'>$name</td>
                    </tr>
                    <tr class='tti-d435d2' style='padding: 15px;'>
                        <td class='egr4-544' width='25%' style='padding: 5px; border: solid 1px #e4e6f3;'><b>Телефон:</b></td>
                        <td style='padding: 5px; border: solid 1px #e4e6f3;'>$phone</td>
                    </tr>
                    <tr class='tti-d435d2' style='padding: 15px;'  bgcolor='#f4f5fb'>
                        <td class='egr4-544' width='25%' style='padding: 5px; border: solid 1px #e4e6f3;'><b>Email:</b></td>
                        <td style='padding: 5px; border: solid 1px #e4e6f3;'>$email</td>
                    </tr>
                    <tr class='tti-d435d2' style='padding: 15px;'>
                        <td class='egr4-544' width='25%' style='padding: 5px; border: solid 1px #e4e6f3;'><b>Город:</b></td>
                        <td style='padding: 5px; border: solid 1px #e4e6f3;'>$city</td>
                    </tr>
                    <tr class='tti-d435d2' style='padding: 15px;' bgcolor='#f4f5fb'>
                        <td class='egr4-544' width='25%' style='padding: 5px; border: solid 1px #e4e6f3;'><b>Компания:</b></td>
                        <td style='padding: 5px; border: solid 1px #e4e6f3;'>$firm</td>
                    </tr>
                    <tr class='tti-d435d2' style='padding: 15px;'>
                        <td class='egr4-544' width='25%' style='padding: 5px; border: solid 1px #e4e6f3;'><b>Тема письма:</b></td>
                        <td style='padding: 5px; border: solid 1px #e4e6f3;'>$subject</td>
                    </tr>
                </table>
            </div>

            <div class='content content-43' style='padding-bottom: 0; margin-bottom: 0;'>
                <table width='100%'>
                    <tr>
                        <td><h4 class='tti-745225' style='font-size:22px; font-weight:bold; margin-bottom: 0;'>Текст письма:</h4></td>
                    </tr>
                </table>
            </div>  

            <div class='content content-43' style='padding:15px; max-width:600px; margin:0 auto; display:block;'>
                <table  width='100%' class='fdgd-54-d2' style='border: solid 1px #e4e6f3; border-collapse: collapse; padding: 10px;'>
                    <tr bgcolor='#f4f5fb'>
                        <td class='ewg54-we332 ewg54-we332-433w' style='padding: 10px;'><p style='margin: 0;
    font-size: 16px;'>$message</p></td>
                    </tr>
                </table>
            </div>  

            <div class='content content-43' style='padding-bottom: 0; margin-bottom: 0; margin-top:30px;'>
                <table width='100%'>
                    <tr>
                        <td><h4 class='tti-745225' style='font-size:22px; font-weight:bold; margin: 0;'>Дополнительная информация:</h4></td>
                    </tr>
                </table>
            </div>  

            <div class='content' style='padding:15px; max-width:600px; margin:0 auto; display:block;'>
                <table class='ds-456346' width='100%' style='border: solid 1px #e4e6f3; border-collapse: collapse;'>
                    <tr class='tti-d435d2' style='padding: 15px;'  bgcolor='#f4f5fb'>
                        <td class='egr4-544' width='25%' style='padding: 5px; border: solid 1px #e4e6f3;'><b>IP адрес пользователя:</b></td>
                        <td style='padding: 5px; border: solid 1px #e4e6f3;'>$ip</td>
                    </tr>
                    <tr class='tti-d435d2' style='padding: 15px;'>
                        <td class='egr4-544' width='25%' style='padding: 5px; border: solid 1px #e4e6f3;'><b>Браузер пользователя:</b></td>
                        <td style='padding: 5px; border: solid 1px #e4e6f3;'>$browser</td>
                    </tr>
                    <tr class='tti-d435d2' style='padding: 15px;'>
                        <td class='egr4-544' width='25%' style='padding: 5px; border: solid 1px #e4e6f3;'><b>Страна:</b></td>
                        <td style='padding: 5px; border: solid 1px #e4e6f3;'>$result</td>
                    </tr>
                    <tr class='tti-d435d2' style='padding: 15px;'>
                        <td class='egr4-544' width='25%' style='padding: 5px; border: solid 1px #e4e6f3;'><b>Регион:</b></td>
                        <td style='padding: 5px; border: solid 1px #e4e6f3;'>$result1</td>
                    </tr>
                </table>
            </div>

        </td>
        <td></td>
    </tr>
</table><!-- /BODY -->

<!-- FOOTER -->
<table class='footer-wrap' width='100%' style='clear:both!important;'>
    <tr>
        <td></td>
        <td class='container' style='display:block!important;
    max-width:600px!important;
    margin:0 auto!important; clear:both!important;'>
            
                <!-- content -->
                <div class='content' style='padding:15px; max-width:600px; margin:0 auto; display:block;'>
                    <table  width='100%' class='politik-reger5-5454' style='padding-top: 10px;'>
                        <tr>
                            <td>
                                <p>Пользователь дает свое согласие на обработку персональных данных в соответствии с законом №152-ФЗ «О персональных данных» от 27.07.2006 и принимает условия Политики конфиденциальности персональных данных.</p>
                            </td>
                        </tr>
                    </table>
                </div><!-- /content -->

                <!-- content -->
                <div class='content' style='padding:15px; max-width:600px; margin:0 auto; display:block;'>
                    <table width='100%'>
                        <tr>
                            <td align='center'>
                                <p>
                                    <a style='color: #2BA6CB;' href='http://nasosy-vakuumnye.ru/politika'>Политика конфиденциальности</a> |
                                    <a style='color: #2BA6CB;' href='http://nasosy-vakuumnye.ru/'>Сайт обращения</a>
                                </p>
                            </td>
                        </tr>
                    </table>
                </div><!-- /content -->
                
        </td>
        <td></td>
    </tr>
</table><!-- /FOOTER -->

</body>
</html>



"; // Текст письма

// Результат
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'ok';
}
?>