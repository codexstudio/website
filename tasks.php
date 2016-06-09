<!DOCTYPE html>
<html><head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="styles.css" />
	<title>Codex | Home</title>
</head><body>
	<?php
		session_start();

		if(isset($_SESSION['isActive']) && $_SESSION['isActive'] == true) {
			
		} else {
			header('Location:/testing/index.php');
		}
	?>
	<div class="topNav">
		<nav id="navBar">
			<a class="navBar-links" href="home.php">Home</a> |
			<a class="navBar-links" href="nightmare-invaders/src/Nightmare_Invaders.html">Nightmare Invaders</a> |
			<a class="navBar-links highlighted-link" href="tasks.php">Tasks</a> |
			<a class="navBar-links" href="home.php">Schedule</a> |
			<a class="navBar-links" href="https://drive.google.com/drive/folders/0B-9kDh5lDu5kQW9sekpBeUhQcVk" target="_blank">Google Drive</a> |
			<a class="navBar-links" href="https://github.com/codexstudio" target="_blank">GitHub</a> |
			<a class="navBar-links" href="logout.php">Logout</a>
		</nav>
		<img id="logo" src="codex.png"></img>
	</div>
	<div class="footer-bkg"></div>
</body></html>
