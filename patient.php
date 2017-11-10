<?php include 'connection.php' ;
session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
    <title>
        CB Pathology
        </title>
         <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/animate.css" rel="stylesheet" type="text/css">
        <link href="css/custom.css" rel="stylesheet" type="text/css">
        <link href="css/1140.css" rel="stylesheet" type="text/css">
        <script src="js/bootstrap.js" type="text/javascript"></script>
         <script src="carouselengine/jquery.js"></script>
    <script src="carouselengine/amazingcarousel.js"></script>
    <link rel="stylesheet" type="text/css" href="carouselengine/initcarousel-1.css">
    <script src="carouselengine/initcarousel-1.js"></script>
        
        <style>
        body{
            margin:0;
            padding:0;
        }
            #na{
                margin-top:-4%;
            }
        .main-image{
            width : 35%;
            -webkit-animation-delay:0.5s;
            -moz-animation-delay:0.5s;
        }
        .btn-group{
            float:inherit;
            margin-left:75%;
            margin-top:1%;
           -webkit-animation-delay:1.5s;
            -moz-animation-delay:1.5s;
        }
        .data{
        
            font-size: 120%;
            margin-left:180px;

        }
        .b{
            font-size:125%;
        }
        .btn-group button:hover{
            background-color:black;
            color:white;
        }
       
        .peoplesay{
            margin-top:2%;
        }
       .carousel-item{
    color:black;
    display:flex;
    align-items:center;
}
        h1 {
  font-size: 60px;
  text-align: center;
}

.content-slider {
  width: 100%;
  height: 360px;
}

.slider {
  height: 320px;
  width: 680px;
  margin: 40px auto 0;
  overflow: visible;
  position: relative;
}

.mask {
  overflow: hidden;
  height: 320px;
}

.slider ul {
  margin: 0;
  padding: 0;
  position: relative;
}

.slider li {
  width: 680px;
  height: 320px;
  position: absolute;
  top: -325px;
  list-style: none;
}

.slider .quote {
  font-size: 30px;
  font-style: italic;
}

.slider .source {
  font-size: 20px;
  text-align: right;
}

.slider li.anim1 {
  -moz-animation: cycle 15s linear infinite;
  -webkit-animation: cycle 15s linear infinite;
  animation: cycle 15s linear infinite;
}

.slider li.anim2 {
  -moz-animation: cycle2 15s linear infinite;
  -webkit-animation: cycle2 15s linear infinite;
  animation: cycle2 15s linear infinite;
}

.slider li.anim3 {
  -moz-animation: cycle3 15s linear infinite;
  -webkit-animation: cycle3 15s linear infinite;
  animation: cycle3 15s linear infinite;
}

.slider li.anim4 {
  -moz-animation: cycle4 15s linear infinite;
  -webkit-animation: cycle4 15s linear infinite;
  animation: cycle4 15s linear infinite;
}

.slider li.anim5 {
  -moz-animation: cycle5 15s linear infinite;
  -webkit-animation: cycle5 15s linear infinite;
  animation: cycle5 15s linear infinite;
}

.slider:hover li {
  -moz-animation-play-state: paused;
  -webkit-animation-play-state: paused;
  animation-play-state: paused;
}

@-moz-keyframes cycle {
  0% {
    top: 0px;
  }
  4% {
    top: 0px;
  }
  16% {
    top: 0px;
    opacity: 1;
    z-index: 0;
  }
  20% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
  21% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
  92% {
    top: -325px;
    opacity: 0;
    z-index: 0;
  }
  96% {
    top: -325px;
    opacity: 0;
  }
  100% {
    top: 0px;
    opacity: 1;
  }
}

@-moz-keyframes cycle2 {
  0% {
    top: -325px;
    opacity: 0;
  }
  16% {
    top: -325px;
    opacity: 0;
  }
  20% {
    top: 0px;
    opacity: 1;
  }
  24% {
    top: 0px;
    opacity: 1;
  }
  36% {
    top: 0px;
    opacity: 1;
    z-index: 0;
  }
  40% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
  41% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
  100% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
}

@-moz-keyframes cycle3 {
  0% {
    top: -325px;
    opacity: 0;
  }
  36% {
    top: -325px;
    opacity: 0;
  }
  40% {
    top: 0px;
    opacity: 1;
  }
  44% {
    top: 0px;
    opacity: 1;
  }
  56% {
    top: 0px;
    opacity: 1;
  }
  60% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
  61% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
  100% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
}

