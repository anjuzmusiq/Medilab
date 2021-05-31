<?php
include('connect.php');
$email=$_SESSION['email'];
$pid=$_GET['pid'];
    $sql="select * from nurse where email='$email'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
    $nid=$row['nid'];
    $sql2="select * from allocate where nid=$nid and pid=$pid and status=4";
    $result2=mysqli_query($con,$sql2);
    if(mysqli_num_rows($result2)>0)
    {
        echo"<script>
        window.location='nurse_request.php';
        alert(' Already declined!!');
        </script>";
    }
    $sql5="UPDATE `allocate` SET  `status`=4 WHERE pid='$pid' and nid=$nid";
    $result5=mysqli_query($con,$sql5);
    if($result5==TRUE)
    {
    echo"<script>
    window.location='nurse_request.php';
    alert('Request declined Successfully');
    </script>";
    }
    else
    {
    echo"<script>alert('Request declined Failed');
    window.location='salary.php';
    </script>";
    }

?>