<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="styles.css" />
		<title>Codex | Home</title>
	</head>
	
	<body class="home" onload="next()">
		<?php
			session_start();
			
			if(isset($_SESSION['active']) && $_SESSION['active'] == true) {
				
			} else {
				header('Location:/index.php');
			}
		?>
		<div id="accentrollaway"></div>
		<div class="accentrollaway2" id="accentrollaway2" style="overflow-y:scroll">
			<ul class="tasks">
				<li>Game Prototype</li>
				<li>Game Pitch</li>
				<li>Game Concept report</li> 
				</ul>
				<ul class="tasks">
				<li>Initial Concept Art: Terry<br>
					-Genre<br>
					-Platform<br>
			    		-Revenue Model<br><li>
				<li>Competitive & SWOT Analysis: Nick<br></li>
				<li>Defined Concept: CaoCao & Darren<br>
					-Mission Statement<br>
					-Game setting<br>
					-Gameplay Mechanics<br>
					-Story Synopsis<br>
					-Concept Art<br>
					-Audio(Open Input from all members)<br></li>
				<li>Prototype & Risk Analysis: Gabriel<br></li>
				<ul>
				<ul class="tasks">
				<li>Definitions: Neil & David<br>
					-Game features<br>
					-milestones & Deliverables<br>
					-Evaluate technology<br>
					-Tools & Pipeline<br>
					-Documentation(Design, Art, Technical)<br></li>
				<li>Game Plan: Memur<br>
					-Schedule<br>
					-Staffing Plan<br>
					-Budget</li>				
				</ul>
		</div>
		<div class="nav">
			<ul class="navlist">
				<a href="/home.php"><li>Home</li></a>
				<a href="/tasks.php"><li id="li2" style="box-sizing:border-box;
	box-shadow:10px 0px 10px #00aeef;
	border-left:10px solid #414042;">Tasks</li></a>
				<li>Agenda</li>
			</ul>
			<form class="logout" action="logout.php"><input class="logoutbtn" type="submit" value="exit"></input></form>
		</div>
		<script src="func.js"></script>
	</body>
</html>
