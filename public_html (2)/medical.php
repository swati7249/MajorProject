<?php
include_once("config.php");
$con=connect();
//$con=mysqli_connect("localhost","root","","upermit") or die("db not connected");
$purpose=$_POST['purpose'];
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];

if($con)
{
    mysqli_query($con,"insert into medical(purpous,sdate,edate)values('$purpous','$sdate','$edate')");
    //echo "connected";
    header("location: leavetype.php");
}
else
{
    echo "sorry to connect";
}
include_once("config.php");
$con=connect();
//$con=mysqli_connect("localhost","root","","upermit") or die("db not connected");
$purpose=$_POST['purpose'];
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];

if($con)
{
    mysqli_query($con,"insert into duty(purpous,sdate,edate)values('$purpous','$sdate','$edate')");
    //echo "connected";
    header("location: leavetype.php");
}
else
{
    echo "sorry to connect";
}
include_once("config.php");
$con=connect();
//$con=mysqli_connect("localhost","root","","upermit") or die("db not connected");
$purpose=$_POST['purpose'];
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];

if($con)
{
    mysqli_query($con,"insert into sports(purpous,sdate,edate)values('$purpous','$sdate','$edate')");
    //echo "connected";
    header("location: leavetype.php");
}
else
{
    echo "sorry to connect";
}
?>