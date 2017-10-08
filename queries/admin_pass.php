<?php include '../connection.php' ?>
<?php
    session_start();
    $_SESSION['auth']=1;
    $p=$_GET['pass'];
    $query="UPDATE admin SET Password=AES_ENCRYPT('$p','AbhayGuptaPathologyLab');";

    mysqli_query($con,$query);
    header("Location: ../admin.php");
    exit();
?>
    