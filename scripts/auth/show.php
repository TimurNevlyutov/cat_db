<?php

 //Проверяем зашел ли пользователь
 if($user === false){
 	echo '<h3>Доступ закрыт, Вы не вошли в систему!</h3>'."\n";
 }
 if($user === true) {
	echo '<h3>Поздравляю, Вы вошли в систему!</h3>'."\n";
	echo '<a href="'.CAT_HOST.'?mode=auth&exit=true">ВЫЙТИ</a>';
 }
 ?>
	