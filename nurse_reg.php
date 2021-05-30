<?php
include('connect.php');
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $age=$_POST['age'];
    $designation=$_POST['designation'];
    $experience=$_POST['experience'];
    $phone=$_POST['phone'];
    $sql5="INSERT INTO `nurse`(`nname`, `address`, `email`, `password`,`age`, `designation`, `experience`, `phone`, `status`, `final_status`) VALUES ('$name','$address','$email','$password',$age,'$designation','$experience',$phone,1,0)";
    $result5=mysqli_query($con,$sql5);
    if($result5==TRUE)
    {
    echo"<script>
    window.location='nurse_login.php';
    alert('Registration Successfull');
    </script>";
    }
    else
    {
    echo"<script>alert('Registation failed');
    window.location='nurse_reg.php';
    </script>";
    }
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="registration/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="registration/css/style.css">
    <script>
        function validateform()
        {
            var a=document.intro.cpass.value;
            var b=document.intro.password.value;
            if(a==b){
                return true;
            }
            else{
                alert("Password must be same!!");
                return false;
            }

        }
    </script>
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="registration/images/2.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="" name="intro" id="signup-form" class="signup-form" onsubmit="return validateform()">
                        <h2 class="form-title">Nurse Registration</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name" required/>
                        </div>
                        <div class="form-group">
                            <textarea rows="5" cols="50" type="text" class="form-input" name="address" id="address" placeholder="Your Address" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" required/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password"pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : '');" required/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="cpass" id="cpass" placeholder="Confirm password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : '');" required/>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-input" name="age" id="age" placeholder="Your Age" maxlength="3" title="invalid age"required/>
                        </div>
                        <div class="form-group">
                        
                            <input type="text" class="form-input" name="designation" id="designation" placeholder="Your Designation"required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="experience" id="experience" placeholder="Your Experience"required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="phone" id="phone" placeholder="Your Phone No"maxlength="10" minlength="10" pattern="[0-9]*" title="invalid phone no"required/>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="nurse_login.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="registration/vendor/jquery/jquery.min.js"></script>
    <script src="registration/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>