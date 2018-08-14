$(function(){
	$('#rollno').on('blur',function(){
		if(!/((\d{2}((CO)|(DCO)|(EE)|(ME)|(CE)|(DEE)|(DME)|(DCE))\d{2,3}))/i.test(this.value)){
			alert("Invalid");
			this.value = "";
			$(this).focus();
			return false
		}
	});

	$('#sname').on('keypress',function(e)
	{
		if(/[^a-zA-Z ]/.test(e.key))
		{

			alert("Invalid Name. Only alphabets and spaces allowed");
			this.value = "";
			$(this).focus();
			return false;
		}
	});
	$('#email').on('blur',function(e)){
		if(/((\w*\d*_?.?){1}@(\w*\d*).(\w*\d*\w*){1})/.test(e.key)){
			alert('Invalid');
			this.value = "";
			$(this).focus();
			return false
;		}
	}
});