<?php include 'connection.php' ?>
<?php
    session_start();
    if($_SESSION['auth']==1){
        echo 'Welcome '.$_SESSION['user'];
    }
    else{
        session_unset();
        session_destroy();
        header("Location: lab_login.php");
        exit();
            
    }
?>