<?php include 'connection.php' ?>

<?php
    session_start();
    $_SESSION['aadhar']=$_POST['aadhar'];
    $_SESSION['pass']=$_POST['pass'];
    $_SESSION['cpass']=$_POST['cpass'];
    $_SESSION['dob']=$_POST['dob'];
    
   
    if(isset($_SESSION['aadhar']) && isset($_SESSION['pass']) && $_SESSION['aadhar']!="" && $_SESSION['pass']!="" && isset($_SESSION['cpass']) && $_SESSION['cpass']!="" && isset($_SESSION['dob']) && $_SESSION['dob']!="" && $_SESSION['auth']==0){
        
        $_SESSION['auth']=1;
        $aadhar=mysqli_real_escape_string($con,$_SESSION['aadhar']);

        $pass=mysqli_real_escape_string($con,$_SESSION['pass']);
        $cpass=mysqli_real_escape_string($con,$_SESSION['cpass']);
        $dob=mysqli_real_escape_string($con,$_SESSION['dob']);


        $query="SELECT Aadhar_id,DOB FROM patient where Aadhar_id='$aadhar' AND DOB='$dob' ;";
        if(!mysqli_query($con,$query)){
            
            session_unset();
            session_destroy();
            header("Location: index.php");
            exit();
        }
        else{
            $t=0;
        $result=mysqli_query($con,$query);
        while($a=mysqli_fetch_assoc($result)){
            if($_SESSION['aadhar']==$a['Aadhar_id'] && $_SESSION['dob']==$a['DOB'] && $_SESSION['pass']==$_SESSION['cpass']){
                $t=1;
                $query="UPDATE patient SET Password=AES_ENCRYPT('$pass','AbhayGuptaPathologyLab') WHERE Aadhar_Id=$aadhar;";
                mysqli_query($con,$query);
                header("Location: index.php");
                exit();
                
            }
            //else if($_SESSION['user']==$a['User_id'] && $a['Password']===NULL){}
                        
            
        }
            if($t==0){
                session_unset();
                session_destroy();
                header("Location: index.php");
                exit();
            
            }
        }
    }
else{
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit();
    
}
?>