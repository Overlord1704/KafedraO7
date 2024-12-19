<?php
	//print_r($_POST);
	$email = $_POST['subscribe-email'];
	
	$error = '';
	if(trim($email)=='')
		$error = 'Введите ваш email';
	
	if ($error != '')
	{
		echo $error;
		exit;
	}
	
	$conn = mysqli_connect('localhost','vladi2ks_kafedra','vladi2ks_kafedra123','vladi2ks_kafedra');
	$stmt = $conn->prepare("SELECT * FROM subcribers WHERE email = '$email'");
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0)
    {
        header("Location: index.php?status=sub-already");
    } else
    {
        if (!$conn){
    		die('Ошибка'.mysqli_error());
    	}
    	$sql = "INSERT INTO subcribers (email) VALUES ('$email')";
    
        if ($conn->query($sql) === TRUE) {
            header("Location: index.php?status=sub-added");
        } else {
            header("Location: index.php?status=sub-error");
        }
    }
    
	$stmt->close();
    $conn->close();
?>