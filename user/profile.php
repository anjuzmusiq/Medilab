<?php
include('connect.php');
$email=$_SESSION['email'];
$sql="select * from user where email='$email'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
if(isset($_POST['update']))
{   
    $name=$_POST['name'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $location=$_POST['location'];

    $sql5="UPDATE `user` SET `uname`='$name',`address`='$address',`email`='$email',`phone`=$phone,`location`='$location' where email='$email'";
    $result5=mysqli_query($con,$sql5);
    if($result5==TRUE)
    {
    echo"<script>
    alert('Update  Successfull');
    window.location='profile.php';
    </script>";
    }
    else
    {
    echo"<script>alert('Update failed');
    window.location='profile.php';
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
</head>

<body>
<?php
include ("header.php");
?>
                    <!-- ======= Appointment Section ======= -->
    <section id="hero" class="appointment section-bg" >
      <div class="container bg-white" style="margin-top:160px;margin-bottom:48px;padding:20px;">

        <div class="section-title">
          <h2>My Profile</h2>
        </div>

        <form action="" method="post" role="form">
        <div class="form-row">
            <div class="col-md-6 form-group">
            <label>Name</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" value="<?php echo $row['uname']; ?>" required>
            </div>
            <div class="col-md-6 form-group">
            <label> Email</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Your email" value="<?php echo $row['email']; ?>"required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 form-group">
            <label> Phone</label>
              <input type="number" name="phone" class="form-control" id="phone" placeholder="Your Number" value="<?php echo $row['phone']; ?>" required>
            </div>
            <div class="col-md-6 form-group">
            <label> Location</label>
              <input type="text" name="location" class="form-control" id="location" placeholder="Your Location" value="<?php echo $row['location']; ?>" required>
            </div>
        </div>
        <div class="form-row">
          <div class="col-md-12 form-group">
            <label>Address</label>
              <input type="text" name="address" class="form-control" id="address" placeholder="Your Address" value="<?php echo $row['address']; ?>" required>
            </div>
         </div>

          <div class="text-center"><button class="btn appointment-btn scrollto" type="submit" name="update">Update</button></div>
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