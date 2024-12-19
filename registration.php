<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
	<link rel="stylesheet" href="css\styles.css">
    <script src="js/button-back.js" defer></script>
	<style>
	    .button-back {
        background-color: green;
        padding: 10px 15px;
        border-radius: 5px;
        color: black;
        text-transform: uppercase;
        transition: background-color 0.3s;
    }
    
    .button-back:hover {
        color: white;
        background-color: #69b6bd;
    }
	</style>
</head>
<body>
    <h2>Регистрация</h2>
    <form id="registrationForm" action="reg-back.php" method="post">
        <label for="username">Имя пользователя:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit">Зарегистрироваться</button>
        
        <?php
            session_start();
            if (isset($_GET['status']) && $_GET['status'] == 'users-already') {
                echo "<p style='color: black;'>Пользователь уже существует!</p>";
            } else if (isset($_GET['status']) && $_GET['status'] == 'user-error')
            {
                echo 'Ошибка';
            }
        ?>
    </form>
    <button class="button-back" onclick="goBack()">Назад</button>
    <div id="message"></div>
    <p>Уже есть аккаунт? <a href="login.php">Войти</a></p>
</body>
</html>
