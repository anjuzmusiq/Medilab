<?php
include('connect.php');
//female
$femalesql="SELECT COUNT(p.pid) from patient p, category c where p.catid=c.catid and  p.gender='Female'";
$femaleresult=mysqli_query($con,$femalesql);
$femalerow=$femalerow=mysqli_fetch_array($femaleresult);
//male
$malesql="SELECT COUNT(p.pid) from patient p, category c where p.catid=c.catid and  p.gender='Male'";
$maleresult=mysqli_query($con,$malesql);
$malerow=mysqli_fetch_array($maleresult);
//patients
$patientsql="SELECT COUNT(p.pid) from patient p";
$patientresult=mysqli_query($con,$patientsql);
$patientrow=mysqli_fetch_array($patientresult);
//active patients
$actpatientsql="SELECT COUNT(p.pid) from patient p where p.status=1";
$actpatientresult=mysqli_query($con,$actpatientsql);
$actpatientrow=mysqli_fetch_array($actpatientresult);
//inactive patients
$inactpatientsql="SELECT COUNT(p.pid) from patient p where p.status=0";
$inactpatientresult=mysqli_query($con,$inactpatientsql);
$inactpatientrow=mysqli_fetch_array($inactpatientresult);
//nurses
$nursesql="SELECT COUNT(n.nid) from nurse n";
$nurseresult=mysqli_query($con,$nursesql);
$nurserow=mysqli_fetch_array($nurseresult);
//active nurses
$actnursesql="SELECT COUNT(n.nid) from nurse n where n.status=1";
$actnurseresult=mysqli_query($con,$actnursesql);
$actnurserow=mysqli_fetch_array($actnurseresult);
//inactive nurses
$inactnursesql="SELECT COUNT(n.nid) from nurse n where n.status=0";
$inactnurseresult=mysqli_query($con,$inactnursesql);
$inactnurserow=mysqli_fetch_array($inactnurseresult);
//users
$usersql="SELECT COUNT(u.uid) from user u";
$userresult=mysqli_query($con,$usersql);
$userrow=mysqli_fetch_array($userresult);
//active users
$actusersql="SELECT COUNT(u.uid) from user u where u.status=1";
$actuserresult=mysqli_query($con,$actusersql);
$actuserrow=mysqli_fetch_array($actuserresult);
//inactive users
$inactusersql="SELECT COUNT(u.uid) from user u where u.status=0";
$inactuserresult=mysqli_query($con,$inactusersql);
$inactuserrow=mysqli_fetch_array($inactuserresult);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Medilab | Reports</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <?php
include('side_bar.php');
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Simple Tables</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 200px; text-align:center;">Sl.No</th>
                      <th style="width: 700px">Category</th>
                      <th style="">Count</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td style="text-align:center;">1.</td>
                      <td>Number of Patients</td>
                      <td><?php echo $patientrow[0];?></td>
                    </tr>
                    <tr>
                      <td style="text-align:center;">2.</td>
                      <td>Number of Users</td>
                      <td><?php echo $userrow[0];?></td>
                    </tr>
                    <tr>
                      <td style="text-align:center;">3.</td>
                      <td>Number of Nurses</td>
                      <td><?php echo $nurserow[0]; ?></td>
                    </tr>
                    <tr>
                      <td style="text-align:center;">4.</td>
                      <td>Number of Active Nurses</td>
                      <td><?php echo $actnurserow[0]; ?></td>
                    </tr> 
                    <tr>
                      <td style="text-align:center;">5.</td>
                      <td>Number of Inactive Nurses</td>
                      <td><?php echo $inactnurserow[0]; ?></td>
                    </tr>
                    <tr>
                      <td  style="text-align:center;">6.</td>
                      <td>Number of Active Users</td>
                      <td><?php echo $actuserrow[0];?></td>
                    </tr>
                    <tr>
                      <td style="text-align:center;">7.</td>
                      <td >Number of Inactive Users</td>
                      <td><?php echo $inactuserrow[0];?></td>
                    </tr>
                    <tr>
                      <td style="text-align:center;">8.</td>
                      <td >Number of Active Patients</td>
                      <td><?php echo $actpatientrow[0];?></td>
                    </tr>
                    <tr>
                      <td style="text-align:center;">9.</td>
                      <td >Number of InActive Patients</td>
                      <td><?php echo $inactpatientrow[0];?></td>
                    </tr>
                    <tr>
                      <td style="text-align:center;">10.</td>
                      <td >Number of Female Patients</td>
                      <td><?php echo $femalerow[0]; ?></td>
                    </tr>
                    <tr>
                      <td style="text-align:center;">11.</td>
                      <td >Number of Male Patients</td>
                      <td><?php echo $malerow[0]; ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                
              </div>
            </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
