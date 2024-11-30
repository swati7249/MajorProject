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
                        <td>Take Action</td>
</tr>
</thead>
<tbody>
    

                <?php
                if ($con) {
                    if ($_SESSION['mentor'] == "mentor1@gmail.com") {
                        $rs = mysqli_query($con, "select * from medical where Id<=15 and status='accepted'");
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
                                <td style="margin-right:150px; font-size: 20px;">
                                    <?php
                                    echo "<a href='accept.php?id=$roll'>Accept</a>";
                                    echo "&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;<a href='accept.php?id=$roll'></a>";
                                    echo "&nbsp;&nbsp;<a href='reject.php?id=$roll'>Reject</a>";
                                    ?>
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