<?php
	$name = $_POST['username'];
	$password = $_POST['password'];
	
	$conn = mysqli_connect('localhost','vladi2ks_kafedra','vladi2ks_kafedra123','vladi2ks_kafedra');
	$stmt = $conn->prepare("SELECT * FROM users WHERE name = '$name'");
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        // Получаем данные пользователя
        $user = $result->fetch_assoc();

        // Проверка пароля
        if ($password == $user['password']) 
        {
            $sql = "UPDATE active_user SET name = '$name' WHERE id = 1";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            header("Location: index.php?status=password-yes");
            exit();
        } else 
        {
            // Пароль неверный
            header("Location: index.php?status=password-no");
            exit();
        }
    } else 
    {
        header("Location: index.php?status=login-no");
    }
    
    $stmt->close();
    $conn->close();
?>