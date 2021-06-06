<?php
$fio = $_POST['fio'];
$number = $_POST['number'];
$fio = htmlspecialchars($fio);
$number = htmlspecialchars($number);
$fio = urldecode($fio);
$number = urldecode($number);
$fio = trim($fio);
$number = trim($number);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("islam747p@gmail.com", "Заявка с сайта", "ФИО:".$fio.". Number: ".$number ,"From: test@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>