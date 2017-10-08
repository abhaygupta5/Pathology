<?php include 'connection.php' ?>
<?php
    session_start();
    if($_SESSION['auth']==1){
        echo 'Welcome '.$_SESSION['user'];
    }
    else{
        session_unset();
        session_destroy();
        header("Location: admin_login.php");
        exit();
            
    }
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
                
            </div>
        </header>
        <div id="container">
            <a href="#admin">Admin Table</a><br>
            <a href="#employee">Employee Table</a><br>
            <a href="#lab">Lab Table</a><br>
            <a href="#lab_emp">Lab_Emp Table</a><br>
            <a href="#manager">Manager Table</a><br>
            
            <a href="#report">Report Table</a><br>
            
            <a href="#sorts_test">Sorts_test Table</a><br>
            <a href="#tests">Tests Table</a><br>
            <a href="#test_sorter">Test_Sorter Table</a><br>
            
            <br>
            <br>
            
            <div>
                <a href="admin" class="anchor">Admin</a><br>
                <h3>Change Password</h3>
                <input type="text">
                <button id="admin">Change Password</button>
            </div>
            
            <div>
                <a href="employee" class="anchor">Employee</a><br>
            </div>
            
            <div>
                <a href="lab" class="anchor">Lab</a><br>
            </div>
            
            <div>
                <a href="lab_emp" class="anchor">Lab Employee</a><br>
            </div>
            
            <div>
                <a href="manager" class="anchor">Manager</a><br>
            </div>
            <div>
                <a href="report" class="anchor">Reports</a><br>
            </div>
            <div>
                <a href="sorts_test" class="anchor">The Tests Which is Sorted By Sorter</a><br>
            </div>
            <div>
                <a href="tests" class="anchor">Tests</a><br>
            </div>
            <div>
                <a href="test_sorter" class="anchor">Test Sorter</a><br>
            </div>
           
        </div>
    </body>
</html>