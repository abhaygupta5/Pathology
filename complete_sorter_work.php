<?php include 'connection.php' ?>
<?php
    session_start();
    $_SESSION['auth']=1;
    $name = $_SESSION['user'];
    $query="SELECT * FROM doc_report WHERE indicator = 0 AND User_Id='$name'";

    $result = mysqli_query($con,$query);

    
    while($a=mysqli_fetch_assoc($result)){
        $aadhar=$a['Aadhar_id'];
        $test=$a['Test_Name'];
        $query="INSERT INTO sample_to_lab(User_id,date,Aadhar_id,Lab_id) SELECT '$name',CURDATE(),'$aadhar',lab.Lab_id FROM tests,lab WHERE tests.lab_Id = lab.lab_id AND Test_Name='$test'";
        mysqli_query($con,$query);
        
    }
    $query = "UPDATE doc_report SET indicator = 1 WHERE indicator = 0 AND User_Id='$name'";
    mysqli_query($con,$query);
    
    header("Location: sorter.php");
    exit();

?>