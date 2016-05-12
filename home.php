<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="styles.css" />
		<title>Codex | Home</title>
	</head>
	
	<body class="home" onload="next(),scrolltobot()">
		<?php
			session_start();
			
			if(isset($_SESSION['active']) && $_SESSION['active'] == true) {
				
			} else {
				header('Location:/index.php');
			}
		?>
		<div id="accentrollaway"></div>
		<div class="accentrollaway2" id="accentrollaway2">
			<div id="forumMain" style="padding: 15px 15px 15px 15px; position:absolute; height:100%;width:100%; box-sizing:border-box;bottom:80px; overflow-y:scroll">
				<?php
					$db = new SQLite3('/var/www/db/codex');
					$results = $db->query('SELECT * FROM (SELECT msg,user,datetime(timestamp,"localtime") FROM threads ORDER BY timestamp DESC LIMIT 100) ORDER BY 3');
					
					while ($row = $results->fetchArray()) {
						echo('<div style="color:white; font-size:120%; padding:5px 15px 0px 5px;  margin:5px 0px 5px 0px; background-color:gray; white-space:pre-wrap; word-wrap:break-word"><b>'.nl2br(htmlspecialchars($row['msg'])).'</b></br>from <b>'.$row['user'].'</b> at '.$row['2'].'</div>');
					}	
			    ?>
			</div>
			<form id="chatForm" action="submit.php" method="post"> 
				<input id="chatInput" name="newThread" type="text" placeholder="Chat here..." maxlength="240"></input>
				<input id="chatSubmit" name="submitThread" type="submit" value="submit"></input>
			</form>
		</div>
		<div class="nav">
			<div class="welcome"><?php echo 'Welcome, '.$_SESSION['user']; ?></div>
			<ul class="navlist">
				<a href="/home.php"><li style="box-sizing:border-box;
	box-shadow:10px 0px 10px #00aeef;
	border-left:10px solid #414042;">Home</li></a>
				<a href="/tasks.php"><li id="li2">Tasks</li></a>
				<li>Agenda</li>
				<a href="https://drive.google.com/drive/folders/0B-9kDh5lDu5kQW9sekpBeUhQcVk" target="_blank"><li>GDocs</li></a>
			</ul>
			<form class="logout" action="logout.php"><input class="logoutbtn" type="submit" value="exit"></input></form>
		</div>

		<script>
		function scrolltobot() {
			var scrDiv = document.getElementById('forumMain');
			scrDiv.scrollTop = scrDiv.scrollHeight;
		}
		</script>
		<script src="func.js"></script>
	</body>
</html>
