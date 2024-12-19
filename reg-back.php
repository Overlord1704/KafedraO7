<?php
	$name = $_POST['username'];
	$password = $_POST['password'];
	
	$conn = mysqli_connect('localhost','vladi2ks_kafedra','vladi2ks_kafedra123','vladi2ks_kafedra');
	$stmt = $conn->prepare("SELECT * FROM users WHERE name = '$name'");
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0)
    {
        header("Location: registration.php?status=users-already");
    } else
    {
        if (!$conn){
    		die('Ошибка'.mysqli_error());
    	}
        $stmt = $conn->prepare("INSERT INTO users (name, password) VALUES ('$name', '$password')");
        if ($stmt->execute()) {
            $sql = "UPDATE active_user SET name = '$name' WHERE id = 1";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            
            header("Location: index.php?status=user-added");
            exit();
            
        } else {
            header("Location: registration.php?status=user-error");
            exit();
        }
    }
    
    $stmt->close();
    $conn->close();
?>