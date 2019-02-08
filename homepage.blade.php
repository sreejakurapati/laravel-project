<html>
    <head>
        <title>Users Table</title>
        <link rel="stylesheet" type="text/css" href="/css/homepage.css">
         <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
      </script>
    </head>   
    <body> 
        <h1>Users Table</h1>
        <div class="form-group">
            <button id="log" value="Log" class="logout"  onclick="logout()" >Log Out</button>
        </div>
        <div id='editModal' class='modal'>
      <div class='modal-content'>
          <span class='close'>x</span>
        <!-- <form> -->
        <div class="panel-heading">
            <div class="panel-title text-center">
               <h3>Edit your details</h3>
            </div>
        </div>
          <!-- <div class="main-login main-center"> -->
              <div class="form-group">
                          <label>User Name</label>
                  <div class="cols-sm-10">
                      <div class="input-group">
                          <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                          <input type="text" class="form-control"name="un" id="username">
                          <span class="errors"  id="uns">Enter atleast 6 chars(Only Alphanumericals allowed)</span><br>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                     <label >First Name </label>
                  <div class="cols-sm-10">
                      <div class="input-group">
                         <input type="text" name ="fn" id="firstname">
                         <span class="errors" id="fns" >Enter valid First name</span><br><br>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                     <label >Last Name </label>
                  <div class="cols-sm-10">
                      <div class="input-group">
                        <input type="text" name ="ln" id="lastname">
                        <span class="errors" id="lns">Enter valid last name</span><br><br>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <label>Gender </label>
                <div class="cols-sm-10">
                  <div class="input-group">
                     <select name="Gender" name="gn" id="gender">
                     <option value="m">Male</option>
                     <option value="f">Female </option>
                     </select>
                   <span class="errors" id="gns">Enter Gender</span><br><br>
                  </div>
                </div>
              </div>
              <div class="form-group">
                        <label >E-mail Address </label>
                  <div class="cols-sm-10">
                      <div class="input-group">
                        <input type="E-mail" name ="email" id="emailaddress">
                        <span class="errors" id="mls">Enter valid E-mail Address</span><br><br>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                    <label>Phone Number</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                         <input type="number" name="pn" id="phonenumber">
                         <span class="errors" id="pns">Enter 10 digit Phone Number</span><br><br>
                    </div>
                  </div>
              </div>
          <!-- </div> -->
        <!-- </form> -->
          <div class="form-group ">
             <input type="hidden" id="user_id">
             <button class="btn1" onclick="update()">OK</button>
          </div>
      </div>
    </div>
          <div class="form-group">
              <button  id="user" value="User" class="newuser"  onclick="openCreate()" >New User</button>
          </div>
    <div id='newuserModal' class='usermodal'>
      <div class='newmodal-content'>
          <span class='newclose'>x</span>
        <!-- <form> -->
        <div class="panel-heading">
          <div class="panel-title text-center">
             <h3>Create New User</h3>
          </div>
        </div>
          <!-- <div class="main-login main-center"> -->
              <div class="form-group">
                    <label>User Name</label>
                  <div class="cols-sm-10">
                      <div class="input-group">
                         <input type="text" class="form-control"name="un2" id="username2"><br>
                         <span class="errors"  id="un">Enter atleast 6 chars(Only Alphanumericals allowed)</span><br>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                     <label >First Name </label>
                  <div class="cols-sm-10">
                      <div class="input-group">
                        <input type="text" name ="fn2" id="firstname2">
                        <span class="errors" id="fn" >Enter valid First name</span><br><br>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                    <label >Last Name </label>
                  <div class="cols-sm-10">
                      <div class="input-group">
                        <input type="text" name ="ln2" id="lastname2">
                        <span class="errors" id="ln">Enter valid last name</span><br><br>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                     <label>Gender</label>
                <div class="cols-sm-10">
                  <div class="input-group">
                    <select name="Gender" name="gn2" id="gender2">
                      <option value="m">Male</option>
                      <option value="f">Female </option>
                    </select>
                    <span class="errors" id="gn">Enter Gender</span><br><br>
                  </div>
                </div>
              </div>
              <div class="form-group">
                     <label >E-mail Address </label>
                  <div class="cols-sm-10">
                      <div class="input-group">
                        <input type="E-mail" name ="email2" id="email3">
                        <span class="errors" id="ml">Enter valid E-mail Address</span><br><br>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                    <label>Phone Number</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                        <input type="number" name="pn2" id="phonenumber3">
                        <span class="errors" id="pn">Enter 10 digit Phone Number</span><br><br>
                    </div>
                  </div>
              </div>
          <!-- </div> -->
        <!-- </form> -->
          <div class="form-group ">
             <button class="btn1" onclick="validate1()">OK</button>
          </div>
      </div>
    </div>
        <table align="center">
            <thead>

                    <th>User name</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Gender</th>
                    <th>Email Address </th>
                    <th>Phone number</th>
                    <th>Edit</th>
                    <th>Delete</th>
            </thead>
           
                <tbody id='user_table'>
                    @foreach($res as $key => $v)
                        <tr>
                            <td style="text-align:center" id="username_{{$v->id}}">{{$v->username}}</td>
                            <td style="text-align:center" id="firstname_{{$v->id}}">{{$v->firstname}}</td>
                            <td style="text-align:center" id="lastname_{{$v->id}}">{{$v->lastname}}</td>
                            <td style="text-align:center" id="gender_{{$v->id}}">{{$v->gender}}</td>
                            <td style="text-align:center" id="emailaddress_{{$v->id}}">{{$v->emailaddress}}</td>
                            <td style="text-align:center" id="phonenumber_{{$v->id}}">{{$v->phonenumber}}</td>
                            <td><input type='submit' onclick='openpopup({{$v->id}})' value='Edit'></td>
                            <td><button onclick='myFunction({{$v->id}})'>Delete</button></td>
                        </tr>
                    @endforeach 
                </tbody>
        </table>
    </body>
</html>

      <script type="text/javascript" src="{{URL::asset('js/homepage.js')}}"></script>

