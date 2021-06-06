<?php
//проверяем, существуют ли переменные в массиве POST
if(!isset($_POST['fio']) and !isset($_POST['email'])){
 ?> <form action="send.php" method="post">
<input type="text" name="fio" placeholder="Укажите ФИО" required>
<input type="text" name="number" placeholder="Укажите number" required>
<input type="submit" value="Отправить">
</form> <?php
} else {
 //показываем форму
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