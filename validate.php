<?php
	session_start();
	if ($_POST) {
		exec('luajit /var/www/request 1 '.escapeshellarg($_POST['key']), $output, $retval);	
		$_SESSION['user'] = $output[0];
		if ($retval == 0) {
			$get_info = "?status=success";
			$_SESSION['active'] = true;
			header('Location:home.php'.$get_info,true,303);
			exit();
		}
		if ($retval == 1) {
			$_SESSION['attempt'] = true;
			$_SESSION['ts'] = time();
			header('Location:index.php');
		}
	}
	header('Location:index.php');
?>
