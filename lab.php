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
                <div class="login"><a href="lab_login.php" >Log Out</a></div>
            </div>
        </header>
        <?php
            session_start();
            if($_SESSION['auth']==1){
                $id = S_SESSION['user'];
                echo '<h1>Welcome $id </h1>';
                $query="SELECT * FROM sample_to_lab WHERE indicator = 0 AND Lab_id =$id";
                $result = mysqli_query($con,$query);
                echo '<table border="1"><tr> <th>Tester Id</th>
                <th> Aadhar Id </th> 
                <th> Date </th></tr>';
                while($a=mysqli_fetch_assoc($result)){
                    echo '<tr><td>$a["User_Id"] </td>
                    <td>$a["Aadhar_id"] </td>
                    <td>$a["date"] </td></tr>';
                }
                echo '</table>';
                echo '<form action="complete_lab_work.php" method="POST">';
                echo '<input type="submit" value="SEND" >';
                echo '</form>';
            }
            else{
                session_unset();
                session_destroy();
                header("Location: lab_login.php");
                exit();

            }
        ?>
        
    </body>
</html>