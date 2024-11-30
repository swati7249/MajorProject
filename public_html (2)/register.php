<?php
include_once("config.php");
$con=connect();
//$con=mysqli_connect("localhost","root","","upermit") or die("db not connected");
$name=$_POST['name'];
$roll_no=$_POST['roll'];
$branch=$_POST['branch'];
$pemail=$_POST['pemail'];
$pcontact=$_POST['pcontact'];
$semail=$_POST['semail'];
$password=$_POST['pass'];

if($con)
{
    $otp=rand(10,1000);
    mysqli_query($con,"insert into register(Name,Roll_Number,Branch,Parent_Email,Parent_Contact,Student_Email,Password,otp)values('$name','$roll_no','$branch','$pemail','$pcontact','$semail','$password','$otp')");
    //echo "connected";
    $msg = "Please Click the Link below to confirm the your Email id and complete the registration of your child<br> 
    <a href='http://www.upermi.in/parent.php?sid=$roll_no'>Click to open the parent Page</a>\n Your OTP is : $otp";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail($pemail,"Confirm your Email Id",$msg,"Chitkara Helpdesk");
    header("location: student.html");
}
else
{
    echo "sorry to connect";
}
?>