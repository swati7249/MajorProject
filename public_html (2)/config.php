<?php
function connect()
{
    $con=mysqli_connect("localhost","u425619277_root","Upermit1234","u425619277_upermit") or die("db not connected");
    return $con;
}
?>