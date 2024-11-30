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
     height:500px;
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
 .form-box h3{
     font-size:1.5em;
     color:#eee;
     text-align:center;
     margin-bottom:10% ;
 }
 .input-box{
     top:60%;
     left:5px;
     font-size:1em;
     color:white;
     font-weight:500;
     margin-bottom:10%;
  
 }
 .input-box .btn{
    border-radius:50px;
    border-width:2px;
    border-color: #fff;
    height:25px;
    width:40%;
    margin-top:10%;

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
            <button class="btnlogin-popup">LOGIN</button>
        </nav>
    </header>
    <div class="wrapper">
        <div class="form-box login">
            <h2>Leave Extension</h2>
            <h3>User Information:</h3>
            <form> 
                <div class="input-box">
                    <label>Name:</label><br><br>
                    <label>Branch:</label><br><br>
                    <label>End-Date After Extension:</label><br><br>
                  
                    <center><button type="Print" class="btn">Print PDF</button> </center>   
                                            
                 </div>
            </form>
        </div>
    </div>

</body>
</html>