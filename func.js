var show = false;
var btnLogin2 = document.getElementById('openLogin');
var arrow = document.getElementById('arrow');

arrow.disabled = true;
btnLogin2.disabled = false;
function loginMenu() {	
	/*ar loginForm = document.getElementsByClassName('loginWindow');*/
	var main = document.getElementById('main');
	
	//div of btn
	var btnLogin = document.getElementById('btnLogin');
	//var vertline = document.getElementById('vl');
	var divider = document.getElementById('divider');
	var loginWindow = document.getElementById('loginWindow');
	var keyInput = document.getElementById('keyInput');

	if (!show) {
	/*	loginForm.style.animation = "mainAni1 1s";
		loginForm.style.animationFillMode = "forwards";*/
		btnLogin.style.animation = "alpha 1s";
		btnLogin.style.animationFillMode = "forwards";
		main.style.animation = "mainAni1 1s";
		main.style.animationFillMode = "forwards";
		loginWindow.style.animation = "loginAni1 1s";
		loginWindow.style.animationFillMode = "forwards";
		divider.style.animation = "dividerAni 1s";
		divider.style.animationFillMode = "forwards";
		arrow.disabled = false;
		arrow.style.cursor = "pointer";
		btnLogin2.style.cursor = "default";
		btnLogin2.disabled = true;
		/*vertline.style.animation = "vertline 1s";
		vertline.style.animationFillMode = "forwards";*/
		/*document.getElementById('openwindow').style.display = "none";*/
		show = true;
		//console.log("none");
		keyInput.focus();
	} else if(show) {
		/*document.getElementById('openwindow').style.display = "block";*/
		/*loginForm.style.animation = "weatheranireverse 1s";
		loginForm.style.animationFillMode = "forwards";
		*/
		main.style.animation = "mainAni1R 1s";
		main.style.animationFillMode = "forwards";
		loginWindow.style.animation = "loginAni1R 1s";
		loginWindow.style.animationFillMode = "forwards";
		divider.style.animation = "dividerAniR 1s";
		divider.style.animationFillMode = "forwards";
		btnLogin.style.animation = "alphaR 1s";
		btnLogin.style.animationFillMode = "forwards";
		arrow.style.cursor = "default";
		btnLogin2.style.cursor = "pointer";
		arrow.disabled = true;
		btnLogin2.disabled = false;
	/*	vertline.style.animation = "vertlinereverse 1s";
		vertline.style.animationFillMode = "forwards";*/
		show = false;
		//console.log(document.getElementById('openwindow').style.display);
		//console.log("block");
	} else {
		console.log("error@show/noshow weather");
	}

}
function checkAttempt() {
	if (attempt) {
		loginMenu();
	}
}

function next() {
	var rollaway2 = document.getElementById("accentrollaway2"); 
	var rollaway = document.getElementById("accentrollaway");
	rollaway.style.animation = "accentAni2 0.8s";
	rollaway.style.animationFillMode = "forwards";
	rollaway2.style.animation = "accentAni1 0.5s";
	rollaway2.style.animationFillMode = "forwards";
}

