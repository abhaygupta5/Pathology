
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
         <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/animate.css" rel="stylesheet" type="text/css">
        <link href="css/custom.css" rel="stylesheet" type="text/css">
        <link href="css/1140.css" rel="stylesheet" type="text/css">
        <script src="js/bootstrap.js" type="text/javascript"></script>
        
        
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
                font-size:170%;
                color:bisque;
                font-weight: bold;
            }
     

            .fhead{
                font-size: 160%;
                color:floralwhite;
            }
            #mainh{
                margin-bottom: 3%;
                margin-top:1%;
                padding-top: 2%;
                color:black;
                font-family: sans-serif;
                
            }
            .book{
                -webkit-animation-delay:1.5s;
                -moz-animation-delay:1.5s;
            }
            .mainbut{
                margin-top:8.5%;
                font-size:160%;
                width:25%;
                height:20%;
                
            }
            .mpeople{
                padding-top: 10%;
            }
            .dhead{
                margin-top:3%;
                margin-bottom:2%;
                color:white;
            }
            .form-control{
                height:50px;
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
        <div class="pimg2">
        
        <div class="book animated flipInY">
            <h1 align="center" id="mainh">Fill Details to Book Test</h1>
              <form class="container" id="needs-validation" novalidate method="post" action="booktest_process.php" name="form">
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01" class="fhead">Aadhar Id *</label>
      <input type="text" class="form-control" id="validationCustom01"  title="Enter 12 digit aadhar id" placeholder="Aadhar Id" pattern="[0-9]{12}" name="aadhar" required >
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02" class="fhead">Name *</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Name" name="name" required>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03" class="fhead">City *</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="City" name="city" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04" class="fhead">Street *</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="Street" name="street" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05" class="fhead">Pincode *</label>
      <input type="text" class="form-control" id="validationCustom05" title="Enter a valid Pincode" name="pin" placeholder="Pincode"  pattern="[0-9]{8}" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
                  
                  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03" class="fhead">Date of Birth *</label>
      <input type="date" class="form-control" id="validationCustom03" placeholder="DOB" name="dob" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04" class="fhead">Phone No. *</label>
      <input type="text" class="form-control" id="validationCustom04"  title="Enter a valid number" placeholder="Phone no." name="phone" pattern="[0-9]{10}"required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05" class="fhead">Alternate Phone No.</label>
      <input type="text" class="form-control" id="validationCustom05" title="Enter a valid number" placeholder="Alternate Phone No." name="aphone" pattern="[0-9]{10}" >
    </div>
                      
<div class="col-md-3 mb-3">
    
  <div >
      <h5 class="dhead">Choose 1st Test</h5>
      <select class="btn btn-secondary dropdown-toggle" name="test[]" required>
         
        <option class="dropdown-item" >Sugar</option>
        <option class="dropdown-item" >AIDS</option>
      <option class="dropdown-item" >HDL</option>
      <option class="dropdown-item" >LDL</option>
      <option class="dropdown-item" >LFT</option>
      <option class="dropdown-item" >Thyroid</option>
      <option class="dropdown-item" >Urine Test</option>
      <option class="dropdown-item" >Adrenal</option>
      <option class="dropdown-item" >Leadtest</option>
      <option class="dropdown-item" >RBC test</option>
      <option class="dropdown-item" >Marrow Test</option>
      <option class="dropdown-item" >Dengue</option>
      <option class="dropdown-item" >Neuron test</option>
      <option class="dropdown-item" >WBC test</option>     
      <option class="dropdown-item" >Haemoglobin</option>
      </select>
  </div>

    </div>
                      
<div class="col-md-3 mb-3">
    
  <div >
      <h5 class="dhead">Choose 2nd Test</h5>
      <select class="btn btn-secondary dropdown-toggle" name="test[]">
        
        <option class="dropdown-item" >Sugar</option>
        <option class="dropdown-item" >AIDS</option>
      <option class="dropdown-item" >HDL</option>
      <option class="dropdown-item" >LDL</option>
      <option class="dropdown-item" >LFT</option>
      <option class="dropdown-item" >Thyroid</option>
      <option class="dropdown-item" >Urine Test</option>
      <option class="dropdown-item" >Adrenal</option>
      <option class="dropdown-item" >Leadtest</option>
      <option class="dropdown-item" >RBC test</option>
      <option class="dropdown-item" >Marrow Test</option>
      <option class="dropdown-item" >Dengue</option>
      <option class="dropdown-item" >Neuron test</option>
      <option class="dropdown-item" >WBC test</option>     
      <option class="dropdown-item" >Haemoglobin</option>     
       <option class="dropdown-item" selected>None</option>
      </select>
  </div>

    </div>
                       
   <div class="col-md-3 mb-3">
    
  <div >
      <h5 class="dhead">Choose 3rd Test</h5>
      <select class="btn btn-secondary dropdown-toggle" name="test[]">
         
        <option class="dropdown-item" >Sugar</option>
        <option class="dropdown-item" >AIDS</option>
      <option class="dropdown-item" >HDL</option>
      <option class="dropdown-item" >LDL</option>
      <option class="dropdown-item" >LFT</option>
      <option class="dropdown-item" >Thyroid</option>
      <option class="dropdown-item" >Urine Test</option>
      <option class="dropdown-item" >Adrenal</option>
      <option class="dropdown-item" >Leadtest</option>
      <option class="dropdown-item" >RBC test</option>
      <option class="dropdown-item" >Marrow Test</option>
      <option class="dropdown-item" >Dengue</option>
      <option class="dropdown-item" >Neuron test</option>
      <option class="dropdown-item" >WBC test</option>     
      <option class="dropdown-item" >Haemoglobin</option>     
       <option class="dropdown-item" selected>None</option>
      </select>
  </div>

    </div>
                      
    <div class="col-md-3 mb-3">
    
  <div >
      <h5 class="dhead">Choose 4th Test</h5>
      <select class="btn btn-secondary dropdown-toggle" name="test[]">
          
        <option class="dropdown-item" >Sugar</option>
        <option class="dropdown-item" >AIDS</option>
      <option class="dropdown-item" >HDL</option>
      <option class="dropdown-item" >LDL</option>
      <option class="dropdown-item" >LFT</option>
      <option class="dropdown-item" >Thyroid</option>
      <option class="dropdown-item" >Urine Test</option>
      <option class="dropdown-item" >Adrenal</option>
      <option class="dropdown-item" >Leadtest</option>
      <option class="dropdown-item" >RBC test</option>
      <option class="dropdown-item" >Marrow Test</option>
      <option class="dropdown-item" >Dengue</option>
      <option class="dropdown-item" >Neuron test</option>
      <option class="dropdown-item" >WBC test</option>     
      <option class="dropdown-item" >Haemoglobin</option>     
       <option class="dropdown-item" selected>None</option>
      </select>
  </div>

    </div>
                      
                      
  </div>
                  
                  
               <center>   
  <button class="btn btn-primary mainbut" type="submit" id="submit">Book Test</button>
                  </center>
</form>

        </div>
        </div>
     
         <div class="pimg3">

         <div class="peoplesay">
<h1 class="mpeople">What People say about us</h1>

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
         
         
         <div id="horiline3"></div>
         
         <div class="fot">
             <div class="labadd1"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14671.136368119658!2d80.0251206479392!3d23.17807896598182!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xffe30099d058452e!2sIndian+Institute+of+Information+Technology+Design+%26+Manufacturing+Jabalpur!5e0!3m2!1sen!2sin!4v1507460457246" width="500" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div>
         
             <span id="labadd"><h2> Lab Address</h2></span>
             
             <div class="verticalline"></div>
             <a href="contact.php"> <span class="contact"><h2>Contact Us</h2></span></a>
             <span class="contact1"><h3>Abhay Gupta</h3></span>
         <span class="contact2"><h3>Shubham Kumar</h3></span>
             <span class="contact3"><h3>Abhinav Singh</h3></span>
         </div>
         <div class="fot2">
             <center><span class="fot2con">&copy; 2017 CodeBros Pathology. All Rights Reserved. <br></span></center>
             <center>  <span class="fot2con">Only Pathology Reports Available online.<br></span><span class="fot2con"> For X-Ray,Ultrasound,ECG,TMT reports- please visit the concerned center where the test has been conducted.</span></center>
         </div>
             
             <script type="text/javascript">
                 function validateForm(){
                     var x=document.forms[]["aadhar"].value.length;
                     if(x!=12){
                         alert("Aadhar id must be 12 digit long");
                         return false;
                     }
                 }
             </script>
   
        
    
    </body>
</html>
    
    
    
    
    
    
    

















