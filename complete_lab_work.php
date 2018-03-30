<?php include 'connection.php' ?>
<?php
    session_start();
    $_SESSION['auth']=1;
    $name = $_SESSION['user'];
    $query="SELECT S.Aadhar_id AS 'Aadhar_id',D.Test_Name AS 'Test_Name' FROM sample_to_lab AS S,doc_report AS D WHERE S.indicator = 0 AND Lab_Id='$name' AND S.User_id=D.User_Id AND S.Aadhar_id=D.Aadhar_id";

    $result = mysqli_query($con,$query);
    while($a=mysqli_fetch_assoc($result)){
        
        $rand = rand(100000,10000000);
        $aadhar=$a['Aadhar_id'];
        $test=$a['Test_Name'];
        
        $query="INSERT INTO report(Report_Number,Obtained_Value,date,Lab_id,Test_Name) SELECT '$rand',0.9*Max_Normal_Value*RAND()+(Max_Normal_Value - Min_Normal_Value)/2,CURDATE(),'$name','$test' FROM tests WHERE lab_id = '$name' AND Test_Name='$test'";
        mysqli_query($con,$query);
        $query="INSERT INTO report_to_patient VALUES('$rand',NOW(),'$aadhar')";
        mysqli_query($con,$query);
    }
    $query = "UPDATE sample_to_lab SET indicator = 1 WHERE indicator = 0 AND Lab_id ='$name'";
    mysqli_query($con,$query);
    
    header("Location: lab.php");
    exit();

?>