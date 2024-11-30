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
            <b style="font-size: 30px;"> <a href="" class="" style="color:white">Check Approved Request</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="" class="" style="color:white">Leave Extension Request</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><br><br>

            <form action="admin.php" method="post">


            <span class="input-box" style="margin-right: 200px; font-size: 20px;">
    Id
</span>
<span class="input-box" style="margin-right:200px; font-size: 20px;">
    Start-Date
</span>
<span class="input-box" style="margin-right:200px; font-size: 20px;">
    Extended-date
</span>
<span class="input-box" style="margin-right:200px; font-size: 20px;">
    Purpose
</span>
<span class="input-box" style="margin-right:200px; font-size: 20px;">
    Confirmation
</span>

            </form>
        </div>
    </div>



    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>