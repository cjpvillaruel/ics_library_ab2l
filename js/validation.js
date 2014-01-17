

//validate user login fields (username and password)

function validate_login(){
	
	username= user_login.username.value;
	password= user_login.password.value;
	errorusername= "Invalid characters";
	

	if(username.match(/^[A-Za-z][A-Za-z0-9]+$/)){
	
		return true;
	}
	else{
		document.getElementById('helpusername').innerHTML= errorusername;
		
	}
	
	return false;
}


//validate admin login fields (username and password)

function validate_admin_login(){
	
	username= admin_login.username.value;
	password= admin_login.password.value;
	errorusername= "Invalid characters";
	

	if(username.match(/^[A-Za-z][A-Za-z0-9]+$/)){
		
		return true;
	}
	else{
		
		document.getElementById('helpusername2').innerHTML= errorusername;
	}
	
	return false;
}