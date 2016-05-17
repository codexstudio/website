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
	<div id="loginWrapper">
		<img id="imgCodex" src="codex.png">
		<div id="loginBox">
			<form action="validate.php" method="post">
				<input class="login-textboxes" id="idInput" type="password" value="<?php echo htmlspecialchars($_SESSION['key']); ?>" name="key" placeholder="ID"></input>
				<input class="login-textboxes" id="secretInput" type="password" name="secret" placeholder="Secret"></input>
				<input id="submit" type="submit" value="Login"></input>	
			</form>
			<?php 
				if ($_SESSION["hasAttempted"]) {
					echo '<br><span id="error" style="font-size:90%;color:lightgrey;font-family:Helvetica"> Invalid.</span>';
				}
			?>
		</div>
	</div>
	<script src="func.js"></script>
</body></html>