@-moz-keyframes cycle4 {
  0% {
    top: -325px;
    opacity: 0;
  }
  56% {
    top: -325px;
    opacity: 0;
  }
  60% {
    top: 0px;
    opacity: 1;
  }
  64% {
    top: 0px;
    opacity: 1;
  }
  76% {
    top: 0px;
    opacity: 1;
    z-index: 0;
  }
  80% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
  81% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
  100% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
}

@-moz-keyframes cycle5 {
  0% {
    top: -325px;
    opacity: 0;
  }
  76% {
    top: -325px;
    opacity: 0;
  }
  80% {
    top: 0px;
    opacity: 1;
  }
  84% {
    top: 0px;
    opacity: 1;
  }
  96% {
    top: 0px;
    opacity: 1;
    z-index: 0;
  }
  100% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
}

@-webkit-keyframes cycle {
  0% {
    top: 0px;
  }
  4% {
    top: 0px;
  }
  16% {
    top: 0px;
    opacity: 1;
    z-index: 0;
  }
  20% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
  21% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
  50% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
  92% {
    top: -325px;
    opacity: 0;
    z-index: 0;
  }
  96% {
    top: -325px;
    opacity: 0;
  }
  100% {
    top: 0px;
    opacity: 1;
  }
}

@-webkit-keyframes cycle2 {
  0% {
    top: -325px;
    opacity: 0;
  }
  16% {
    top: -325px;
    opacity: 0;
  }
  20% {
    top: 0px;
    opacity: 1;
  }
  24% {
    top: 0px;
    opacity: 1;
  }
  36% {
    top: 0px;
    opacity: 1;
    z-index: 0;
  }
  40% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
  41% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
  100% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
}

@-webkit-keyframes cycle3 {
  0% {
    top: -325px;
    opacity: 0;
  }
  36% {
    top: -325px;
    opacity: 0;
  }
  40% {
    top: 0px;
    opacity: 1;
  }
  44% {
    top: 0px;
    opacity: 1;
  }
  56% {
    top: 0px;
    opacity: 1;
    z-index: 0;
  }
  60% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
  61% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
  100% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
}

@-webkit-keyframes cycle4 {
  0% {
    top: -325px;
    opacity: 0;
  }
  56% {
    top: -325px;
    opacity: 0;
  }
  60% {
    top: 0px;
    opacity: 1;
  }
  64% {
    top: 0px;
    opacity: 1;
  }
  76% {
    top: 0px;
    opacity: 1;
    z-index: 0;
  }
  80% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
  81% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
  100% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
}

@-webkit-keyframes cycle5 {
  0% {
    top: -325px;
    opacity: 0;
  }
  76% {
    top: -325px;
    opacity: 0;
  }
  80% {
    top: 0px;
    opacity: 1;
  }
  84% {
    top: 0px;
    opacity: 1;
  }
  96% {
    top: 0px;
    opacity: 1;
    z-index: 0;
  }
  100% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
}
        
        .fot{
        background: #E0E0E0;
            height:300px;
            width:100%;
            
        }
        .verticalline{
            border-left:1px solid black;
            float:left;
            height:280px;
            width:1px;
            margin-left:50%;
            margin-top:10px;
            margin-bottom:10px;
            display: block;
        }
        .fot2{
            background:#000000;
            height:70px;
            width:100%;
        }
        .fot2con{
            color:#FFFFFF;
            margin-left:5%;
        }
        #labadd{
            float:left;
            position:absolute;
            margin-left:2%;
        }
        .contact{
            float:right;
            position:absolute;
            margin-left:2%;
            
        }
        .contact1{
            float:right;
            position:absolute;
            margin-top:4%;
            margin-left:3%;
        }
             .contact2{
            float:right;
            position:absolute;
            margin-top:8%;
            margin-left:3%;
        }
             .contact3{
            float:right;
            position:absolute;
            margin-top:12%;
            margin-left:3%;
        }
        .labadd1{
       float:left;
            position: absolute;
            width:6%;
            height:6%s;
            margin-left:8%;
            margin-top:4%;
        }
            .healthpack{
                z-index: 1;
                float: inherit;
            }
            .row{
                height:60VH;
                width:100%;
                background:#FFFFFF;
            }
            #allreport{
                width:100%;
                border:4px solid black;
                margin-top:10%;
                margin-left:20%;
                padding: 45px;
                padding-bottom:47px;
                
            
            }
            .healthpackage{
                margin-top: 20%;
            }
            .navbar-brand{
                -webkit-animation-delay:2s;
                 -moz-animation-delay:2s;
            }
            .col-sm-5{
                -webkit-animation-delay:1.75s;
                -moz-animation-delay:1.75s;
            }
            .col-sm-7{
                -webkit-animation-delay:2.25s;
                -moz-animation-delay:2.25s;
            }
            .container{
                -webkit-animation-delay:1s;
                -moz-animation-delay:1s;
            }
            .headinghell{
                -webkit-animation-delay:1.5s;
                -moz-animation-delay:1.5s;
                margin-bottom:3%;
            }
            .formkalabel{
                margin-top:2%;
            }
     
           /* .skewnow{
                position:relative;
                width:100%;
                height:250px;
                background:#01579B;
                z-index: -1;
            }
            .skewnow:after{
                float:right;
                position:absolute;
                width:100%;
                height: 100%;
                top:0px;
                bottom:0px;
                right:0px;
                left:0px;
                content:'';
                background: inherit;
                transform-origin: top left;
                transform: skewY(4deg);
                opacity: 0.3;
    filter: alpha(opacity=30);
            }
            */
            .but{
                margin-left:15%;
            }
            
        </style>
        
    </head>
        
     <body>
         <div class="main-image animated flipInX" style="float:left;">
       <a href="index.php"><img src="images/logo.JPG"></a>
    </div>
         
