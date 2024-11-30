<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="parent.css">
    <style>
        *{
    /* margin:0; 
    padding:0; */
    box-sizing:border-box;
    font-family:'poppins',sans-serif;
 } 
 body{
  display:flex;
     justify-content:center;
     align-items:center;
     min-height:50vh;
     background:url('back.jpg') no-repeat;
     background-size:cover;
     background-position:center;
 
 }
 header{
     position:fixed;
     top:0;
     left:0;
     height:5%;
     width:100%;
     padding:20px 100px;
     background:#db0505e0;
     display:flex;
     justify-content:space-between;
     align-items:center;
     z-index:99;
 
 }
 .logo {
    margin-left:-65%;
    padding: 0; /* Remove padding */
    font-size: 2em;
    color: #fff;
    user-select: none;
    display: flex;
    align-items: center;
}

.logo img {
    margin-top: 0px;
    width: 50px;
    height: 35px;
    margin-left:135px; /* Adjusted margin-left */
}

 .navigation a{
     position:relative;
     font-size:1.1em;
     color:#fff;
     text-decoration:none;
     font-weight:500;
     margin-right:20px;
     
 }
 .navigation a::after{
     content:'';
     position:absolute;
     left:0;
     bottom:-6px;
     width: 100%;
     height:3px;
     background:#fff;
     border-radius:5px;
     transform-origin:right;
     transform:scaleX(0);
     transition:transform.5s;
 }
 .navigation a:hover::after{
     transform-origin:left;
    transform:scaleX(1);
 }
    </style>
</head>
<body>
    <header>
        <ul><div class="logo"><img src="logo.jpg"></div></ul>
        <h2 class="logo">UPERMIT</h2>
       
        <nav class="navigation">
            
            <a href="https://www.chitkara.edu.in/">HOME</a>
            <a href="#">ABOUT</a>
            <a href="#">SERVICES</a>
            <a href="https://bfsi.chitkara.edu.in/contact-us/">CONTACT</a>
            
        </nav>
        
    </header>
    <div class="wrapper">
        <div class="form-box login">
            <h2>PARENT PANEL</h2>
            <form action="parent.php" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span> 
                    <input type="text" required name="otp">   
                    <label>Otp</label>           
                 </div>
                 
                 
                    <center><button type="Submit" class="btn" name="b1">submit</button></center>
                  
                       
                
            </form>
        </div>
    </div>
    
    
    
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php 
if(isset($_POST['b1']))
{
include_once("config.php");
$con=connect();
//$con=mysqli_connect("localhost","root","","upermit") or die("db not connected");
$otp=$_POST['otp'];


if($con)
{
$n=mysqli_query($con,"update register set Status='yes'where otp='$otp'");
 if($n==1)
 {
    echo "<script>alert('Congrats your otp is matched')</script>";
 }
}
else
{
    echo "sorry to connect";
}
}

?>