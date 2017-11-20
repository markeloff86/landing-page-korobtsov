<?php

$sendto   = "markeloffds@gmail.com"; // почта, на которую будет приходить письмо
$username = $_POST['name'];   // сохраняем в переменную данные полученные из поля c именем
$usertel = $_POST['telephone']; // сохраняем в переменную данные полученные из поля c телефонным номером
$usercelebration = $_POST['celebration'];
$userdate = $_POST['requestDate'];

// Формирование заголовка письма
$subject  = "Новая заявка";
$headers  = "From: " . strip_tags($username) . "\r\n";
$headers .= "Reply-To: ". strip_tags($username) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Cообщение с сайта</h2>\r\n";
$msg .= "<p><strong>От кого:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$usertel."</p>\r\n";
$msg .= "<p><strong>Дата мероприятия:</strong> ".$userdate."</p>\r\n";
$msg .= "<p><strong>Вид мероприятия:</strong> ".$usercelebration."</p>\r\n";
$msg .= "</body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
    echo "<center><p>Спасибо, мы свяжемся с Вами!</p></center>";
} else {
    echo "<center><p>Произошла ошибка, пропробуйте еще раз!</p></center>";
}

?>