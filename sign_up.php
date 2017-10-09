<?php include 'connection.php' ?>
<?php 
    session_start();
    $_SESSION['auth']=0;
?>

<!doctype HTML>
<html>
    <head>
        <title>Code Bros Pathology Lab</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <header>
            <div id="nav-bar">
                <div id="logo"><a href="index.php"><img src="images/logo.JPG" height="100px" width="400px" /></a></div>
                <div class="login"><a href="lab_login.php" >Lab Login</a></div>
                <div class="login"><a href="sorter_login.php">Tester Login</a></div>
            </div>
        </header>
        <br><br><br><br><br><br><br><br>
        <form method="POST" action="sign_up_process.php">
        <label for aadhar>Aadhar Id: <input type="text" name="aadhar"></label><br>
        <label for dob>DOB: <input type="date" name="dob"></label><br>
        <label for pass>Password: <input type="password" name="pass"></label><br>
        <label for cpass>Confirm Password: <input type="password" name="cpass"></label><br>
        <input type="submit" value="Submit">
        </form>
    </body>
</html>