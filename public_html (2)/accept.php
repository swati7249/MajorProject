<?php
session_start();
if(isset($_SESSION['mentor']))
{
    include_once("config.php");
    $con=connect();
    $roll=$_GET['id'];
    //$con=mysqli_connect("localhost","root","","upermit") or die("db not connected");
    $rs=mysqli_query($con,"update medical set status='accepted' where Id='$roll'");
    //header("location: ainbox.php");
    
}  
if(isset($_SESSION['mentor']))
{
    include_once("config.php");
    $con=connect();
    $roll=$_GET['id'];
    //$con=mysqli_connect("localhost","root","","upermit") or die("db not connected");
    $rs=mysqli_query($con,"update duty set status='yes' where Id='$roll'");
    header("location: ainbox.php");
    
} 
if(isset($_SESSION['mentor']))
{
    include_once("config.php");
    $con=connect();
    $roll=$_GET['id'];
    //$con=mysqli_connect("localhost","root","","upermit") or die("db not connected");
    $rs=mysqli_query($con,"update sports set status='yes' where Id='$roll'");
    header("location: ainbox.php");
    
} 

?>