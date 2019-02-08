<html>
    <head>
	   <title>Registration Form</title>
       <link rel="stylesheet" type="text/css" href="/css/style.css">
       <script
          src="https://code.jquery.com/jquery-3.3.1.min.js"
          integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
          crossorigin="anonymous">
        </script>
	   <script type="text/javascript" src="{{URL::asset('js/reg.js')}}"></script>
	</head>
        <body>
	      <!-- <div class="container"> -->
	      <!-- <div class="row main"> -->
		    <div class="panel-heading">
              <div class="panel-title text-center">
				<h1>Registration Form</h1>
              </div>
		    </div>
                <h5> * for mandatory fields </h5>
		        <p id="register_message" style="display:none" >You have registered successfully.Click <a href="login">here</a> to login.</p>
            <div class="main-login main-center">
	            <div class="form-group">
	 	          <label>User Name  <span class="required" id="imp">*</span></label>
		 	        <div class="cols-sm-10">
				        <div class="input-group">
				        	<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                            <input type="text" class="form-control"placeholder="Enter your Name" name="un" id="username">
			                <span class="errors"  id="un">Enter atleast 6 chars(Only Alphanumericals allowed)</span><br>
			            </div>
		            </div>
	 	        </div>
	 	        <div class="form-group">
	              <label >First Name  <span class="required" id="imp">*</span></label>
	                <div class="cols-sm-10">
	                   <div class="input-group">
	                        <input type="text"placeholder="Enter your First Name" name="fn" id="fname">
	                        <span class="errors" id="fn" >Enter valid First name</span><br><br>
	                    </div>
	                </div>
	            </div>
	            <div class="form-group">
	              <label >Last Name  <span class="required" id="imp">*</span></label>
	                <div class="cols-sm-10">
	                    <div class="input-group">
	                       <input type="text"placeholder="Enter your Last Name" name="ln" id="lname">
	                       <span class="errors" id="ln">Enter valid last name</span><br><br>
	                    </div>
	                </div>
	            </div>
	            <div class="form-group">
	              <label>Password <span class="required" id="imp">*</span></label>
	                <div class="cols-sm-10">
	                    <div class="input-group">
	                        <input type="password" placeholder="Enter your password" id="password" name="pw">
	                        <span class="errors" id="pw">Entr atleast one num,upr,lwercase ltrs and min 6 chars</span><br><br>
	                    </div>
	                </div>
	            </div>
	            <div class="form-group">
	              <label>Re-enter Password <span class="required" id="imp">*</span></label>
	                <div class="cols-sm-10">
	                    <div class="input-group">
	                        <input type="password" placeholder="Re-enter password" id="repassword" name="rpw">
	                        <span class="errors" id="rpw">Enter same password</span><br><br>
	                    </div>
	                </div>
	            </div>
	            <div class="form-group">
	              <label>Gender <span class="required" id="imp">*</span></label>
	                <div class="cols-sm-10">
	                    <div class="input-group">
	                        <select name="Gender" name="gn" id="gender">
		    	               <option value="m">Male</option>
		    	               <option value="f">Female </option>
		                    </select>
		                    <span class="errors" id="gn">Enter Gender</span><br><br>
                        </div>
	                </div>
	            </div>
	            <div class="form-group">
	              <label >E-mail Address <span class="required" id="imp">*</span></label>
	                <div class="cols-sm-10">
	                    <div class="input-group">
	                        <input type="E-mail" placeholder="Enter E-mail Address" name ="email" id="email">
	                        <span class="errors" id="ml">Enter valid E-mail Address</span><br><br>
	                    </div>
	                 </div>
	            </div>
	            <div class="form-group">
	              <label>Phone Number <span class="required" id="imp">*</span></label>
	                <div class="cols-sm-10">
	                    <div class="input-group">
	                       <input type="number"  placeholder="Enter phone number" name="pn" id="phonenumber">
	                       <span class="errors" id="pn">Enter 10 digit Phone Number</span><br><br>
	                    </div>
	                </div>
	            </div>
	       
	            <div class="form-group ">
	                <button type="submit" id="btn_signup" class="btn btn-primary btn-lg btn-block login-button" onclick="validate()">Register</button>
	            </div>
	                <p id="instead" style="display:block">Have an account already?<a href="login"> Login here</a></p>
            </div>
        </body>
</html>