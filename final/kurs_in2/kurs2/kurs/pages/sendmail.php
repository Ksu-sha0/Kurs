<?php
// Файлы phpmailer
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';
require '../phpmailer/src/Exception.php';

$my_login = 'katrykova2002@yandex.ru';
$my_password = 'kiuxvmmvoqdlldxl';

$email = "test111121@yandex.ru";

// Формирование самого письма
$title = "Данные с формы";
$body = '<h2>Привет</h2>';

if (trim(!empty($_POST['name']))) {
    $body .= '<p><strong>Имя:</strong> ' . $_POST['name'] . '</p>';
}
if (trim(!empty($_POST['tel']))) {
    $body .= '<p><strong>Телефон:</strong> ' . $_POST['tel'] . '</p>';
}
if (trim(!empty($_POST['email']))) {
    $body .= '<p><strong>E-mail:</strong> ' . $_POST['email'] . '</p>';
}
if (trim(!empty($_POST['message']))) {
    $body .= '<p><strong>Комментарий:</strong> ' . $_POST['message'] . '</p>';
}

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth = true;
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = function ($str, $level) {
        $GLOBALS['status'][] = $str;
    };

    // Настройки вашей почты
    $mail->Host = 'smtp.yandex.ru'; // SMTP сервера вашей почты
    $mail->Username = $my_login; // Логин на почте
    $mail->Password = $my_password; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom($my_login, 'Курсач'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress($email);

    // Отправка сообщения
    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body = $body;

    // Проверяем отравленность сообщения
    if ($mail->send()) {
        $email_result = "Данные успешно отправлены";
    } else {
        $email_result = "Ошибка";
    }
} catch (Exception $e) {
    $email_result = "Ошибка";
}

$response = ['message' => $email_result];

header('Content-type: application/json');
echo json_encode($response);

?>

