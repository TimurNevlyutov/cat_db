<?php
	//Проверяем зашел ли пользователь
if($user === false){
	echo '<h3 class="alert alert-danger" role="alert">You are not logged in!</h3>'."\n";
}
if($user === true) {
	header("Location: http://catocadb/views/main.php");
}
?>