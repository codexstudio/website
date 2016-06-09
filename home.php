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
	<div class="topNav">
		<nav id="navBar">
			<a class="highlighted-link navBar-links" href="home.php">Home</a> |
			<a class="navBar-links" href="nightmare-invaders/src/Nightmare_Invaders.html">Nightmare Invaders</a> |
			<a class="navBar-links" href="tasks.php">Tasks</a> |
			<a class="navBar-links" href="home.php">Schedule</a> |
			<a class="navBar-links" href="https://drive.google.com/drive/folders/0B-9kDh5lDu5kQW9sekpBeUhQcVk" target="_blank">Google Drive</a> |
			<a class="navBar-links" href="https://github.com/codexstudio" target="_blank">GitHub</a> |
			<a class="navBar-links" href="logout.php">Logout</a>
		</nav>
		<img id="logo" src="codex.png"></img>
	</div>
	<div id="home-forum-wrapper">
		<?php
			$db = new SQLite3('/var/www/db/codex');
			$results = $db->query('SELECT * FROM (SELECT msg,user,datetime(timestamp,"localtime") FROM threads ORDER BY timestamp DESC LIMIT 100)');
			while ($row = $results->fetchArray()) {
				echo('<div class="home-forum" style="color:white; font-size:120%; padding:5px 15px 0px 5px;  margin:5px 0px 5px 0px; background-color:gray; white-space:pre-wrap; word-wrap:break-word"><b>'.nl2br(htmlspecialchars($row['msg'])).'</b></br>from <b>'.$row['user'].'</b> at '.$row['2'].'</div>');
			}
		?></div>
	<div class="footer-bkg">
		<form id="home-forum-footer" action="submit.php" method="post"> 
			<input id="home-forum-input" name="newThread" type="text" placeholder="Chat here..." maxlength="240" autocomplete="off"></input>
			<input id="home-forum-submit" name="submitThread" type="submit" value="submit"></input>
		</form>
	</div>

</body></html>
