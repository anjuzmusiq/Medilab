<?php
include('connect.php');
$email=$_SESSION['email'];
$nid=$_GET['nid'];
    $sql="select * from user where email='$email'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
    $uid=$row['uid'];
    $sql2="select * from allocate where uid=$uid and nid=$nid and status=3";
    $result2=mysqli_query($con,$sql2);
    if(mysqli_num_rows($result2)>0)
    {
        echo"<script>
        window.location='selected_nurses.php';
        alert(' Already declined!!');
        </script>";
    }
    $sql5="UPDATE `allocate` SET  `status`=3 WHERE uid='$uid' and nid=$nid";
    $result5=mysqli_query($con,$sql5);
    if($result5==TRUE)
    {
    echo"<script>
    window.location='selected_nurses.php';
    alert('Salary declined Successfully');
    </script>";
    }
    else
    {
    echo"<script>
    window.location='selected_nurses.php';
    alert('Salary decline Failed');
    </script>";
    }

?>