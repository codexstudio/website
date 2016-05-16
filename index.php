<!DOCTYPE html>
<html><head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="styles.css"/>
	<title>Codex | Login</title>
</head><body>
	<?php 
		session_start();
		if ($_SESSION["isActive"]) {
			header("Location:home.php");
		}
		if (isset($_SESSION["timeStamp"]) && time() - $_SESSION["timeStamp"] > 1) {
			$_SESSION["hasAttempted"] = false;
			unset($_SESSION["timeStamp"]);
		}
		if (!isset($_SESSION["timeStamp"])) {
			$_SESSION["timeStamp"] = time();
		}
	?>
	<div id="loginBox">
		<form action="validate.php" method="post">
			<input class="textboxes" id="idInput" type="password" name="key" placeholder="ID"></input>
			<input class="textboxes" id="secretInput" type="password" name="secret" placeholder="Secret"></input>
			<input id="submit" type="submit" value="Login"></input>	
		</form>
		<?php 
			if ($_SESSION["hasAttempted"]) {
				echo '<span id="error"> Invalid ID.</span>';
			}
		?>
	</div>
	<script src="func.js"></script>
</body></html>
