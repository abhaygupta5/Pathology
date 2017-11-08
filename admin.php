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
                <div class="main" style="background-color:green;width:20%;float:left;"><h3>Add</h3>
                    Street Name* : <input type="text" id="lsn1" required><br>
                    City* : <input type="text" id="lc1" required><br>
                    Pincode* : <input type="text" id="lp1" required pattern="[0-9]"><br>
                    Password* : <input type="text" id="lpass1" required><br>
                    <button id="l1">Add</button>
                </div>
                <div class="main" style="background-color:yellow;width:20%;float:left;"><h3>Update</h3>
                    Lab id* : <input type="text" id="ll2" required><br>
                    Street Name : <input type="text" id="lsn2" required><br>
                    City : <input type="text" id="lc2" required><br>
                    Pincode : <input type="text" id="lp2" required pattern="[0-9]"><br>
                    Password : <input type="text" id="lpass2" required><br>
                    <button id="l2">Update</button>
                </div>
                <div class="main" style="background-color:blue;width:20%;float:left;"><h3>Delete</h3>
                    Lab id* : <input type="text" id="ll3" required><br>
                    <button id="l3">Delete</button>
                </div>
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
            
            document.getElementById("l1").onclick=function(){
                var pass=document.getElementById("lpass1").value;
                var street=document.getElementById("ls1").value;
                var city=document.getElementById("lc1").value;
                var pin=document.getElementById("lp1").value;
                if(pass.length<8){
                    alert("Minimum length of password should be 8");
                }
                
                else{
                    window.location.replace('queries/lab_add.php?pass='+pass+'&street='+street+'&city='+city+'&pin='+pin);
                }
            };
            
            document.getElementById("l2").onclick=function(){
                var lid=document.getElementById("ll2").value;
                var pass=document.getElementById("lpass2").value;
                var street=document.getElementById("ls2").value;
                var city=document.getElementById("lc2").value;
                var pin=document.getElementById("lp2").value;
                var str="";
                if(pass.length!=0 && pass.length>=8){
                    str+=("pass="+$pass+"&");
                }
                else{
                    window.alert("Minimum length of password should be 8");
                }
                if(street!=""){
                    str+=("street="+$street+"&");
                }
                if(city!=""){
                    str+=("city="+$city+"&");
                }
                if(pin!=""){
                    str+=("pin="+$pin+"&");
                }
                if(str!=""){
                    str=str.substring(0,str.length-1);
                    window.location.replace('queries/lab_update.php?'+str);
                }
            };
            
            document.getElementById("l3").onclick=function(){
                var lid=document.getElementById("ll2").value;
                if(lid!=""){
                    window.location.replace('queries/lab_delete.php?lid='+lid);
                }
            };
        
       </script>
    </body>
</html>