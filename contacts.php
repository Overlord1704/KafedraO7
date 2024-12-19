<html>
<title>Кафедра О7</title>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/styles.css">
	<script src="js/button-back.js" defer></script>
	<style>
    	    .button {
        background-color: green;
        padding: 10px 15px;
        border-radius: 5px;
        color: black;
        text-transform: uppercase;
        transition: background-color 0.3s;
    }
    
    .button:hover {
        color: white;
        background-color: #69b6bd;
    }

	</style>

</head>
<body>
	<p>Телефон: +7 (812) 495-76-20</p>
	<p>Почта: admission@voenmeh.ru</p>
	<p>Адрес главного корпуса: Санкт-Петербург, ул. 1-я Красноармейская, д.1</p>
	<p>Лабораторный корпус: Санкт-Петербург, ул. 1-я Красноармейская, д. 13</p>
	
	<section id="feedback">
	    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae410ee361416f2e63c9f11216f008af561bed880e2ea25158233e4e7506c2293&amp;width=951&amp;height=516&amp;lang=ru_RU&amp;scroll=true"></script>
		<h2>Обратная связь</h2>
		<form id="feedback-form" action="feedback.php" method="post">
			<label for="subscribe-email">Название:</label>
			<input type="text" id="subscribe-email" name="title" required>
			<label for="message">Сообщение:</label>
			<textarea id="text" name="message" required></textarea>
			<button type="submit">Отправить</button>
		</form>
    	<button class="button" onclick="goBack()">Назад</button>
	<div id="feedback-response">
	    <?php
            // Проверяем наличие сообщения в сессии
            if (isset($_GET['status']) && $_GET['status'] == 'success') {
                echo "<p style='color: green;'>Письмо отправлено успешно!</p>";
            }
        ?>
	</div>
</section>
	</body>
</html>