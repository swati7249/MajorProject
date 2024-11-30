<?php
session_start();
if (isset($_SESSION['mentor'])) {
    include_once ("config.php");
    $con = connect();
    //$con=mysqli_connect("localhost","root","","upermit") or die("db not connected");
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Check Status</title>
        <link rel="stylesheet" href="ainbox.css">
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
            <ul>
                <div class="logo"><img src="logo.jpg"></div>
            </ul>
            <h2 class="logo">UPERMIT</h2>
            <nav class="navigation">
                <a href="#">HOME</a>
                <a href="#">ABOUT</a>
                <a href="#">SERVICES</a>
                <a href="#">CONTACT</a>
                <button class="btnlogin-popup">LOGIN</button>
            </nav>
        </header>
        <div style="width: 98vw;" class="wrapper">
            <div class="form-box login">
                <h2 style="font-size: 50px;">APPLIED FOR LEAVE</h2>
                <b style="font-size: 30px;"> <a href="" class="" style="color:white">Check Approved
                        Request</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="" class="" style="color:white">Leave Extension
                        Request</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="" class="" style="color:white">Sports leave</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="" class="" style="color:white">Duty Leave
                        </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><br><br>
            

                <table border=1 width=100%>
                <thead>
                    <tr>
                        <td>Roll No</td>
                        <td>Start Date </td>
                        <td> End Date </td>
                        <td>Purpose</td>
                        <td>Status</td>
                        <td>Document</td>
                        <td>Leave Extension</td>
</tr>
</thead>
<tbody>
    

                <?php
                if ($con) {
                    if ($_SESSION['mentor'] == "mentor1@gmail.com") {
                        $roll=$_SESSION["roll"];
                        $rs = mysqli_query($con, "select * from medical where Id<=15 and status='accepted'and Id='$roll' ");
                         ///$rs = mysqli_query($con, "select * from medical where Id<=15 and status='accepted' ");
                        while ($r = mysqli_fetch_assoc($rs)) {

                            ?>
                            <tr>
                                <td>
                                    <?php echo $r['Id'];
                                    $roll = $r['Id'];
                                    ?>
                                    </td>
                                 <td>   
                                    <?php echo $r['sdate']; ?>
                        </td>
                                <td>
                                    <?php echo $r['edate']; ?>
                        </td>
                                <td>
                                    <?php echo $r['purpose']; ?>
                        </td>
                         <td>
                                    <?php echo $r['status']; ?>
                        </td>
                        <td>
                         <a href="pdf/<?php echo $r['filename'];?>">           <?php echo $r['filename']; ?></a>
                        </td>
                        <td>
                                    <a href="leaveextensionrequest.php" class="btn btn-danger">Leave Extension</a>
                        </td>

                        </tr>
                        
                            <?php

                        }
                        ?>
</tbody>
                </table>
                        <?php
                    
                    } 
                    else if ($_SESSION['mentor'] == "mentor2@gmail.com") {
                        $rs = mysqli_query($con, "select * from medical where Id between 16 and 30");
                        while ($r = mysqli_fetch_assoc($rs)) {

                            ?>
                                <form action="admin.php" method="post">


                                    <span class="input-box" style="margin-right: 250px; font-size: 20px;">
                                    <?php echo $r['Id'];
                                    $roll = $r['Id'];
                                    ?>
                                    </span>
                                    <span class="input-box" style="margin-right:160px; font-size: 20px;">
                                    <?php echo $r['sdate']; ?>
                                    </span>
                                    <span class="input-box" style="margin-right:150px; font-size: 20px;">
                                    <?php echo $r['edate']; ?>
                                    </span>
                                    <span class="input-box" style="margin-right:150px; font-size: 20px;">
                                    <?php echo $r['purpose']; ?>
                                    </span>
                                    <span class="input-box" style="margin-right:150px; font-size: 20px;">
                                    <?php
                                    echo "<a href='accept.php?id=$roll'>Accept</a>";
                                   
                                    ?>
                                    </span>

                                </form>
                            <?php

                        }
                    } else if ($_SESSION['mentor'] == "mentor3@gmail.com") {
                        $rs = mysqli_query($con, "select * from medical where Id between 31 and 45");
                        while ($r = mysqli_fetch_assoc($rs)) {

                            ?>
                                    <form action="admin.php" method="post">


                                        <span class="input-box" style="margin-right: 250px; font-size: 20px;">
                                    <?php echo $r['Id'];
                                    $roll = $r['Id'];
                                    ?>
                                        </span>
                                        <span class="input-box" style="margin-right:160px; font-size: 20px;">
                                    <?php echo $r['sdate']; ?>
                                        </span>
                                        <span class="input-box" style="margin-right:150px; font-size: 20px;">
                                    <?php echo $r['edate']; ?>
                                        </span>
                                        <span class="input-box" style="margin-right:150px; font-size: 20px;">
                                    <?php echo $r['purpose']; ?>
                                        </span>
                                        <span class="input-box" style="margin-right:150px; font-size: 20px;">
                                    <?php
                                    echo "<a href='accept.php?id=$roll'>Accept</a>";
                                    ?>
                                        </span>

                                    </form>
                            <?php

                        }
                    } else if ($_SESSION['mentor'] == "mentor4@gmail.com") {
                        $rs = mysqli_query($con, "select * from medical where Id between 46 and 60");
                        while ($r = mysqli_fetch_assoc($rs)) {

                            ?>
                                        <form action="admin.php" method="post">


                                            <span class="input-box" style="margin-right: 250px; font-size: 20px;">
                                    <?php echo $r['Id'];
                                    $roll = $r['Id'];
                                    ?>
                                            </span>
                                            <span class="input-box" style="margin-right:160px; font-size: 20px;">
                                    <?php echo $r['sdate']; ?>
                                            </span>
                                            <span class="input-box" style="margin-right:150px; font-size: 20px;">
                                    <?php echo $r['edate']; ?>
                                            </span>
                                            <span class="input-box" style="margin-right:150px; font-size: 20px;">
                                    <?php echo $r['purpose']; ?>
                                            </span>
                                            <span class="input-box" style="margin-right:150px; font-size: 20px;">
                                    <?php
                                    echo "<a href='accept.php?id=$roll'>Accept</a>";
                                    ?>
                                            </span>

                                        </form>
                            <?php

                        }
                    }
                }
                ?>
            </div>
        </div>



        <script src="script.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>

    </html>
    <?php
}
?>