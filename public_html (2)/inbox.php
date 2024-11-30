<?php
session_start();
if(isset($_SESSION['student']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>{
    margin:0; 
    padding:0;
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
     height:5px;
     width:100%;
     padding:20px 100px;
     background:#db0505e0;
     display:flex;
     justify-content:space-between;
     align-items:center;
     z-index:99;
 
 }
 .logo{
     font-size:2em;
     color:#fff;
     user-select:none;
 }
 .logo img{
     width:50px;
     height:39px;
     display:flex;
     margin-top:3%;
     align-items:left;
     
   
    }
 .navigation a{
     position:relative;
     font-size:1.1em;
     color:#fff;
     text-decoration:none;
     font-weight:500;
     margin-left:40px;
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
 
 .navigation .btnlogin-popup{
     width:130px;
     height:30px;
     background:transparent;
     border:2px solid #fff;
     outline:none;
     border-radius:5px;
     cursor:pointer;
     font-size:1.1em;
     color:#fff;
     font-weight:500;
     margin-left:40px;
     transition:.5s;
 }
 .navigation .btnlogin-popup:hover{
       background:#fff;
       color:#162938;
 
 }
 .wrapper{
     position:relative;
     width:550px;
     height:550px;
     background:blur;
     border:2px solid rgba(255,255,255,.5);
     border-radius:20px;
     backdrop-filter:blur(20px);
     box-shadow:0 0 30px rgba(0,0,0,.5);
     display:flex;
     justify-content:center;
     align-items:center;
     margin-top: 100px; ;
 }
 .wrapper .form-box{
     top:50%;
     width:100%;
     padding:40px;
 }
 .form-box h2{
     font-size:55px;
     color:#eee;
     text-align:center;
     margin-top: 1px;
     padding: 0px;
 }
 .form-box h3{
     font-size:25px;
     color:#eee;
     text-align:center;
   
 }

.heading{
    font-size:20px ;
}
 .form-box {
    font-size:20 px;
    color:#eee;
    text-align:center;
    
}
 .input-box{
     position:relative;
     width:200px;
     height:50px;
     border-bottom:2px solid black;
     margin:30px 0;
 }
 .input-box label{
     position:absolute;
     top:50%;
     left:5px;
     transform:translative(-50%);
     font-size:1em;
     color:white;
     font-weight:500;
     pointer-events:none;
     transition:.5s;
 }
 .input-box input:focus~label,
 .input-box input:valid~label{
     top:-5px;
 
 }
 .input-box input{
     width:100%;
     height:100%;
     background:transparent;
     border:none;
     outline:none;
     font-size:1em;
     color:white;
     font-weight:600;
     padding:0 35px 0 5px
 
 }
 .input-box .icon{
     position:absolute;
     right:8px;
     font-size:1.2em;
     color:white;
     line-height:57px;
 }
 .input-box{
    width: 300px;
    height: 20px;
 }
 #name{
    color:aquamarine;
 }
 </style>
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
            <a href="#">HOME</a>
            <a href="#">ABOUT</a>
            <a href="#">SERVICES</a>
            <a href="#">CONTACT</a>
           
        </nav>
    </header>
    <div class="wrapper">
        <div class="form-box login">
            
            <h2 >Welcome to the Dashboard</h2>
            
            <?php
            include "config.php";
            $con=connect();
            $email=$_SESSION['student'];
            $rs=mysqli_query($con,"select * from register where Student_Email='$email'");
            $r=mysqli_fetch_assoc($rs);
            ?>
            <h3>Name : <?php echo $r['Name'];?></h3>
            <h3>Roll_No : <?php echo $r['Roll_Number'];?></h3><br>
             <b> <a href="checkstatus.php" class="" style="color:white">Check Approved Requests</a><br><br><!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                <!-- <a href="" class="" style="color:white">Return to campus</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                <!-- <a href="leaveextensionrequest.php" class="" style="color:white">Leave Extension</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><br><br> -->

                <form action="leavetype.php" method="post">
                
                 <div class="heading">
                    <label><b>Type-of-Leave:</b></label>
                </div>
                    
                 <select name="leave" id="leave" style="width:100%;border-radius:10px;">
                    <option value="type"></option>
                    <option value="Medical-Leave">
                        Medical-Leave
                    </option>
                    <option value="Duty-Leave">
                        Duty-Leave
                    </option>
                    <option value="Sport-Leave">
                        Sport-Leave
                    </option>
                </select>
                 <br><br>
                <center> <input type="submit" name="submit"></<input></center>

                 
                 
                
            </form>
        </div>
    </div>

</body>
</html>
<?php

}
else{
    header("location: student.html");
}
?>
