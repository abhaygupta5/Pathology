<?php include 'connection.php' ?>

<?php
    session_start();
    $_SESSION['user']=$_POST['user'];
    $_SESSION['pass']=$_POST['pass'];
   
    if(isset($_SESSION['user']) && isset($_SESSION['pass']) && $_SESSION['user']!="" && $_SESSION['pass']!="" && $_SESSION['auth']==0){
        echo "1";
        $_SESSION['auth']=1;
        $user=mysqli_real_escape_string($con,$_SESSION['user']);

        $pass=mysqli_real_escape_string($con,$_SESSION['pass']);

        $aadhar=$_SESSION['user'];
        $pass=$_SESSION['pass'];
        $query="SELECT Aadhar_id,AES_DECRYPT(Password,'AbhayGuptaPathologyLab') AS 'Password' FROM patient WHERE Aadhar_Id='$aadhar';";
        if(!mysqli_query($con,$query)){
            echo "2";
            session_unset();
            session_destroy();
            header("Location: index.php");
            exit();
        }
        else{
            echo "3";
            $t=0;
        $result=mysqli_query($con,$query);
        while($a=mysqli_fetch_assoc($result)){
            echo "4";
            if($aadhar==$a['Aadhar_id'] && $pass==$a['Password']){
                $t=1;
                header("Location: patient.php");
                exit();
                
            }
            //else if($_SESSION['user']==$a['User_id'] && $a['Password']===NULL){}
                        
            
        }
            if($t==0){
                echo "5";
                session_unset();
                session_destroy();
                header("Location: index.php");
                exit();
            
            }
        }
    }
else{
    echo "6";
    
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit();
    
}
?>