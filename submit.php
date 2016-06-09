<?php
	session_start();
	if ($_POST) {
		
		if (isset($_POST['submitThread'])) {

			if ("" == trim($_POST['newThread'])) {
				echo('Empty!');
			}
			else {
				$inp = trim(str_replace('"', '\"', SQLite3::escapeString($_POST['newThread'])));
				$cmd = 'luajit /var/www/request 2 "'.$_SESSION['user'].'" "'.$inp.'"';
				exec($cmd);
				header('Location:home.php');
			}
		}

	}
?>
