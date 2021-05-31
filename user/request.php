<?php
include('connect.php');
$email=$_SESSION['email'];
$nid = $_GET['nid'];
    if(isset($_GET['nid']))
    {
        $sql="SELECT * from user where email='$email'";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result);
        $uid=$row['uid'];
        $sql1="SELECT * from patient where uid=$uid and status=1";
        $result1=mysqli_query($con,$sql1);
        $row1=mysqli_fetch_array($result1);
        if(mysqli_num_rows($result1)<1)
        {
            echo"<script>
            alert('Please add a patient to select the nurse');
            window.location='add_patient.php';
            </script>";
        }
        else
        {
            $pid=$row1['pid'];
            $sql3="SELECT * from allocate where uid=$uid and pid=$pid and nid=$nid";
            $result3=mysqli_query($con,$sql3);
            $row3=mysqli_fetch_array($result3);
            if(mysqli_num_rows($result3)>0)
            {
                echo"<script>
                alert('This nurse is already selected');
                window.location='nurse_list.php';
                </script>";
            }
            else{
            $sql2="INSERT INTO `allocate`(`uid`, `nid`, `pid`, `status`) VALUES ($uid,$nid,$pid,0)";
            $result2=mysqli_query($con,$sql2);
                if($result2==TRUE)
                {
                    echo"<script>alert('Nurse is Selected');
                    window.location='nurse_list.php'; 
                    </script>";
                }
                else{
                        echo"<script>alert('Nurse selection failed');
                        window.location='nurse_list.php';
                        </script>";
                    }
            }
        }
    }
?>