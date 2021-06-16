<?php
include('connect.php');
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
            <h1></h1>
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
                <h1 class="text-center"><b>User-Patient Report</h1></b>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">Sl no.</th>
                      <th>User Name</th>
                      <th>User Address</th>
                      <th>User Email</th>
                      <th>User Phone</th>
                      <th>User Location</th>
                      <th>Patient Name</th>
                      <th>Patient Relation</th>
                      <th>Patient  Category</th>
                      <th>Patient  Gender</th>
                      <th>Patient  Age</th>
                      <th>Patient Description</th>
                      
                    </tr>
                  </thead>
                  <tbody>
<?php
$i=1;
$sql1="SELECT * from patient p, category c, user u where p.catid=c.catid and u.uid=p.uid";
$s1=mysqli_query($con,$sql1);
while(($row=mysqli_fetch_array($s1))==TRUE)
{?>
                    <tr>
                    <td><?php echo $i++;?></td>
                    <td><?php echo $row['uname'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['phone'];?></td>
                    <td><?php echo $row['location'];?></td>
                    <td><?php echo $row['pname'];?></td>
                    <td><?php echo $row['relation'];?></td>
                    <td><?php echo $row['catname'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td><?php echo $row['age'];?></td>
                    <td><?php echo $row['desc'];?></td>
                    </tr>
<?php
}
?>
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
