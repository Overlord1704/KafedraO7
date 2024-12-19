<?php
	$title = $_POST['title'];
	$message = $_POST['message'];
	
    error_reporting(E_ALL);
    ini_set('display_errors', true);
    ini_set('error_reporting',  E_ALL); 
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require $_SERVER['DOCUMENT_ROOT'].'/PHPMailer/src/Exception.php';
    require $_SERVER['DOCUMENT_ROOT'].'/PHPMailer/src/PHPMailer.php';
    
    
    $mail = new PHPMailer;
    $mail->setFrom('Kafedrao7@vladi2ks.beget.tech', 'KafedraO7');
    $mail->addAddress('testacc1935@mail.ru', ''); // куда отправить письмо, укажите нужный email
    $mail->CharSet = 'UTF-8';
    $mail->Subject  = $title;
    $mail->Body     = $message; 
    $mail->IsHTML(true);
  
    
    
    $mail->DKIM_domain = 'vladi2ks.beget.tech';
    $mail->DKIM_private = $_SERVER['DOCUMENT_ROOT'].'/dkim_private.pem';
    $mail->DKIM_selector = 'mail';
    $mail->DKIM_identity = $mail->From;
    
    if (!$mail->send()) {
     echo 'Ошибка: '. $mail->ErrorInfo;
    }
    
    header("Location: contacts.php?status=success");
?>