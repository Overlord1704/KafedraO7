<?php
	$conn = mysqli_connect('localhost','vladi2ks','vladi2ks_kafedra123','vladi2ks_kafedra');
	if (!$conn){
		die('Ошибка'.mysqli_error());
	}
	echo 'Подключились к базе';
	$result = mysqli_query($conn,'SELECT * FROM subcribers');
	$row = mysqli_fetch_row($result);
	echo "id: " .$row[0] . "<br>\n";
	echo "name: " . $row[1];
	mysqli_close($conn);
?>