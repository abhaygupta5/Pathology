<?php include 'connection.php' ?>

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
         <div id="container">
            <form method="POST" action="sorter.php">
            <label for user>Username: <input type="text" name="user" placeholder="username" /></label><br><br>
            <label for pass>Password: <input type="password" name="pass" /></label><br><br>
                <input type="Submit" value="Log In" name="login" />
            </form>
        </div>
    </body>
</html>