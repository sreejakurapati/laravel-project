<html>
  <head>
      <title>Login Form</title>
      <link rel="stylesheet" type="text/css" href="/css/login.css">
      <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous">
      </script>
      <script type="text/javascript" src="{{URL::asset('js/log.js')}}"></script>
  </head>
  <body>
      <div class="login-form">
        <div class="main-div">
            <div class="panel">
          	 <h1>User Login</h1><br>
            </div>
            <form id="Login">
              <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
              <div class="form-group">
                    <label>User Name</label>
                    <input type="text" class ="form-control" placeholder="enter your user name" id="username" name="un"><br>
              </div>
              <div class="form-group">
                    <label>Password</label>
                    <input type="Password" class="form-control"  placeholder="enter your password" id="password" name="psd"><br>
              </div>
                    <button type="button" id="btn_login" class="btn btn-primary" onclick="validate()">Login</button>
                    <p id="login_message" style="display:none">You have logged in successfully. </p>
                    <p id="invalid_message" style="display:none">un registered user.</p>
              <div class="create">
                    <p id="create" style="display:block"><a href="register">Create account</a></p>
              </div>
            </form>
        </div>
      </div>
  </body>
</html>