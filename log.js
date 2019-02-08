function validate () {
           var un = $("#username").val();
           var pd = $("#password").val(); 
           var token = $("#csrf-token").val();
        $.ajax({
          url:"loginajax",
          type:"POST",
          data:{username:un,password:pd,type:'login',_token:token},
          success:function(data){
            if(data.status == 100){
                $("#login_message").show();
                $("#un").val("");
                $("#psd").val("");
               window.location='homepage';
                 
            }else if(data == 2){
                $("#invalid_message").show();
                $("#un").val("");
                $("#psd").val("");
            }else{
                alert("Invalid error");
            }
          }
        });
}
