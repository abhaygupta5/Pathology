<?php include 'connection.php' ?>

<html>
<head>
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">

    <style>
     body{
            margin:0;
            padding:0;
        }
            .pimgn1,.pimg2,.pimg3{
                position:relative;
                opacity: 0.70;
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
            
            }
            .pimgn1{
                background-image: url(images/image4.jpeg);
                min-height: 640px;
            }
            .pimg2{
                background-image: url(images/image2.jpeg);
                min-height: 700px;
            }
            .pimg3{
                background-image: url(images/image3.jpeg);
                min-height:700px;
            }
            #na{
                margin-top:-4%;
                margin-bottom:-1%;
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
            color:white;
            margin-top:-0.5%;
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
                height:15VH;
                width:100%;
            
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
     

            .fhead{
                font-size: 140%;
                color:floralwhite;
            }
            #mainh{
                margin-bottom: 3%;
                margin-top:1%;
                color:red;
            }
            .book{
                -webkit-animation-delay:1.5s;
                -moz-animation-delay:1.5s;
            }
            .mainbut{
                margin-top:7%;
                font-size:150%;
                
            }
            .mpeople{
                padding-top: 10%;
            }
            .dhead{
                margin-top:3%;
                margin-bottom:2%;
                color:white;
            }
        .table{
            margin-top:5%;
        }
        .footer{
            background-color: black;
            color:white;
            margin-top:8.75%;
        }
    
    
    </style>
    
</head>
<body>
   <div class="main-image animated flipInX" style="float:left;">
       <a href="index.php"><img src="images/logo.JPG"></a>
    </div>
         
<div class="btn-group animated zoomInDown" role="group" aria-label="Basic example" style="top:-80px;">
    <button type="button" onclick="window.location.href='lab_login.php'" class="btn btn-secondary"><span class="b">Lab Login</span></button>
    <button type="button" onclick="window.location.href='sorter_login.php'" class="btn btn-secondary"><span class="b">Tester Login</span></button>
</div>
  <div id="na">
    <nav class="navbar navbar-inverse animated slideInLeft" style="background-color:black;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      
        <a class="navbar-brand animated tada" href="index.php"><span class="data">Home</span></a>
        <a class="navbar-brand animated tada" href="booktest.php"><span class="data">Book Test</span></a>
        <a class="navbar-brand animated tada" href="test.php"><span class="data">Test List</span></a>
        <a class="navbar-brand animated tada" href="contact.php"><span class="data">Contact us</span></a>
      </div>
  </div>
</nav>
</div>
<br><br><br><br>
<?php
    echo "<form method='post' action='booktest-pack.php'>";
    if(isset($_POST["basic"])){
        
        $query="SELECT Test_Name,Test_type, Description FROM tests WHERE Test_Name IN ('Haemoglobin','RBC test','WBC test','Urine test','Sugar');";
        $res=mysqli_query($con,$query);
        while($a=mysqli_fetch_assoc($res)){
            echo "<br><h1>".$a['Test_Name']." ( ".$a['Test_type']." )<h1>";
            echo "<h4>".$a['Description']."</h4>";
        }
            
        echo "<center><button type='submit' class='btn btn-primary mainbut' value='basic' name='pack'>Book a test</button></center>";
    }
    else if(isset($_POST["medium"])){
        
        $query="SELECT Test_Name,Test_type, Description FROM tests WHERE Test_Name IN ('LFT','Thyroid','HDL','LDL');";
        $res=mysqli_query($con,$query);
        while($a=mysqli_fetch_assoc($res)){
            echo "<br><h1>".$a['Test_Name']." ( ".$a['Test_type']." )<h1>";
            echo "<h4>".$a['Description']."</h4>";
        }
        
       
        echo "<center><button type='submit' class='btn btn-primary mainbut' value='medium' name='pack'>Book a test</button></center>";
    }
    else{
        
        $query="SELECT Test_Name,Test_type, Description FROM tests WHERE Test_Name IN ('Marrow Test','Neuron test');";
        $res=mysqli_query($con,$query);
        while($a=mysqli_fetch_assoc($res)){
            echo "<br><h1>".$a['Test_Name']." ( ".$a['Test_type']." )<h1>";
            echo "<h4>".$a['Description']."</h4>";
        }
        
        echo "<center><button type='submit' class='btn btn-primary mainbut' value='advance' name='pack'>Book a test</button></center>";
    }
    echo "</form>";
 ?>
    
         
            
         
    <footer class="footer">
      <div class="container">
          <center> <span class="fot2con">&copy; 2017 CodeBros Pathology. All Rights Reserved. <br></span></center>
          <center> <span class="fot2con">Only Pathology Reports Available online.<br></span><span class="fot2con"> For X-Ray,Ultrasound,ECG,TMT reports- please visit the concerned center where the test has been conducted.</span></center>
      </div>
    </footer>
    </body>
    
</html>