<?php
            include "config.php";
            $con=connect();
            $sid=$_POST["id"];
            $purpose=$_POST["purpose"];
            $teacher=$_POST["teacher"];
            $flecture=$_POST["flecture"];
            $tlecture=$_POST["tlecture"];
            $date=$_POST["date"];
           /// $email=$_SESSION['student'];
            $rs=mysqli_query($con,"insert into duty(Id,purpose,teacher,flecture,tlecture,date)values('$sid','$purpose','$teacher','$flecture','$tlecture','$date')");
            ///$r=mysqli_fetch_assoc($rs);
            header("location: inbox.php");
            ?>