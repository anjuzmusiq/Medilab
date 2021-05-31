<?php
include('connect.php');
if(isset($_POST['add']))
{   $email=$_SESSION['email'];
    $pname=$_POST['pname'];
    $relation=$_POST['relation'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $desc=$_POST['desc'];
    $category=$_POST['category'];
    $from=$_POST['from'];
    $to=$_POST['to'];

    $sql5="INSERT INTO `patient`(`cid`, `pname`, `relation`, `uemail`, `gender`, `age`, `desc`, `from`, `to`, `status`) VALUES ($category,'$pname','$relation','$email','$gender','$age','$desc','$from','$to',1)";
    $result5=mysqli_query($con,$sql5);
    if($result5==TRUE)
    {
    echo"<script>
    alert('Patient Registration Successfull');
    window.location='add_patient.php';
    </script>";
    }
    else
    {
    echo"<script>alert('Patient Registation failed');
    window.location='add_patient.php';
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
    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors" style="margin-top:100px;">
      <div class="container">

        <div class="section-title">
          <h2>Patient's Requested</h2>
        </div>

        <div class="row">
<?php
$email=$_SESSION['email'];
$sql="SELECT * from nurse where email='$email'";
$result=mysqli_query($con,$sql);
$row1=mysqli_fetch_array($result);
$nid=$row1['nid'];
$sql1="SELECT * from allocate a,patient p,user u where a.pid=p.pid and a.uid=u.uid and p.status=1 and nid=$nid and a.status!=4;";
$s1=mysqli_query($con,$sql1);
while(($row=mysqli_fetch_array($s1))==TRUE)
{?>
          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="../assets/img/doctors/avatar.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h3>User name: <?php echo $row['uname'];?></h3>
                <span>Email: <?php echo $row['email']; ?></span>
                <p>Phone: <?php echo $row['phone']; ?></p>
                <p>Location: <?php echo $row['location']; ?></p>
                <p>Address:<?php echo $row['address']; ?></p><br>
                <h3>Patient name: <?php echo $row['pname'];?></h3>
                <p>Relation: <?php echo $row['relation']; ?></p>
                <p>Phone: <?php echo $row['gender']; ?></p>
                <p>Age: <?php echo $row['age']; ?></p>
                <p>Description: <?php echo $row['desc']; ?></p> 
                <p>From: <?php echo $row['from']; ?></p>
                <p>To: <?php echo $row['to']; ?></p>
                <p class="text-danger">Status: <?php if($row[5]==0)echo"Request Sent by User"; else if($row[5]==1)echo"Request Accepted and Salary sent"; else if($row[5]==2)echo"You are Accepted"; else if($row[5]==3) echo"Rejected by user"; else if($row[5]==4) echo"Rejected by You"?></p>
                <?php if($row[5]==0) {?><div class="text-center"><a href="salary.php?pid=<?php echo $row['pid'];?>"><button type="button" class="btn appointment-btn mt-4" name="select">Accept</button></a><?php } ?>
                <?php if($row[5]==0) {?><a href="decline.php?pid=<?php echo $row['pid'];?>"><button type="button" class="btn bg-danger appointment-btn mt-4 ml-2" name="decline">Decline</button></a><?php } ?></div>
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