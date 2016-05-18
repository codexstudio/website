<!DOCTYPE html>
<html><head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="styles.css" />
	<title>Codex | Home</title>
</head><body id="homeBody">
	<?php
		session_start();

		if(isset($_SESSION['isActive']) && $_SESSION['isActive'] == true) {
			
		} else {
			header('Location:/testing/index.php');
		}
	?>
	<div id="topNav">
		<nav id="navBar">
			<a class="navBar-links" href="home.php">Home</a> |
			<a class="navBar-links" href="home.php">Tasks</a> |
			<a class="navBar-links" href="home.php">Schedule</a> |
			<a class="navBar-links" href="https://drive.google.com/drive/folders/0B-9kDh5lDu5kQW9sekpBeUhQcVk" target="_blank">Google Drive</a> |
			<a class="navBar-links" href="https://github.com/codexstudio" target="_blank">GitHub</a> |
			<a class="navBar-links" href="logout.php">Logout</a>
		</nav>
		<img id="logo" src="codex.png"></img>
	</div>
</body></html>
