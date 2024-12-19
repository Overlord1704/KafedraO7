<head>
    <meta charset="UTF-8">
    <title>Отправка новостей</title>
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
    <h1>Отправить новость</h1>
    <form id="newsForm" action="sendnews-back.php" method="post">
        <label for="title">Заголовок:</label>
        <input type="text" id="title" name="title" required>
        <br>
        <label for="content">Содержание:</label>
        <textarea id="content" name="content" required></textarea>
        <br>
        <button type="submit">Отправить новость</button>
         
        <?php
        if (isset($_GET['status']) && $_GET['status'] == 'email-send') {
                echo "<p style='color: green;'>Письма отправлены!</p>";
                }
        ?>
    </form>
    <button class="button-back" onclick="goBack()">Назад</button>
    <div id="responseMessage"></div>
</body>
</html>