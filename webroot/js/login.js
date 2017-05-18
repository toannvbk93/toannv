
function checkValue(){
	var login_username = document.getElementById('login_username');
	var login_password = document.getElementById('login_password');
	if(login_username.value == ""){
		document.getElementById('null_login_name').innerHTML = "Enter username";
		document.getElementById('null_login_name').style.fontSize="10px";
		document.getElementById('null_login_name').style.color = "red";
	}else {
		document.getElementById('null_login_name').innerHTML = "";
	}
	if(login_password.value == ""){
		document.getElementById('null_login_password').innerHTML = "Enter password";
		document.getElementById('null_login_password').style.fontSize="10px";
		document.getElementById('null_login_password').style.color = "red";
	}else {
		document.getElementById('null_login_password').innerHTML = "";
	}
}
