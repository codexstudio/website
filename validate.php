<?php
	session_start();
	if ($_POST) {
		exec('luajit /var/www/request 1 '.escapeshellarg($_POST['key']), $output, $retval);	
		$_SESSION['user'] = $output[0];
		if ($retval == 0 && $_POST['secret'] == "fossboss") {
			$get_info = "?status=success";
			$_SESSION["isActive"] = true;
			header('Location:home.php'.$get_info,true,303);
			exit();
		}
		else {
			$_SESSION["key"] = $_POST['key'];
			if($_SESSION["hasAttempted"] == true) { 
				sleep(2);
			}
			$_SESSION["hasAttempted"] = true;
			$_SESSION["timeStamp"] = time();
			header('Location:index.php');
		}
	}
	header('Location:index.php');
?>
