<?php include 'connection.php' ?>
<?php
    if(isset($_POST['user']))
    $user=mysqli_real_escape_string($con,$_POST['user']);
    if(isset($_POST['pass']))
    $pass=mysqli_real_escape_string($con,$_POST['pass']);

    $query="SELECT Lab_id,Password FROM Lab WHERE AES_DECRYPT(Password,'AbhayGuptaPathologyLab')='$pass'";
    if(!mysqli_query($con,$query)){
        die('Error: '.mysqli_error($con));
    }
    else{
    $result=mysqli_query($con,$query);
    }
    while($a=mysqli_fetch_assoc($result))
        echo "Welcome ".$a['Lab_id'];
?>