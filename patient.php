<?php include 'connection.php' ?>
<?php
    if(isset($_POST['user']))
    $user=mysqli_real_escape_string($con,$_POST['user']);
    if(isset($_POST['pass']))
    $pass=mysqli_real_escape_string($con,$_POST['pass']);
    

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






