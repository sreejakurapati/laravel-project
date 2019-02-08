var modal = document.getElementById('editModal');
         var span = document.getElementsByClassName("close")[0];
         
    function openpopup(user_id){
          modal.style.display = "block";
          var un = $("#username_"+user_id).html();
          var em = $("#emailaddress_"+user_id).html();
          var ph = $("#phonenumber_"+user_id).html();
          var fn = $("#firstname_"+user_id).html();
          var ln = $("#lastname_"+user_id).html();
          var gn = $("#gender_"+user_id).html();
          var token = $("#csrf-token").val();
          $("#username").val(un);
          $("#emailaddress").val(em);
          $("#phonenumber").val(ph);
          $("#lastname").val(ln);
          $("#firstname").val(fn);
          $("#gender").val(gn);
          $("#user_id").val(user_id);
    }  
          span.onclick = function() {
            modal.style.display = "none";
          }
          window.onclick = function(event) {
             if (event.target == modal) {
                modal.style.display = "none";
              }
          }
          var usermodal = document.getElementById('newuserModal');
          var btn = document.getElementById("user");
          var span = document.getElementsByClassName("newclose")[0];
          btn.onclick = function() {
              usermodal.style.display = "block";
          }
          span.onclick = function() {
              usermodal.style.display = "none";
          }
          function openCreate () {
            usermodal.style.display = "block";
          }
      window.onclick = function(event) {
          if (event.target == usermodal) {
            usermodal.style.display = "none";
          }
      }
    function validate1() {
         [].forEach.call(document.querySelectorAll('.errors'), function (el) {
         el.style.display = 'none';
         });
        var un = document.getElementById('username2').value;
        if(!username(un)){
            document.getElementById('un').style.display = 'block';
        return false;
        }
        var fn = document.getElementById('firstname2').value;
        if(fn==""){
           document.getElementById('fn').style.display = 'block';
        return false;
        }
        var ln = document.getElementById('lastname2').value;
        if(ln==""){
            document.getElementById('ln').style.display = 'block';
        return false;
        }
        var ml = document.getElementById('email3').value;
        if(!validateEmail(ml)){
            document.getElementById('ml').style.display = 'block';
        return false;
        }
        var pn = document.getElementById('phonenumber3').value;
        if(!phonenumber(pn)){
           document.getElementById('pn').style.display = 'block';
        return false;
        }
         var un = $("#username2").val();
         var fn = $("#firstname2").val();
         var ln = $("#lastname2").val();
         var email = $("#email3").val();
         var pn = $("#phonenumber3").val();
         var gn = $("#gender2").val();
         var token = $("#csrf-token").val();
      $.ajax({
         url:"newuserajax",
         type:"POST",
         data:{username:un,firstname:fn,lastname:ln,gender:gn,emailaddress:email,phonenumber:pn,type:'Newuser',_token:token},
        success:function(data){
          if(data == 1){
            $("#username2").val("");
            $("#firstname2").val("");
            $("#lastname2").val("");
            $("#email3").val("");
            $("#phonenumber3").val("");
            $("#gender2").val("");
            var usermodal = document.getElementById('newuserModal');
            usermodal.style.display = "none";
            var tr = '<tr>'+
                  '<td>'+un+'</td>'+
                  '<td>'+fn+'</td>'+
                  '<td>'+ln+'</td>'+
                  '<td>'+gn+'</td>'+
                  '<td>'+email+'</td>'+
                  '<td>'+pn+'</td>'+
                  '<td><input type="submit" onclick="openpopup(51)" value="Edit"></td>'+
                  '<td><input type="submit" id="delete" value="Delete"></td></tr>';
            $("#user_table").append(tr);
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
    $("#btn_signup").click(function(){});
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
    function update(){
        [].forEach.call(document.querySelectorAll('.errors'), function (el) {
          el.style.display = 'none';
        });
         var uns = document.getElementById('username').value;
        if(!username(uns)){
              document.getElementById('uns').style.display = 'block';
          return false;
        }
        var fns = document.getElementById('firstname').value;
        if(fns==""){
          document.getElementById('fns').style.display = 'block';
          return false;
        }
        var lns = document.getElementById('lastname').value;
        if(lns==""){
          document.getElementById('lns').style.display = 'block';
          return false;
        }
        var mls = document.getElementById('emailaddress').value;
        if(!validateEmail(mls)){
           document.getElementById('mls').style.display = 'block';
           return false;
        }
        var pns = document.getElementById('phonenumber').value;
          if(!phonenumber(pns)){
          document.getElementById('pns').style.display = 'block';
          return false;
        }
           var user_id =  $("#user_id").val();
           var un    = $("#username").val();
           var fn   = $("#firstname").val();
           var ln   = $("#lastname").val();
           var gn = $("#gender").val();
           var email = $("#emailaddress").val();
           var phN  = $("#phonenumber").val();
           var token = $("#csrf-token").val();  
      $.ajax({
        url:"editajax",
        type:"POST",
        data:{username:un,firstname:fn,lastname:ln,gender:gn,email:email,phonenumber:phN,type:"edit",user_id:user_id,_token:token},
        success:function(data){
          if(data == 1){
            alert("Data updated");
            $("#username_"+user_id).html(un);
            $("#firstname_"+user_id).html(fn);
            $("#lastname_"+user_id).html(ln);
            $("#gender_"+user_id).html(gn);
            $("#email_"+user_id).html(email);
            $("#phonenumber_"+user_id).html(phN);
            modal.style.display = "none";
          }else{
            alert("Data not updated");
          }
        },
        error:function(){
          alert("Server error");
        }
      });
    }
    function myFunction(del_id){
       //alert(del_id);
       var check = confirm("Are you sure to delete a current user!");
       var token = $("#csrf-token").val();
        if(check){
          $.ajax({
            url:"deleteajax",
            type:"POST",
            data:{del_id:del_id,type:"delete",_token:token},
            success:function(data){
              var data = JSON.parse(data);
              if(data == 1){
                alert("Data deleted");
                $("#user_"+del_id).hide();
                modal.style.display = "none";
              }else{
                alert("Data not deleted");
              }
            },
            error:function(){
              alert("Server error");
            }
          });
        }
    }
    function logout(){
      var token = $("#csrf-token").val();
        $.ajax({
            url:"logoutajax",
            type:"POST",
            data:{type:"logout",_token:token},
            success:function(data){
              if(data == 1){
                window.location='login'
              }
            },
            error:function(){
              alert("Server error");
            }
        });
    }