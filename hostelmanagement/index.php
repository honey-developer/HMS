
<html>
    <head>
        <title>Hostel Management System</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css" >
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    </head>
  <!-- material design code -->

  <body>
        <div class="container">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                        <button type="button" class=toggle-btn onclick="login()">LogIn</button>
                        <button type="button" class=toggle-btn  onclick="register()">Register</button>
                </div>
                <form  action="includes/login.inc.php" method="POST" id="login" class="loginform">
                
                    <input type="text" class="logname" name="student_roll_no" placeholder="Roll No" required="required" />
                    <input type="password" name="pwd" class="logpassword" placeholder="Password" required>
                    <button type="submit"  name="login-submit" class="submit-btn">Log In</button>

                    <p class=" w3l-register-p">Login as<a href="admin.php" class="registerasadmin"> Hostel-Manager/Admin</a></p>
                </form>
                <form action="includes/signup.inc.php" method="POST" id="regsiter" class="registerform">
                    <input  type="text" class="regno" name="student_roll_no" placeholder="RollNo" required>
                    <input  type="text" class="regfname" name="student_fname" placeholder="FirstName" required>
                    <input type="text" class="reglname" name="student_lname" placeholder="LastName" required>
                    <input type="text" class="regphno" name="mobile_no" placeholder="PhoneNumber" required>
                    <input  type="text" name ="department" placeholder="Department" class="dept" required>
                    <input type="text" class="regyos" name="year_of_study" placeholder="YearOfStudy" required>
                    <input  type="password" class="regpassword" name="pwd" placeholder="Password" required>
                    <input  type="password" class="regconpassword" name="confirmpwd" placeholder="Confirm Password" required>

                    <button type="submit" name="signup-submit" class="register-btn">Register</button>
                </form>
            </div>
        </div>

        <script>
            var x= document.getElementById("login");
            var y = document.getElementById("regsiter");
            var z = document.getElementById("btn");

            function register(){
                x.style.left="-400px";
                y.style.left="50px";
                z.style.left="110px"
            }
            function login(){
                x.style.left="50px";
                y.style.left="450px";
                z.style.left="0"
            }



        </script>
   </body>


</html>
