<?php include 'connection.php' ?>
<?php
    session_start();
    $_SESSION['auth']=1;
    $name = $_SESSION['user'];
    $query="SELECT * FROM sample_to_lab WHERE indicator = 0 AND Lab_Id=$name";
    $result = mysqli_query($con,$query);
    while($a=mysqli_fetch_assoc($result)){
        $rand = rand(10000000,10000000000000);
        $query="INSERT INTO report SELECT $rand,1.5*(Max_Normal_Value - Min_Normal_Value)*RAND(),CURDATE(),$name,$a['Test_Name'] FROM tests WHERE lab_id = $name";
        mysqli_query($con,$query);
        $query="INSERT INTO report_to_patient VALUES($rand,CURDATE(),$a['Aadhar_Id'])";
        mysqli_query($con,$query);
    }
    $query = "UPDATE sample_to_lab SET indicator = 1 WHERE indicator = 0";
    mysqli_query($con,$query);
    
    header("Location: lab.php");
    exit();

?>