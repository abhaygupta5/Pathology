<?php include 'connection.php' ?>
<!DOCTYPE html>
<html>
    <head>
    <title>
        CB Pathology
        </title>
         <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <script src="js/bootstrap.js" type="text/javascript"></script>
         <script src="carouselengine/jquery.js"></script>
    <script src="carouselengine/amazingcarousel.js"></script>
    <link rel="stylesheet" type="text/css" href="carouselengine/initcarousel-1.css">
    <script src="carouselengine/initcarousel-1.js"></script>
    </head>
    <style>
        
        .main-image{
            width : 35%;
        }
        .btn-group{
            float:inherit;
            margin-left:75%;
            margin-top:1%;
    
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
        #allreport{
            width:30%;
            margin-left:10%;
            border:5px solid black;
            border-spacing: 10px 10px;
            border-collapse: separate;
            padding:15px;
        }
        .formkalabel{
            padding-top:30px;
            margin-left:3%;
            font-size:120%;
        }
        #formbutton{
            margin-top:20px;
            margin-left:37%;
            font-size:140%;
        }
        #slider{
            width:50%;
            margin-left:50%;
            margin-bottom: 20%;
            margin-right:5%;
            top:-300px;
            position:relative;
            padding-right:5%;
        }
        #horizontal{
            width:100%;
            height:1px;
            margin-top:-28%;
            background: #000000;
        
            
        }
        
    </style>
    
     <body>
<div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-secondary"><span class="b">Lab Login</span></button>
    <button type="button" class="btn btn-secondary"><span class="b">Tester Login</span></button>
</div>


   <div class="main-image">
    <img src="images/logo.JPG">;
         </div>
  
  <div id="na">
    <nav class="navbar navbar-inverse">
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
<div id="allreport">



        <form method="POST" action="patient.php"> 
             <h3>View all your reports</h3>




  <div class="form-group">
    <label for="exampleInputEmail1" class="formkalabel">Aadhar Card ID</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter Aadhar Card ID" name='user' length="12"  >
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
         
         
         
  </body>
    
    
</html>


















































