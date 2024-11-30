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
    <link rel="stylesheet" href="leavetype.css">
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
            <button class="btnlogin-popup">LOGOUT</button>
        </nav>
    </header>
    <div class="wrapper">
        <div class="form-box login">
            <h2>Welcome to the Dashboard</h2>
            <?php
            include "config.php";
            $con=connect();
            $leave=$_POST["leave"];
            $email=$_SESSION['student'];
            $rs=mysqli_query($con,"select * from register where Student_Email='$email'");
            $r=mysqli_fetch_assoc($rs);
           $sid=$r['Id'];
            ?>
            <h2>Name : <?php echo $r['Name'];?></h2>
            <h2>Roll_No : <?php echo $r['Roll_Number'];?></h2>
            <?php
            if($leave=="Medical-Leave")
            { 
                ?>
                <h2>Medical-Leave</h2>
                <form action="leavetype1.php" method="post" enctype="multipart/form-data">
                
                <div class="input-box">
                    <span class="icon"><ion-icon name="name"></ion-icon></span>  
                    <label>Purpose of leave</label>
                    <select name="purpose">
                       <option value="Svere inury">Svere Injury</option>
                       <option value="Back Pain">Back Pain</option>
                       <option value="Svere inury">Right area</option>
            </select>           
                 </div>
                 <div>
                 <label >Start-date : <input type="date" name="sdate" required></label>
                       
                              
                 </div><br>
                 <div>
                 <label >End-date : <input type="date" name="edate" required></label>
                 <br><br>
                 <label >Upload PDF : <input type="file" name="upload" required></label> 
                       
                              <input type="hidden" name="id" value="<?php echo $sid;?>"
                 </div><br><br>
                 
               <center> <input type="submit" name="Apply for Leave" value="Apply for Leave"> </<input></center>

                
                
               
           </form>
                <?php

            }
            else if($leave=="Duty-Leave")
            {
                ?>
                <h2>Duty-Leave</h2>
                
                <form action="leavetype2.php" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="name"></ion-icon></span> 
                    <input type="text" name="purpose" required>   
                    <label>Purpose of leave</label>           
                 </div>
                 
                 <div>
                 <div>
                 <label >Name of assoiated teacher : <input type="text" name="teacher" required></label> 
                       
                              
                 </div><br>
                 <label >From lecture no. : <input type="number" name="flecture" required></label>
                       
                              
                 </div><br>
                 <div>
                 <label >To lecture no. : <input type="number" name="tlecture" required></label> 
                       
                              
                 </div><br>
                 <div>
                 <label >Date : <input type="date" name="date" required></label> 
                       
                 <input type="hidden" name="id" value="<?php echo $sid;?>"   
                 </div><br>
                 
                 
                <center> <input type="submit" name="submit"></<input></center>

                 
                 
                
            </form>
                <?php

            }
            else if($leave=="Sport-Leave")
            {
                ?>
                <h2>Sport-Leave</h2>
                <form action="leavetype3.php" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="name"></ion-icon></span> 
                    <input type="text" name="purpose" required>   
                    <label>Purpose of leave</label>           
                 </div>
                 <div>
                 <div>
                 <label >Name of assoiated teacher : <input type="text" name="teacher" required></label> 
                       
                              
                 </div><br>
                 <label >From lecture no. : <input type="number" name="flecture" required></label>
                       
                              
                 </div><br>
                 <div>
                 <label >To lecture no. : <input type="number" name="tlecture" required></label> 
                       
                              
                 </div><br>
                 <div>
                 <label >Date : <input type="date" name="date" required></label> 
                       
                 <input type="hidden" name="id" value="<?php echo $sid;?>"
                 </div><br>
                 
                <center> <input type="submit" name="submit"></input></center>

                 
                 
                
            </form>
                <?php

            }
            ?>
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
