<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Кафедра О7</title>
  <link rel="stylesheet" href="css/styles.css">
  <script>
        function updateText(userName) {
            const userInfoElement = document.getElementById("user-info");
            const sendNewsButton = document.getElementById("send-news-button");
            
            console.log(userName);
            
            if (userName) {
                userInfoElement.innerText = userName; 
            }
            
            // Проверяем, является ли userName "admin"
            if (userName === "admin") {
                sendNewsButton.style.display = "block"; 
            } else {
                sendNewsButton.style.display = "none";
            }
        }

    </script>
</head>
<body>
	<header>
		<div class="header-content" background-image: url('headwall.jpg')>
			<div class="image-dir">
				<img src="css/O7.jpg" class="image" alt="Логотип кафедры О7">
			</div>
			<div class="text">
				<h1>Информационные технологии и программная инженерия</h1>
			</div>
		</div>
		<nav class="head-ssylki">
			<div class="nav-links">
				<a href="prepodi.php" class="smooth-transition">Преподавательский состав</a>
				<a href="contacts.php" class="smooth-transition">Контакты</a>
			</div>
			<div class="nav-buttons">
				<a href="sendnews.php" class="button" id="send-news-button" style="display:none;">Отправить новость</a>
				<a href="registration.php" class="button" id="user-info">РЕГИСТРАЦИЯ</a>
			</div>
		</nav>
	</header>
	<main>
		<div class="history">
			<h2>Перспективы выпускников кафедры О7: востребованные специалисты в области IT</h2>
			<p>Начиная с 1995 г кафедра стала выпускающей по специальности «Автоматизированные
			системы обработки информации и управления», а с 2000 г – еще и по специальности
			«Информационные системы и технологии». Проводилась подготовка инженеров для 
			проектирования и создания современных автоматизированных и информационных систем,
			построенных на основе технических и программных средств персональных компьютеров
			и сетевых технологий. На кафедре образована государственная аттестационная комиссия
			по защите ВКР бакалавров и магистерских диссертаций по направлениям подготовки 
			кафедры. Постоянно проводятся научные исследования по заказу Министерства образования
			и науки РФ, НИР, поддержанные грантами, а также хоздоговорные НИР по научным 
			направлениям кафедры. Объектами профессиональной деятельности выпускников 
			кафедры являются следующие направления:</p>
			<ul>
				<li>Технологии разработки программного обеспечения</li>
				<li>Информационная безопасность и интернет-технологии</li>
				<li>Разработка трансляторов искусственных языков</li>
				<li>Разработка пользовательского интерфейса</li>
				<li>Системы искусственного интеллекта</li>
				<li>Проектирование архитектуры программных средств</li>
			</ul>
		</div>
		<div class="spec">
			<h2>Профильные направления подготовки и специальности Кафедры О7 «Информационные системы и программная инженерия»</h2>
			<p>Современные и востребованные на рынке труда специальности и направления подготовки, которые будут актуальны в течение ближайшего времени, помогут построить успешную карьеру в сфере информационных технологий и создадут успешный трамплин для будущих свершений.</p>
			<div class="spec_ssylki">
				<div class="tile">
					<a href="specialnosti/projinj.html">
						<img src="css/Spec/1.jpg" alt="Программная инженерия">
						<div class="tile-text">Программная инженерия</div>
					</a>
				</div>
				<div class="tile">
					<a href="specialnosti/infbez.html">
						<img src="css/Spec/2.png" alt="Информационная безопасность">
						<div class="tile-text">Информационная безопасность</div>
					</a>
				</div>
				<div class="tile">
					<a href="specialnosti/tehrazinfis.html">
						<img src="css/Spec/3.png" alt="Технологии разработки информационных систем">
						<div class="tile-text">Технологии разработки информационных систем</div>
					</a>
				</div>
				<div class="tile">
					<a href="specialnosti/procimet.html">
						<img src="css/Spec/4.jpg" alt="Процессы и методы разработки программных продуктов">
						<div class="tile-text">Процессы и методы разработки программных продуктов</div>
					</a>
				</div>
				<div class="tile">
					<a href="specialnosti/procimetprog.html">
						<img src="css/Spec/5.jpg" alt="Процессы и методы разработки программного обеспечения">
						<div class="tile-text">Процессы и методы разработки программного обеспечения</div>
					</a>
				</div>
				<div class="tile">
					<a href="specialnosti/infizupsis.html">
						<img src="css/Spec/6.jpg" alt="Информационно-измерительные и управляющие системы">
						<div class="tile-text">Информационно-измерительные и управляющие системы</div>
					</a>
				</div>
			</div>
		</div>
		<section id="subscribe">
			<h2>Подписка на новости</h2>
			<form id="subscribe-form" action="check.php" method="post">
				<label for="subscribe-email">Email:</label>
				<input type="email" id="subscribe-email" name="subscribe-email" required>
				<button type="submit">Подписаться</button>
			</form>
			<?php
    			
			    if (isset($_GET['status']) && $_GET['status'] == 'sub-added') {
                echo "<p style='color: green;'>Вы подписаны на новости!</p>";
                } else if  (isset($_GET['status']) && $_GET['status'] == 'sub-already')
                {
                    echo "<p style='color: orange;'>Вы уже подписаны!</p>";
                } else if (isset($_GET['status']) && $_GET['status'] == 'sub-error')
                {
                    echo 'Ошибка';
                } else if (isset($_GET['status']) && ($_GET['status'] == 'user-added' || $_GET['status'] == 'password-yes'))
                {
                    $conn = mysqli_connect('localhost', 'vladi2ks_kafedra', 'vladi2ks_kafedra123', 'vladi2ks_kafedra');

                    // Проверка подключения
                    if (!$conn) {
                        die("Ошибка подключения: " . mysqli_connect_error());
                    }
                
                    
                    $sql = "SELECT name FROM active_user WHERE id = 1";
                    $stmt = $conn->prepare($sql);
                    
                    
                    if (!$stmt) {
                        die("Ошибка подготовки запроса: " . $conn->error);
                    }
                    
                    $stmt->execute();
                
                    
                    $result = $stmt->get_result();
                
                    
                    if ($result->num_rows > 0) {
                        
                        $row = $result->fetch_assoc();
                        $name = $row['name']; // значение name
                
                        
                        echo "<script>updateText('$name');</script>";
                    } else {
                        echo "<script>updateText('РЕГИСТРАЦИЯ');</script>";
                    }
                
                    
                    $stmt->close();
                    $conn->close();
                 }
            ?>
		</section>
	</main>
</body>
</html>

