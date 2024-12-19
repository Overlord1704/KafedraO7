<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
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
    <h2>Авторизация</h2>
    <form id="authForm" action="login-back.php" method="post">
        <label for="username">Имя пользователя:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit">Войти</button>
        
    </form>
    <button class="button-back" onclick="goBack()">Назад</button>
    <div id="message"></div>
    <p>Нет аккаунта? <a href="registration.php">Зарегистрироваться</a></p> <!-- Ссылка на страницу регистрации -->
</body>
</html>
