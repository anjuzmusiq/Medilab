<?php
include('connect.php');
$email=$_SESSION['email'];
$sql="select * from user where email='$email'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
if(isset($_POST['submit']))
{   
    $oldpass=$_POST['oldpass'];
    $password=$_POST['password'];
    $cpass=$_POST['cpass'];
    $result1 = mysqli_query ($con,"select password from user where email='$email'");
    $row1 = mysqli_fetch_assoc($result1);
    $oldpassworddb = $row1['password'];
    if($oldpassworddb==$oldpass)
        {
        $sql5="UPDATE `user` SET `password`='$password' where email='$email'";
        $result5=mysqli_query($con,$sql5);
        if($result5==TRUE)
        {
        echo"<script>
        alert(' Pasword Change Successfull');
        window.location='change_password.php';
        </script>";
        }
        else
        {
        echo"<script>alert('Password Change Failed');
        window.location='change_password.php';
        </script>";
        }
    }
    else
        {
        echo"<script>alert('Old Password Entered Is Incorrect');

        </script>";
        }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medilab</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v2.1.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>

</style>
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
<?php
include ("header.php");
?>
                    <!-- ======= Appointment Section ======= -->
    <section id="hero" class="appointment section-bg" >
      <div class="container bg-white" style="margin-top:165px;margin-bottom:140px;padding:20px;">

        <div class="section-title">
          <h2>Change Password</h2>
        </div>

        <form action="" method="post" role="form" name="intro" onsubmit="return validateform()">
        <div class="form-row">
          <div class="col-md-12 form-group">
              <input type="password" name="oldpass" class="form-control" id="oldpass" placeholder="Your Old Password"  required>
            </div>
         </div>
         <div class="form-row">
          <div class="col-md-12 form-group">
              <input type="password" name="password" class="form-control" id="password" placeholder="Your New Password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : '');"  required>
            </div>
         </div>
         <div class="form-row">
          <div class="col-md-12 form-group">
              <input type="password" name="cpass" class="form-control" id="cpass" placeholder="Confirm Password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : '');"  required>
            </div>
         </div>

          <div class="text-center"><button class="btn appointment-btn scrollto" type="submit" name="submit">Update</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->

    <!-- ======= Departments Section ======= -->



<div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>