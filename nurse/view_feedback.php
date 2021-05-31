<?php
include('connect.php');
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
    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors" style="margin-top:100px;">
      <div class="container">

        <div class="section-title">
          <h2>Feedback</h2>
        </div>

        <div class="row">
<?php
$email=$_SESSION['email'];
$sql="SELECT * from nurse where email='$email'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$nid=$row['nid'];
$sql1="SELECT * from user_feedback f,patient p,nurse n where f.nid=n.nid and f.pid=p.pid and f.nid=$nid;";
$s1=mysqli_query($con,$sql1);
while(($row=mysqli_fetch_array($s1))==TRUE)
{?>
          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="../assets/img/doctors/avatar.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h3>Patient Name:<?php echo $row['nname'];?></h3>
                <span></span><br>
                <h5>Feedback: <?php echo $row['comment']; ?></h5>
              </div>
            </div>
          </div>
<?php
}
?>


        </div>

      </div>
    </section><!-- End Doctors Section -->
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