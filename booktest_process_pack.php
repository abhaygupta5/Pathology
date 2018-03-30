<?php include 'connection.php' ?>

<?php
    
    
    $aadhar=$_POST['aadhar'];
    $name=$_POST['name'];
    $city=$_POST['city'];
    $street=$_POST['street'];
    $pin=$_POST['pin'];
    $dob=$_POST['dob'];
    $phone=$_POST['phone'];
    $aphone=$_POST['aphone'];
    $pack=$_POST['pack'];
    $did=rand(1,6);
   
    if($name!="" && $city!="" && $street!="" && $pin!="" && $aadhar!="" && $dob!="" && $phone!=""){
        
        $time=strtotime($dob);
        $dob=date('Y-m-d',$time);
        
             echo $pack;
        
           $query="INSERT INTO patient(Aadhar_id,Name,Phone,AlterPhone,DOB,Street,City,pincode,D_id) VALUES('$aadhar','$name','$phone','$aphone','$dob','$street','$city','$pin','$did')";
        
        
            mysqli_query($con,$query);
        if($pack=="basic"){
            echo "1";
            $test=["Haemoglobin","RBC test","WBC test","Urine test","Sugar"];
            for($i=0;$i<count($test);$i++){
               
                    $query="SELECT * FROM sorts_test WHERE Test_Name='$test[$i]'";
                    $res=mysqli_query($con,$query);
                    $a=mysqli_fetch_assoc($res);
                    $user=$a["User_id"];
                    $query="INSERT INTO doc_report(Aadhar_id,date,D_id,User_Id,Test_Name) VALUES($aadhar,NOW(),$did,'$user','$test[$i]')";
                    mysqli_query($con,$query);
                
            }
        
        header("Location: index.php");
        exit();
        }
        else if($pack=="medium"){
            $test=["LFT","HDL","LDL","Thyroid"];
            for($i=0;$i<count($test);$i++){
                if($test[$i]!="None"){
                    $query="SELECT * FROM sorts_test WHERE Test_Name='$test[$i]'";
                    $res=mysqli_query($con,$query);
                    $a=mysqli_fetch_assoc($res);
                    $user=$a["User_id"];
                    $query="INSERT INTO doc_report(Aadhar_id,date,D_id,User_Id,Test_Name) VALUES($aadhar,NOW(),$did,'$user','$test[$i]')";
                    mysqli_query($con,$query);
                }
            }
        
        header("Location: index.php");
        exit();
        }
        else{
            $test=["Marrow Test","Neuron test"];
            for($i=0;$i<count($test);$i++){
                if($test[$i]!="None"){
                    $query="SELECT * FROM sorts_test WHERE Test_Name='$test[$i]'";
                    $res=mysqli_query($con,$query);
                    $a=mysqli_fetch_assoc($res);
                    $user=$a["User_id"];
                    $query="INSERT INTO doc_report(Aadhar_id,date,D_id,User_Id,Test_Name) VALUES($aadhar,NOW(),$did,'$user','$test[$i]')";
                    mysqli_query($con,$query);
                }
            }
        
        header("Location: index.php");
        exit();
            
        }
            
    }
else{
    
    header("Location: booktest-pack.php");
    exit();
    
}
?>