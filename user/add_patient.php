<?php
include('connect.php');
$email=$_SESSION['email'];
$sql="SELECT * from user where email='$email'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$uid=$row['uid'];
$sql1="SELECT * from patient where uid=$uid and status=1";
$s1=mysqli_query($con,$sql1);
if((mysqli_num_rows($s1))<1)
{
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

    $sql5="INSERT INTO `patient`(`uid`, `pname`, `relation`, `uemail`, `gender`, `age`, `desc`, `from`, `to`, `status`) VALUES ($category,'$pname','$relation','$email','$gender','$age','$desc','$from','$to',1)";
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
                    <!-- ======= Appointment Section ======= -->
    <section id="hero" class="appointment section-bg" >
      <div class="container bg-white" style="margin-top:100px;padding:20px;">

        <div class="section-title">
          <h2>Patient Registration</h2>
        </div>

        <form action="" method="post" role="form">
        <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="pname" class="form-control" id="pname" placeholder="Patient Name" required>
            </div>
            <div class="col-md-6 form-group">
              <input type="number" name="age" class="form-control" id="age" placeholder="Age"maxlength="3" required>
            </div>
            
          </div>
          <div class="form-row">
          <div class="col-md-6 form-group">
              <select name="relation" id="Relation" class="form-control"required>
                <option value="">Relation</option>
                <option value="Father">Father</option>
                <option value="Mother">Mother</option>
                <option value="Brother">Brother</option>
                <option value="Sister">Sister</option>
                <option value="Grand Father">Grand Father</option>
                <option value="Grand Mother">Grand Mother</option>
                <option value="Cousin">Cousin</option>
                <option value="Friend">Friend</option>
              </select>
            </div>
            <div class="col-md-6 form-group">
              <select name="gender" id="gender" class="form-control"required>
                <option value="">Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-12 form-group">
                <select name="category" id="category" class="form-control"required>
                    <option value="">Category</option>
<?php
$sql="SELECT * from category";
$result=mysqli_query($con,$sql);
while(($row=mysqli_fetch_array($result))==TRUE)
{?>
                    <option value="<?php echo $row['catid'];?>"><?php echo $row['catname'];?></option>
<?php
}
?>
                </select>
            </div>
         </div>
            <div class="form-row">
                <div class="col-md-12 form-group">
                <textarea rows="5" cols="20" name="desc" class="form-control" id="desc" placeholder="Description" required></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 form-group">
                <label>Duration from</label>
              
                <input type="date" name="from" class="form-control" id="from" placeholder="Duration From" required>
                </div>
                <div class="col-md-6 form-group">
                <label>Duration To</label>
                <input type="date" name="to" class="form-control" id="to" placeholder="Duration From" required>
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
<?php
}
else
{
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
        <div class="container bg-white" style="margin-top:216px;margin-bottom:250px;padding:20px;">
  
          <div class="section-title">
            <h2>Patient Registration</h2>
          </div>
  
          <form action="" method="post" role="form">
          <h2 class="text-center">You have already added a patient!!!</h2>
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
<?php
}
?>