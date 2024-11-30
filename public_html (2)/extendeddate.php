<?php
            include "config.php";
            $con=connect();
            $sid=$_POST["id"];
            $exdate=$_POST["exdate"];
            ///echo "my id is ".$sid;
          /// $email=$_SESSION['student'];
            $rs=mysqli_query($con,"update medical set extended_date='$exdate' where Id='$sid'");
            ///$r=mysqli_fetch_assoc($rs);
            header("location: inbox.php");
            ?>
        