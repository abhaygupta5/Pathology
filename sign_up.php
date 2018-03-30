<?php include 'connection.php' ?>
<?php 
    session_start();
    $_SESSION['auth']=0;
?>
<!DOCTYPE html>
<html>
    <head>
    <title>
        CB Pathology
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width , initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
         <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link href="css/animate.css" rel="stylesheet" type="text/css">
        <link href="css/custom.css" rel="stylesheet" type="text/css">
        <link href="css/1140.css" rel="stylesheet" type="text/css">
        
        <style>
        body{
            margin:0;
            padding:0;
            height: 100%;
            
            color:white;
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
                background-image: url(images/image9.jpeg);
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
                
                margin-top:-3.5%;
        
                
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
            
        }.data{
        
            font-size: 140%;
            color:cyan;
        }
        .b{
            font-size:125%;
        }
        .btn-group button:hover{
            background-color:black;
            color:white;
        }
       
        .peoplesay{
            margin-top:0;
            padding-top:7%;
            color:white;
        }

        h1 {
  font-size: 80px;
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
            color:black;
            
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
            position:relative;
            margin-left:2%;
        }
        .contact{
            float:right;
            position:absolute;
            margin-left:2%;
            padding-top: 1%;
        }
        .contact1{
            float:right;
            position:absolute;
            margin-top:4%;
            margin-left:3%;
             padding-top: 2%;
        }
             .contact2{
            float:right;
            position:absolute;
            margin-top:8%;
            margin-left:3%;
                  padding-top: 2%;
        }
             .contact3{
            float:right;
            position:absolute;
            margin-top:12%;
            margin-left:3%;
                  padding-top: 2%;
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
    
                float: inherit;
            }
            .row{
                height:60VH;
                width:100%;
            margin-top:-1.5%;
                    margin-bottom: 0;
            }
            #allreport{
                width:100%;
                border:4px solid black;
                margin-top:10%;
                margin-left:20%;
                padding:17px 45px;
                
                
            
            }
            .healthpackage{
                padding-top:4%;
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
                padding-top: 4%;
                color:beige;
                font-weight: bolder;
            }
            .formkalabel{
                margin-top:2%;
                font-size:170%;
                color:bisque;
                font-weight: bold;
            }

            .but{
                margin-left:15%;
            }
            .cr{
                width:80%;
                
                margin-left: 20%;
                margin-top:7%;
            }
            p{
                font-size:150%;
            }
            #formkiclass{
                font-size:30px;
                color:black;
                text-align: center;
                font-weight: bolder;
                font-family: cursive;
            }
            h2{
                color:darkblue;
                font-weight:bold;
                font-family: cursive;
            }
            .form-control{
                height:50px;
            }
            
            .form-group{
                margin:-15px 0;
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
         
<div class="pimgn1">
<div class="row">
  <div class="col-sm-5 animated flipInY">
    <div id="allreport">
         <form action="sign_up_process.php" method="POST">
             <span id="formkiclass">Sign Up</span>
  <div class="form-group">
    <label for="exampleInputEmail1" class="formkalabel">Aadhar Card ID *</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter Aadhar Card ID" pattern="[0-9]{12}" title="Aadhar id should be 12 digits long" name="aadhar">
    
  </div>
             <div class="form-group">
    <label for="exampleDate" class="formkalabel">Date of Birth *</label>
    <input type="date" class="form-control" name="dob" id="exampleDate" placeholder="DOB">
  </div>
             <div class="form-group">
    <label for="exampleInputPassword1" class="formkalabel">Password *</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
  </div>
             
  <div class="form-group">
    <label for="exampleInputPassword2" class="formkalabel">Confirm Password *</label>
    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirm Password" name="cpass">
  </div>
  
<button type="submit" class="btn btn-primary" id="formbutton" onclick="alert('You have successfully Signed Up');">Sign Up</button>
</form>
</div>
    
    </div>

  <div class="col-sm-7 animated flipInX">
      <div class="cr">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators" >
      <li data-target="#carousel-example-generic" data-slide-to="0"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item">
        <img src="images/five.jpeg" alt="...">
      </div>
      <div class="item active">
        <img src="images/four.jpeg" alt="...">
      </div>
      <div class="item">
        <img src="images/six.jpeg" alt="...">
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
      </div>
      </div>
    </div>
    
    </div>
    
         
    
 
         
         <div class="pimg2" >
         
                  <div class="healthpackage">
                      
         <h1 align="center" class="headinghell animated bounceInDown">Health Packages</h1>
         <div class="skewnow2">
 <div class="container animated lightSpeedIn">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
            <b><h2>Swasth Plus - Basic Health Checkup</h2></b>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            <h3>&#8377; 1399</h3>
        </div>
        <div class="col-md-4">
            <b> <h2>Swasth Plus - Advanced Health Checkup</h2></b>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            <h3>&#8377; 2499</h3>
        </div>
        <div class="col-md-4">
            <b><h2>Swasth Plus - Vitamins Package</h2></b>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            <h3>&#8377; 1799</h3>
        </div>
      </div>
             </div>
                      </div>
         </div>
         </div>
         
    
         <div class="pimg3">

         <div class="peoplesay">
<h1>What People say about us</h1>

<div class="content-slider">
  <div class="slider">
    <div class="mask">
      <ul>
        <li class="anim1">
          <div class="quote">Best service provider center in diagnostic at Tapukara, Khuskhera area , good communication staff here.</div>
          <div class="source">- R K Jain, Navi Mumbai (Maharashtra)</div>
        </li>
        <li class="anim2">
          <div class="quote">I occur then after taking a sample this center is good working staff & best service at reporting time. Home collection facility available in emergency time..</div>
          <div class="source">- Dr. Awasthi (Lucknow)</div>
        </li>
        <li class="anim3">
          <div class="quote"> Thank you for your exceptional service through which you sent us alert message on mobile to take her to hospital even before we received the results of report.</div>
          <div class="source">- Rahul (Dhoopchandi, Distt. - Varanasi)</div>
        </li>
        <li class="anim4">
          <div class="quote">Good staff ,no pain when blood given, very clean atmosphere in lab .</div>
          <div class="source">- Jitendra Jangir (Bhiwadi, Alwar)</div>
        </li>
       <li class="anim5">
          <div class="quote">I shall always remain grateful to you sir for saving the life of my wife . Had your lab not sent me SOS message yesterday, perhaps I would have lost my wife, Poonam Tuli.</div>
          <div class="source">- Col C J Tuli (New Delhi)</div>
        </li>
      </ul>
    </div>
  </div>
</div>
              
         </div>
         
         
         
         
         <div class="fot">
             <div class="labadd1"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14671.136368119658!2d80.0251206479392!3d23.17807896598182!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xffe30099d058452e!2sIndian+Institute+of+Information+Technology+Design+%26+Manufacturing+Jabalpur!5e0!3m2!1sen!2sin!4v1507460457246" width="500" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div>
         
             <span id="labadd"><h2> Lab Address</h2></span>
             
             <div class="verticalline"></div>
             <a href="contact.php"><span class="contact"><h2>Contact Us</h2></span></a>
             <span class="contact1"><h3>Abhay Gupta</h3></span>
         <span class="contact2"><h3>Shubham Kumar</h3></span>
             <span class="contact3"><h3>Abhinav Singh</h3></span>
         </div>
         <div class="fot2">
             <center> <span class="fot2con">&copy; 2017 CodeBros Pathology. All Rights Reserved. <br></span></center>
             <center> <span class="fot2con">Only Pathology Reports Available online.<br></span><span class="fot2con"> For X-Ray,Ultrasound,ECG,TMT reports- please visit the concerned center where the test has been conducted.</span></center>
         </div>
   
         </div>
         
         
          
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
  </body>
    
    
</html>