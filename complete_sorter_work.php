<?php include 'connection.php' ?>
<?php
    session_start();
    $_SESSION['auth']=1;
    $name = $_SESSION['user'];
    $query="SELECT * FROM doc_report WHERE indicator = 0 AND User_Id=$name";
    $result = mysqli_query($con,$query);
    while($a=mysqli_fetch_assoc($result)){
        $query="INSERT INTO sample_to_lab SELECT $name,CURDATE(),$a['Aadhar_Id'],Lab_Id FROM tests,lab WHERE tests.lab_id = lab.lab_id";
        mysqli_query($con,$query);
    }
    $query = "UPDATE doc_report SET indicator = 1 WHERE indicator = 0";
    mysqli_query($con,$query);
    
    header("Location: sorter.php");
    exit();

?>