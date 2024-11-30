<?php
            include "config.php";
            $con=connect();
            $sid=$_POST["id"];
            $purpose=$_POST["purpose"];
            $sdate=$_POST["sdate"];
            $edate=$_POST["edate"];
            $filename=$_FILES["upload"]["name"];
            $tempname=$_FILES["upload"]["tmp_name"];
            $folder="pdf/".$filename;
           /// $email=$_SESSION['student'];
           $rs1=mysqli_query($con,"select * from register where Id='$sid'");
            $rs=mysqli_query($con,"insert into medical(Id,purpose,sdate,edate,filename)values('$sid','$purpose','$sdate','$edate','$filename')");
            $r=mysqli_fetch_assoc($rs1);
            $pmail=$r['Parent_Email'];
$otp=$r['otp'];
            $msg = "Dear Parent your child has send a leave request.\n we will send you the OTP : ".$otp." please confir the otp for leave request approval. \n Thanks \n From  Chitkara University.";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email


mail($pmail,"Leave Request form Your Child",$msg);
            if(move_uploaded_file($tempname,$folder))
            {
                
                header("location: inbox.php");
            }
            
            ?>