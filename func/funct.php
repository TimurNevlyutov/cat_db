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
 ?>
