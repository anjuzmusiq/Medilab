<?php
include('connect.php');
$email=$_SESSION['email'];
$sql="select * from patient p,category c where c.catid=p.catid and p.uemail='$email' and p.status=1 and p.final_status=0";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
if(mysqli_num_rows($result)>0)
{
if(isset($_POST['update']))
{   
    $pname=$_POST['pname'];
 
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $desc=$_POST['desc'];
    $from=$_POST['from'];
    $to=$_POST['to'];    
    $category=$_POST['category'];
    

    $sql5="UPDATE `patient` SET `pname`='$pname',`gender`='$gender',`age`='$age',`catid`='$category',`desc`='$desc',`from`='$from',`to`='$to' WHERE uemail='$email'";
    $result5=mysqli_query($con,$sql5);
    if($result5==TRUE)
    {
    echo"<script>alert('Patient Updated Successfull');
    window.location='view_patient.php';
    </script>";
    }
    else
    {
    echo"<script>alert('Patient Updated Failed');
    window.location='view_patient.php';
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
          <h2>Patient Profile</h2>
        </div>

        <form action="" method="post" role="form">
        <div class="form-row">
            <div class="col-md-6 form-group">
            <label> Name</label>
              <input type="text" name="pname" class="form-control" id="pname" placeholder="Your Name" value="<?php echo $row['pname']; ?>" required>
            </div>
            <div class="col-md-6 form-group">
            <label>Relation</label>
              <input type="text" name="relation" class="form-control bg-white" id="relation" placeholder="Your Relation" value="<?php echo $row['relation']; ?>" disabled required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 form-group">
            <label> Gender</label>
            <select name="gender" class="form-control" id="exampleFormControlSelect1">
                                                        <?php
                                                            if ($row['gender'] == Male) $genderFlag = 0;
                                                                else if ($row['gender'] == Female) $genderFlag = 1;
                                                        ?>
                                                        <option value="Male"<?php if ($genderFlag == 0) echo "selected" ?>> Male</option>
                                                        <option value="Female"<?php if ($genderFlag == 1) echo "selected" ?>> Female</option>
            </select>
            </div>
            <div class="col-md-6 form-group">
            <label> Age</label>
              <input type="number" name="age" class="form-control" id="age" placeholder="Your Age" value="<?php echo $row['age']; ?>" maxlength="3" required>
            </div>
        </div>
        <div class="form-row">
      <div class="col-md-6 form-group">
            <label>From</label>
              <input type="date" name="from" class="form-control" id="from" placeholder=" From" value="<?php echo $row['from']; ?>" required>
          </div>
          <div class="col-md-6 form-group">
            <label> To</label>
              <input type="date" name="to" class="form-control" id="to" placeholder="To" value="<?php echo $row['to']; ?>" required>
        </div>
        </div>
        <div class="form-row">
        <div class="col-md-12 form-group">
        <label> Category</label>
        <select class="form-control" name="category" id="formGroupDefaultSelect" aria-describedby="emailHelp"required>
<?php
$sql4="SELECT * from category where status=1";
$s4=mysqli_query($con,$sql4);
while(($row4=mysqli_fetch_array($s4))==TRUE)
{?>	
													<option value="<?php echo $row4['catid'];?>"<?php if($row4['catname']==$row['catname']) echo "selected" ?>><?php echo $row4['catname'];?></option>
<?php
}
?>
												</select>
                </div>
            </div>
        <div class="form-row">
        <div class="col-md-12 form-group">
            <label>Description</label>
              <input type="text" name="desc" class="form-control" id="desc" placeholder="Your Description" value="<?php echo $row['desc']; ?>" required>
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
<?php
}
else{
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
          <h2 class="text-center">No Patient added!!</h2>
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