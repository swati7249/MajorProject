<?php
include_once("config.php");
$con=connect();
//$con=mysqli_connect("localhost","root","","upermit") or die("db not connected");
$email=$_POST['email'];
$pass=$_POST['pass'];
//echo $email;
if($con)
{
    $rs=mysqli_query($con,"select * from register where Student_Email='$email' AND Password='$pass'");
        $n=mysqli_num_rows($rs);
        $r=mysqli_fetch_assoc($rs);
        if($n==1)
        {session_start();
            $_SESSION['student']=$email;
            $_SESSION["roll"]=$r['Id'];
            
            //echo "login successfull";
            header("location: inbox.php");
        }
        else{
            header("location: student.html");
        }
    
}
else
{
    echo "sorry to connect";
}
?>