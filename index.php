<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="styles.css" />
		<title>Codex | Login</title>
	</head>
		
	<body onload="checkAttempt()">
		<?php
			session_start();
			if ($_SESSION['active']) {
				header('Location:/home.php');
			}
			if (isset($_SESSION['ts']) && time() - $_SESSION['ts'] > 1) {
				$_SESSION['attempt'] = false;
				unset($_SESSION['ts']);
			}
			if (!isset($_SESSION['ts'])) {
				$_SESSION['ts'] = time();
			}
			
		?>
		<div class="accent"></div>

			<div class="main" id="main">
				<div class="logo"></div>
				<div id="btnLogin">
				<input id="openLogin" type="button" value="LOGIN" onclick="loginMenu()" autofocus></input></div>
			</div>
			
		<div id="divider">
			<div id="vl"></div>
			<input id="arrow" type="button" onclick="loginMenu()"></input>
		</div>

		<div id="loginWindow" class="loginWindow">
		<form action="validate.php" method="post">
			<input class="textboxes" id="keyInput" type="password" name="key" placeholder="Key"></input>	
			<input id="submit" type="submit" value="LOGIN"></input>	
		</form>
		<?php
			if ($_SESSION['attempt']) { 
				echo '<span id="error">Invalid Login.</span>';
			}

		?>
		</div>

		<script type="text/javascript">
			var attempt = <?php echo json_encode($_SESSION['attempt']); ?>;
		</script>
		<script src="func.js"></script>
	</body>
</html>
