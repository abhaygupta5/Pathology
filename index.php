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
         <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/custom.css" rel="stylesheet" type="text/css">
        <script src="js/bootstrap.js" type="text/javascript"></script>
         <script src="carouselengine/jquery.js"></script>
    <script src="carouselengine/amazingcarousel.js"></script>
    <link rel="stylesheet" type="text/css" href="carouselengine/initcarousel-1.css">
    <script src="carouselengine/initcarousel-1.js"></script>
        
    </head>
        
     <body>



   <div class="main-image" style="float:left;">
       <a href="index.php"><img src="images/logo.JPG"></a>;
    </div>
         
<div class="btn-group" role="group" aria-label="Basic example" style="top:-80px;">
    <button type="button" onclick="window.location.href='lab_login.php'" class="btn btn-secondary"><span class="b">Lab Login</span></button>
    <button type="button" onclick="window.location.href='sorter_login.php'" class="btn btn-secondary"><span class="b">Tester Login</span></button>
</div>
  <div id="na">
    <nav class="navbar navbar-inverse" style="background-color:black;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      
        <a class="navbar-brand" href="#"><span class="data">Patient</span></a>
        <a class="navbar-brand" href="#"><span class="data">Book Test</span></a>
        <a class="navbar-brand" href="#"><span class="data">Test List</span></a>
        <a class="navbar-brand" href="#"><span class="data">Contact us</span></a>
      </div>
  </div>
        
         
</nav>
         </div>
<div id="allreport" style="margin-top:1%">
         <form method="POST" action="patient_process.php">
             <h3>View all your reports</h3>
  <div class="form-group">
    <label for="exampleInputEmail1" class="formkalabel">Aadhar Card ID</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Aadhar Card ID" name="user" required="required">
    <small id="emailHelp" class="form-text text-muted">We'll never share your Aadhar ID with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="formkalabel">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
  </div>
  
<button type="submit" class="btn btn-primary" id="formbutton">Submit</button>
</form>
</div>
         <div id="slider">
<div id="amazingcarousel-container-1">
    <div id="amazingcarousel-1" style="display:none;position:relative;width:100%;max-width:600px;margin:0px auto 0px;">
        <div class="amazingcarousel-list-container">
            <ul class="amazingcarousel-list">
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
<div class="amazingcarousel-image"><a href="images/second-lightbox.jpg" title="second"  class="html5lightbox" data-group="amazingcarousel-1"><img src="images/second.jpg"  alt="second" /></a></div>                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
<div class="amazingcarousel-image"><a href="images/third-lightbox.jpg" title="third"  class="html5lightbox" data-group="amazingcarousel-1"><img src="images/third.jpg"  alt="third" /></a></div>                    </div>
                </li>
            </ul>
            <div class="amazingcarousel-prev"></div>
            <div class="amazingcarousel-next"></div>
        </div>
        <div class="amazingcarousel-nav"></div>
        <div class="amazingcarousel-engine"><a href="http://amazingcarousel.com">jQuery Image Carousel</a></div>
    </div>
</div>
         </div>
         
<div id="horizontal"></div>
         <h1 align="center">Health Packages</h1>
         
         <div id="healthpack">
         
         <div class="card card1" style="width: 20rem;">
  <div class="card-body">
    <h4 class="card-title">Swasth:Basic Health Checkup</h4>
    
    <p class="card-text" id="ct">&#8377;  1500</p>
    
  </div>
</div>
             <div class="card card1" style="width: 20rem;">
  <div class="card-body">
    <h4 class="card-title">Swasth:Advamced Heath Checkup</h4>
    <p class="card-text" id="ct">&#8377;  2500</p>
    
  </div>
</div>
             <div class="card card1" style="width: 20rem;">
  <div class="card-body">
    <h4 class="card-title">Swasth:Vitamins Package</h4>
    <p class="card-text" id="ct">&#8377;  1200</p>
   
  </div>
</div>
             <div class="card card1" style="width: 20rem;">
  <div class="card-body">
    <h4 class="card-title">Swasth:Minerals Package</h4>
    
    <p class="card-text" id="ct">&#8377;  1400</p>
    
  </div>
</div>
         
         </div>
         
         <div id="horiline2"></div>
        
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
         
         <div id="horiline3"></div>
         
         <div class="fot">
             <div class="labadd1"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14671.136368119658!2d80.0251206479392!3d23.17807896598182!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xffe30099d058452e!2sIndian+Institute+of+Information+Technology+Design+%26+Manufacturing+Jabalpur!5e0!3m2!1sen!2sin!4v1507460457246" width="500" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></div>
             <div class="labadd1"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14671.136368119658!2d80.0251206479392!3d23.17807896598182!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xffe30099d058452e!2sIndian+Institute+of+Information+Technology+Design+%26+Manufacturing+Jabalpur!5e0!3m2!1sen!2sin!4v1507460457246" width="500" height="200" frameborder="0" style="border:2" allowfullscreen></iframe></div>
             <span id="labadd"><h2> Lab Addresses</h2></span>
             
             <div class="verticalline"></div>
             <span class="contact"><h2>Contact Us</h2></span>
             <span class="contact1"><h3>Abhay Gupta -> Phno.-9479632598</h3></span>
         <span class="contact1"><h3>Shubham Kumar -> Phno.-8340661850</h3></span>
             <span class="contact1"><h3>Abhinav Singh -> Phno.-9456266850</h3></span>
         </div>
         <div class="fot2">
             <span class="fot2con">&copy; 2017 CodeBros Pathology. All Rights Reserved. <br></span>
             <span class="fot2con">Only Pathology Reports Available online.<br></span><span class="fot2con"> For X-Ray,Ultrasound,ECG,TMT reports- please visit the concerned center where the test has been conducted.</span>
         </div>
         
         
         
         
         
         
  </body>
    
    
</html>