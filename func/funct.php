 <?php

 
  /**функция вывода ошибок
  * @param array  $data
  */
 function showErrorMessage($data)
 {
    $err = '<ul class="alert alert-danger" role="alert">'."\n";	
	
	if(is_array($data))
	{
		foreach($data as $val)
			$err .= '<li style="color:#721C24;">'. $val .'</li>'."\n";
	}
	else
		$err .= '<li style="color:#721C24;">'. $data .'</li>'."\n";
    
	$err .= '</ul>'."\n";
    
    return $err;
 }

 /**Простой генератор соли
 * @param string  $sql
 */
 function salt()
 {
	$salt = substr(md5(uniqid()), -8);
	return $salt;
 }

/**дерево директории ПРОВЕРИТЬ*/
  function showTree($folder, $space) {
    /* Получаем полный список файлов и каталогов внутри $folder */
    $files = scandir($folder);
    foreach($files as $file) {
      /* Отбрасываем текущий и родительский каталог */
      if (($file == '.') || ($file == '..')) continue;
      $f0 = $folder.'/'.$file; //Получаем полный путь к файлу
      /* Если это директория */
      if (is_dir($f0)) {
        /* Выводим, делая заданный отступ, название директории */
        echo $space.$file."<br />";
        /* С помощью рекурсии выводим содержимое полученной директории */
        showTree($f0, $space.'&nbsp;&nbsp;');
      }
      /* Если это файл, то просто выводим название файла */
      else echo $space.$file."<br />";
    }
  }
  /* Запускаем функцию для текущего каталога */
  showTree("./", "");

 ?>
