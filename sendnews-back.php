<?php
    $title = $_POST['title'];
	$message = $_POST['content'];
	
    error_reporting(E_ALL);
    ini_set('display_errors', true);
    ini_set('error_reporting',  E_ALL); 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    
    $conn = mysqli_connect('localhost','vladi2ks_kafedra','vladi2ks_kafedra123','vladi2ks_kafedra');
    
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }
    
    $sql = "SELECT email FROM subcribers";
    $result = $conn->query($sql);
    
    // Проверяем, есть ли результаты
    if ($result->num_rows > 0) {
        // Подключаем PHPMailer 
        require $_SERVER['DOCUMENT_ROOT'].'/PHPMailer/src/Exception.php';
        require $_SERVER['DOCUMENT_ROOT'].'/PHPMailer/src/PHPMailer.php';
        
        $mail = new PHPMailer;
        $mail->setFrom('Kafedrao7@vladi2ks.beget.tech', 'KafedraO7');
        $mail->CharSet = 'UTF-8';
        $mail->Subject = $title; 
        $mail->Body = $message;
        $mail->IsHTML(true);
    
        
        $mail->DKIM_domain = 'vladi2ks.beget.tech';
        $mail->DKIM_private = $_SERVER['DOCUMENT_ROOT'].'/dkim_private.pem';
        $mail->DKIM_selector = 'mail';
        $mail->DKIM_identity = $mail->From;
    
        // Отправка почты каждому подписчику
        while ($row = $result->fetch_assoc()) {
            $mail->addAddress($row['email']); 
            
            // Отправляем почту
            if (!$mail->send()) {
                echo 'Ошибка при отправке на ' . $row['email'] . ': ' . $mail->ErrorInfo . '<br>';
            } else {
                header("Location: sendnews.php?status=email-send");
            }
            $mail->clearAddresses();
        }
    } else {
        echo "Нет подписчиков.";
    }
    
    // Закрываем соединение
    $conn->close();
?>