<div class="btn-group animated zoomInDown" role="group" aria-label="Basic example" style="top:-80px;">
    <button type="button" onclick="window.location.href='index.php'" class="btn btn-secondary"><span class="b">Log Out</span></button>
</div>
  <div>     
<?php
    
    if($_SESSION['auth']==1){
        $aadhar=$_SESSION['user'];
        $query="SELECT P.Aadhar_id AS Aadhar_id, Name,Phone,DOB,Street,City,pincode,R.Report_Number AS Report_Number,Dname,Hospital_Name,T.Test_Name AS Test_Name,Min_Normal_Value,Max_Normal_Value,Obtained_Value,Test_type FROM tests T,patient P,report R,doctor D,report_to_patient RP WHERE RP.Report_Number=R.Report_Number AND RP.Aadhar_id=P.Aadhar_id AND R.Test_Name=T.Test_Name AND P.D_id=D.D_id AND P.Aadhar_id='$aadhar' ";
        
        $query1 = "SELECT Name FROM patient WHERE Aadhar_id='$aadhar'";
        $res=mysqli_query($con,$query);
        $name=mysqli_fetch_assoc($res)["Name"];
        echo '<h3>Welcome '.$name.'</h3><br><br>';
        $res=mysqli_query($con,$query);
        while($a=mysqli_fetch_assoc($res)){
            echo "<b>Name of Patient: </b>".$a['Name']."<br>";
            echo "<b>Aadhar Number of Patient: </b>".$a['Aadhar_id']."<br>";
            echo "<b>Phone Number of Patient: </b>".$a['Phone']."<br>";
            echo "<b>Date of Birth of Patient: </b>".$a['DOB']."<br>";
            echo "<b>Address of Patient: </b>".$a['Street']." ,".$a['City']."  ".$a['pincode']."<br>";
            echo "<b>Report Number of Patient: </b>".$a['Report_Number']."<br>";
            echo "<b>Test Name of Patient: </b>".$a['Test_Name']."<br>";
            
            if($a['Obtained_Value']<$a['Min_Normal_Value'] || $a['Obtained_Value']>$a['Max_Normal_Value']){
                echo "<b>Obtained Value: (".$a['Obtained_Value']."</b>) Not OK Needs Treatment<br>";}
            else{
                echo "<b>Obtained Value: </b>(".$a['Obtained_Value'].") OK<br>";
            }
            echo "<b>Minimum Value: </b>".$a['Min_Normal_Value']."<br>";
            echo "<b>Maximum Value: </b>".$a['Max_Normal_Value']."<br>";
            echo "<b>Test Type: </b>".$a['Test_type']."<br>";
            echo "<b>Doctor and Hospital Name: </b>".$a['Dname'].",  ".$a['Hospital_Name']."<br><br><br>";
        }
        
    }
    else{
        session_unset();
        session_destroy();
        header("Location: index.php");
        exit();
            
    }
?>
         </div>
         
    </body>
</html>







