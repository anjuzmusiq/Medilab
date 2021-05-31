<?php
include('connect.php');
$email=$_SESSION['email'];
$nid=$_GET['nid'];
    $sql="select * from user where email='$email'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
    $uid=$row['uid'];
    $sql2="select * from allocate where uid=$uid and nid=$nid and status=2";
    $result2=mysqli_query($con,$sql2);
    if(mysqli_num_rows($result2)>0)
    {
        echo"<script>
        window.location='selected_nurses.php';
        alert(' Already Selected by you!!');
        </script>";
    }
    $sql5="UPDATE `allocate` SET `status`=2 WHERE uid='$uid' and nid=$nid";
    $result5=mysqli_query($con,$sql5);
    $sql6="UPDATE `nurse` SET `final_status`=1 WHERE nid=$nid";
    $result6=mysqli_query($con,$sql6);
    $sql7="UPDATE `patient` SET `final_status`=1 WHERE uid=$uid";
    $result7=mysqli_query($con,$sql7);
    if(($result5==TRUE)&&($result6==TRUE)&&($result7==TRUE))
    {
    echo"<script>
    window.location='selected_nurses.php';
    alert('Nurse selected Successfully');
    </script>";
    }
    else
    {
    echo"<script>
    window.location='selected_nurses.php';
    alert('Nurse selection Failed');
    </script>";
    }

?>