function validate () {
    [].forEach.call(document.querySelectorAll('.errors'), function (el) {
    el.style.display = 'none';
    });
    var un = document.getElementById('username').value;
	if(!username(un)){
        document.getElementById('un').style.display = 'block';
		return false;
	}
	var fn = document.getElementById('fname').value;
	if(fn==""){
		document.getElementById('fn').style.display = 'block';
		return false;
	}
	var ln = document.getElementById('lname').value;
	if(ln==""){
		document.getElementById('ln').style.display = 'block';
		return false;
	}
	var pw = document.getElementById('password').value;
	if(!password(pw)){
         document.getElementById('pw').style.display = 'block';
         return false;
     }
     var rpw = document.getElementById('repassword').value;	
	if(rpw != pw){
         document.getElementById('rpw').style.display = 'block';
         return false;
    }
     var ml = document.getElementById('email').value;
	if(!validateEmail(ml)){
	   document.getElementById('ml').style.display = 'block';
	   return false;
	}
    var pn = document.getElementById('phonenumber').value;
    if(!phonenumber(pn)){
    document.getElementById('pn').style.display = 'block';
    return false;
    }

    var un = $("#username").val();
	var fn = $("#fname").val();
	var ln = $("#lname").val();
	var pw = $("#password").val();
	var gn = $("#gender").val();
	var ml = $("#email").val();
	var pn = $("#phonenumber").val();
	var token = $("#csrf-token").val();
	$.ajax({
		url:"registerajax",
		type:"POST",
		data:{username:un,firstname:fn,lastname:ln,password:pw,gender:gn,emailaddress:ml,phonenumber:pn,type:'register',_token:token},
		success:function(data){
			if(data.status == 200){
			$("#register_message").show();
            $("#username").val("");
			$("#fname").val("");
			$("#lname").val("");
			$("#password").val("");
			$("#gender").val("");
			$("#email").val("");
			$("#phonenumber").val("");
			alert(data.message)
			window.location='login';
			}else if(data == 2){
				alert("Something went wrong!");
			}else{
				alert("Invalid error");
			}
		},
		error:function(){
			alert("Server error");
		}

	});
}
function phonenumber(inputtxt)
{
  var Phonenumber= /^\d{10}$/;
  if(inputtxt.match(Phonenumber))
  {
      return true;
  }
  else
  {
     return false;     
  }
}
function validateEmail(email) {
    var re = /^\w+@[a-zA-Z0-9_]+?\.[a-zA-Z]{2,3}$/;
    return re.test(String(email).toLowerCase());
}
//$("#btn_signup").click(function(){});

function username(inputtxt)
{
	 var username = /[0-9a-zA-Z]{6,}/;
	 if(inputtxt.match(username))
	 {
	 	return true;
	 }
	 else
	 {
	 	return false;
	 }
}
function password(inputtxt)
{
	 var password = /*/[0-9a-zA-Z]{6,}/;*/"(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{6,}";
	 if(inputtxt.match(password))
	 {
	 	return true;
	 }
	 else
	 {
	 	return false;
	 }
}
addEventListener("keyup", function(event) {
  event.preventDefault();
  if (event.keyCode === 13) {
    document.getElementById("btn_signup").click();
  }
});