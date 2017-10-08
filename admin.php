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
                <input type="text" id="admin_text">
                <button id="admin">Change Password</button>
            </div>
            <br><br>
            
            <div>
                <a href="employee" class="anchor">Employee</a><br>
                <div class="main" style="background-color:green;width:20%;float:left;"><h3>Add</h3>
                    Name: <input type="text"><br>
                    DOB: <input type="date"><br>
                </div>
                <div class="main" style="background-color:yellow;width:20%;float:left;"><h3>Update</h3>
                    Name: <input type="text"><br>
                    DOB: <input type="date"><br>
                </div>
                <div class="main" style="background-color:blue;width:20%;float:left;"><h3>Delete</h3>
                    Name: <input type="text"><br>
                    DOB: <input type="date"><br>
                </div>
            </div>
            <br><br><br><br><br><br>
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
        
        <script type="text/javascript">
            
            document.getElementById("admin").onclick=function(){
                var pass=document.getElementById("admin_text").value;
                if(pass.length<8){
                    alert("Minimum length of password should be 8");
                }
                
                else{
                    window.location.replace('queries/admin_pass.php?pass='+pass);
                }
                    
            };
        
       </script>
    </body>
</html>