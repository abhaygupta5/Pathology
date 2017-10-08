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
<?php
    
    $query="SELECT Aadhar_id,Password FROM Patient WHERE AES_DECRYPT(Password,'AbhayGuptaPathologyLab')='$pass'";
    if(!mysqli_query($con,$query)){
        $message1="<font color=red>invalid user id  or password....new user first sign in</font>";
        echo $message1;
    }
    else{
    $result=mysqli_query($con,$query);
    }
    while($a=mysqli_fetch_assoc($result))
        echo "Welcome ".$a['Aadhar_id'];
?>






