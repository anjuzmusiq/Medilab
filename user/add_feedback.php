<?php
include('connect.php');
$email=$_SESSION['email'];
$sql1="SELECT * from user where email='$email'";
$result1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($result1);
$uid=$row1['uid'];
if(isset($_POST['add']))
{   
    $nid=$_POST['nid'];
    $pid=$_POST['pid'];
    $feedback=$_POST['feedback'];
    $sql5="INSERT INTO `user_feedback`(`pid`, `uid`, `nid`, `comment`) VALUES ($pid,$uid,$nid,'$feedback')";
    $result5=mysqli_query($con,$sql5);
    if($result5==TRUE)
    {
    echo"<script>
    alert('Feedback sent Successfull');
    window.location='add_feedback.php';
    </script>";
    }
    else
    {
    echo"<script>alert('Feedback sent Failed');
    window.location='add_feedback.php';
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
      <div class="container bg-white" style="margin-top:170px;margin-bottom:37px;padding:20px;">

        <div class="section-title">
          <h2>FEEDBACK</h2>
        </div>

        <form action="" method="post" role="form">
        
          
          <div class="form-row">
            <div class="col-md-12 form-group">
                <select name="nid" id="nid" class="form-control"required>
                    <option value="">Nurse Name</option>
<?php

$sql2="SELECT * from allocate,nurse where allocate.nid=nurse.nid and allocate.uid=$uid and nurse.status=1 and nurse.final_status=1";
$result2=mysqli_query($con,$sql2);
while(($row2=mysqli_fetch_array($result2))==TRUE)
{?>
                    <option value="<?php echo $row2['nid'];?>"><?php echo $row2['nname'];?></option>
<?php
}
?>
                </select>
            </div>
         </div>
         <div class="form-row">
            <div class="col-md-12 form-group">
                <select name="pid" id="pid" class="form-control"required>
                    <option value="">Patient Name</option>
<?php
$nid=$row2['nid'];
$sql3="SELECT * from allocate,patient where allocate.pid=patient.pid and allocate.uid=$uid and patient.status=1 and  patient.final_status=1";
$result3=mysqli_query($con,$sql3);
while(($row3=mysqli_fetch_array($result3))==TRUE)
{?>
                    <option value="<?php echo $row3['pid'];?>"><?php echo $row3['pname'];?></option>
<?php
}
?>
                </select>
            </div>
         </div>
            <div class="form-row">
                <div class="col-md-12 form-group">
                <textarea rows="5" cols="20" name="feedback" class="form-control" id="feedback" placeholder="Enter Your Feedback" required></textarea>
                </div>
            </div>
            
          <div class="text-center"><button class="btn appointment-btn scrollto" type="submit" name="add">Add</button></div>
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