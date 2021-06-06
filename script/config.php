<?

// Имя
 const NAMEISREQUIRED = true;
 const MSGSNAMEERROR = "Поле обязательно для заполнения";

 // Телефон
 const TELISREQUIRED = false;
 const MSGSTELERROR = "Поле обязательно для заполнения";

 // Сообщение об успешной отправке
 const MSGSSUCCESS = "Сообщение успешно отправлено";

 // *** SMTP *** //

   require_once($_SERVER['DOCUMENT_ROOT'] . '/mail/phpmailer/smtp.php');
   const HOST = 'ssl://smtp.ukr.net';
   const LOGIN = 'membranna-pokrivlya@ukr.net';
   const PASS = 'senderPass';
   const PORT = '465 ';

 // *** /SMTP *** //

       // Почта с которой будет приходить письмо
 const SENDER = 'membranna-pokrivlya@ukr.net';
  
 // Почта на которую будет приходить письмо
 const CATCHER = 'membranna-pokrivlya@ukr.net';
  
 // Тема письма
 const SUBJECT = 'Заявка с сайта';
  
 // Кодировка
 const CHARSET = 'UTF-8';