<?php include 'connection.php' ?>

<html>
    <head>
        <title>Code Bros Pathology Lab</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <header>
            <div id="nav-bar">
                <div id="logo"><a href="index.php"><img src="images/logo.JPG" height="100px" width="400px" /></a></div>
                <div class="login"><a href="sorter_login.php" >Log Out</a></div>
            </div>
        </header>
        <br><br><br><br><br><br>
        <?php
            session_start();
            if($_SESSION['auth']==1){
                $name = $_SESSION['user'];
                echo '<h1>Welcome '. $name .'</h1>';
                $query="SELECT * FROM doc_report WHERE indicator = 0 AND User_Id='$name'";
                $result = mysqli_query($con,$query);
                echo '<table border="1"><tr> <th>Aadhar Id</th>
                <th> Doctor Id </th> 
                <th> Test Name </th>
                <th> Date </th></tr>';
                while($a=mysqli_fetch_assoc($result)){
                    
                    echo '<tr><td>'.$a["Aadhar_id"].'</td>
                    <td>'.$a["D_Id"].'</td>
                    <td>'.$a["Test_Name"].'</td>
                    <td>'.$a["date"].'</td></tr>';
                }
                echo '</table>';
                echo '<form action="complete_sorter_work.php" method="POST">';
                echo '<input type="submit" value="SEND" >';
                echo '</form>';
                
            }
            else{
                session_unset();
                session_destroy();
                header("Location: sorter_login.php");
                exit();

            }
        ?>
        
        
    </body>
</html>