function checkEmail(e){
	var element = e.target;
	if(/[^a-zA-Z0-9@._]/.test(element.value)){
		alert("Email is invalid! Only Characters a-zA-Z0-9 @ ._ are allowed");
		element.value="";
		return false
	}
	if(!/[a-zA-Z]/.test(element.value)){
		alert("Email is invalid Characters are complusory");
		element.value="";
		return false;
	}
	if(!/[@]/.test(element.value)){
		alert("Email. is invalid! @ is missing")
		element.value=""
		return false
	}
	if(!/[.]/.test(element.value)){
		alert("Email. is invalid! . is missing")
		element.value=""
		return false
	}
	return True
}
function submitform(e){
	var contact = document.getElementByClassName('contact-form');

}
var email = document.getElementById('Email1');
email.addEventListener('blur',checkEmail,false);
var sub = document.getElementById('subject');
email.addEventListener('blur',checkEmail,false);
var submit = document.getElementById()