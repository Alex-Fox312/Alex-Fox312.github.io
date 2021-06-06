<?php
$msgs = [];
  if (isset($_POST['name']) ) {
        if(empty($_POST['name']) && NAMEISREQUIRED) {
            $msgs['name'] = MSGSNAMEERROR;
        } else {
            if (!empty($_POST['name'])) {
                $name = "<b>Имя: </b>" . trim(strip_tags($_POST['name'])) . "<br>";
            }
             
        }
    }
 
    if (isset($_POST['tel']) ) {
        if(empty($_POST['tel']) && TELISREQUIRED) {
            $msgs['tel'] = MSGSTELERROR;
        } else {
            if (!empty($_POST['tel'])) {
                $tel = "<b>Телефон: </b> " . trim(strip_tags($_POST['tel'])) . "<br>";
            }
        }
    }
 
   
     
    if((empty($_POST['tel'])) && (!TELISREQUIRED)) {
        $msgs['attantion'] = 'Заполните форму для связи с вами';
    }
 
    if ($msgs) {
      echo json_encode($msgs);
      die;
    } else {
      $msgs['success'] = MSGSSUCCESS;
    }
