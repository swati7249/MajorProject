<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
    margin:0; 
    padding:0;
    box-sizing:border-box;
    font-family:'poppins',sans-serif;
 }
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
    <style>
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
     margin-right: 30px;
 }
 .logo img{
  width:50px;
  height:39px;
  display:flex;
  margin-top:3%;
  align-items:left;
  margin-right: 30px;

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
     width:400px;
     height:440px;
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
     font-size:2em;
     color:#eee;
     text-align:center;
 }
 .input-box{
     position:relative;
     width:100%;
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
 .remember-forgot{
     font-size:.9em;
     color:white;
     font-weight:500;
     margin:-15px 0 15px;
     display:flex;
     justify-content:space-between;
 }
 .remember-forgot label input{
     accent-color:#fff;
     margin-right:3px;
 }

 
        </style>
</head>

<body>
    <header>
        <ul>
            <div class="logo"><img src="logo.jpg"></div>
        </ul>
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
            <h2>ADMIN PANEL</h2>
            <form action="admin.php" method="post">
              
                
                <div class="input-box">
                    <span class="icon"><ion-icon ></ion-icon></span>
                    <input type="email" required name="mail">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon ></ion-icon></span>
                    <input type="password" required name="pass">
                    <label>Password</label>
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
if(isset($_POST["b1"])){
    include_once ("config.php");
    $con = connect();
    //$con=mysqli_connect("localhost","root","","upermit") or die("db not connected");
   
    
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    //echo $email;
    
    /// $email=$_SESSION['student'];
    $rs = mysqli_query($con, "select * from mentor where m_email='$mail' AND m_password='$pass'");
    $n=mysqli_num_rows($rs);
    if($n==1){
        session_start();
        $_SESSION['mentor']=$mail;
        header("location: ainbox.php");
    }
    else{
        header("location: admin.php");
    }

    ///$r=mysqli_fetch_assoc($rs);
   //// header("location: inbox.php");
    
}
?>