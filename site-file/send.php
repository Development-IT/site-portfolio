<?php

// Вывод ошибок PHP

ini_set('log_errors', 'On');
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_log', '/site-file/php_errors.log');

// подключение библиотеки PHPMailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

// Получение переменных из формы обратной связи

$name = $_POST['formname']; 
$phone = $_POST['formphone'];
$email = $_POST['formemail'];
$site = $_POST['formsite'];
$about = $_POST['formabout'];
$msg = '';

// Отправка письма через SMTP выбранного почтового ящика
if (array_key_exists('file', $_FILES)) {
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.beget.com';
$mail->SMTPAuth = true;
$mail->Username = 'test@beget.com'; // логин от вашей почты, c которой будет отправка
$mail->Password = 'password'; // пароль данного почтового ящика
$mail->SMTPSecure = 'ssl';
$mail->Port = '465';
$mail->CharSet = 'UTF-8';
$mail->From = 'test@beget.com'; // адрес почты, с которой идет отправка
$mail->FromName = ''.$name.''; // имя отправителя
$mail->addAddress('pohta@mail.ru');  // Ваша почта на которую придёт письмо

$mail->isHTML(true);
$mail->Subject = "Новая заявка $name";
$mail->Body = "Имя: $name <br>Телефон: $phone <br>E-mail: $email <br>Сай: $ssite <br> Сообщение: $about";
// Загрузка и прикрепление файла к письму
 for ($ct = 0; $ct < count($_FILES['file']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), hash('sha256', $_FILES['file']['name'][$ct]));
        $filename = $_FILES['file']['name'][$ct];
        if (move_uploaded_file($_FILES['file']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Файл не загружен' . $uploadfile;
        }
    }
if(!$mail->send()) {
 echo "Письмо не отправлено.";
 echo "Ошибка отправки письма: " . $mail->ErrorInfo;
}
 else {
 header("Location:thank-you.php");
}
}
?>