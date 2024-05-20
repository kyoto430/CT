<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'PHPMailer/src/Exception.php';
  require 'PHPMailer/src/PHPMailer.php';  
  require 'PHPMailer/src/SMTP.php';  

  $mail = new PHPMailer(true);
  
  $mail->CharSet = 'UTF-8';
  $mail->setLanguage('ru', 'PHPMailer/language/');
  $mail->IsHTML(true);

  $mail->isSMTP();
  $mail->SMTPAuth = true;
  $mail->SMTPDebug = 0;

  $mail->Host = 'smtp.yandex.ru';
  $mail->SMTPSecure = 'ssl';  
  $mail->Port = 465;
  $mail->Username = 'ruslan-prakapets@yandex.ru';
  $mail->Password = 'wbuhruqalrznsqyu';

  //От кого письмо
  $mail->setFrom('ruslan-prakapets@yandex.ru', 'CT');
  //Кому отправить
  $mail->addAddress('ruslan-prakapets@yandex.ru');
  $mail->Subject = 'Новая заявка';

  //Тело письма
  $body = '<h1>У меня есть вопрос!</h1>';

  if(trim(!empty($_POST['name']))) {
    $body.='<p><strong>Имя:</strong> '.$_POST['name'].'</p>';
  }
  if(trim(!empty($_POST['phone']))) {
    $body.='<p><strong>Телефон:</strong> '.$_POST['phone'].'</p>';
  }

  $mail->Body = $body;

  //Отправляем
  if(!$mail->send()) {
    $message = 'Ошибка';
  } else {
    $message = 'Данные отправлены';
  }

  $response = ['message' => $message];

  header('Content-type: application.json');
  echo json_encode($response);
?>