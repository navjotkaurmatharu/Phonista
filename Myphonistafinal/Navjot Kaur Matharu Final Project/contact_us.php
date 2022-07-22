<?php
include "includes/common.php"
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Contact Us | Phonista.com</title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>

<body style="padding-top: 50px;">
    
    <!-- Header -->
    <?php include 'includes/header.php'; ?>
    <br>
    
<div class="container">
    <div class="row">
        <div class="col-sm-10">
		  <h4 class="title">LIVE SUPPORT</h4>
          <div>
             <p>Donec sed condimentum leo. Maecenas eget pharetra nisl. Fusce eget mi ac est luctus tempor. In in condimentum magna, in mollis nisl. Praesent laoreet, erat et maximus vestibulum, urna leo consequat urna, sed placerat sem turpis sed urna. Donec vulputate metus in odio congue cursus a id lectus. Donec dignissim justo eget est commodo semper.</p>
          </div>
      </div>
        <div class="col-sm-6">
         <img style="border-radius:20px;" class="img-thumbnail" align="right" src="img/5T.jpg" alt="contact us">
        </div>
    </div>
    

<div class="row">
    <div class="col-sm-9">
        <div class="contact-form">
            <h4>Get In Touch</h4>
	           <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="sendemail.php">
				    
                    <div class="form-group col-sm-9">
				        <input type="text" name="name" class="form-control" required="required" placeholder="Name" >
				    </div>
				    
                    <div class="form-group col-sm-9">
				        <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				    </div>
				    
                    <div class="form-group col-sm-9">
				        <textarea name="message" id="message" required="required" class="form-control" rows="7" placeholder="Your Message Here"></textarea>
				    </div>
				            
                    <div class="form-group col-sm-7">
				                <input type="submit" style="background-color:#800000;color:#ffffff;margin-bottom:40px;" name="submit" class="btn btn-primary" value="Submit">
				    </div>
				</form>
        </div>
    </div>
	    		
        <div class="col-sm-3">
	       <div class="contact-info">
	           <h4 class="title">Contact Info</h4>
	               <address>
				    <p>WZ-34/124,Mukherjee Park Extn, Tilak Nagar, New Delhi-110018.</p>
				  
				    <p>India</p>
				    <p>Phone:8587081878</p>
				    <p>Email: navjot171299@gmail.com</p>
	               </address>
	               
	            <div><h4 class="title">Connect with Us On&#58;</h4>
                   <a href="http://www.facebook.com" target="_blank"><img src="./img/logofb.png" alt="fb logo" style="width:30px; height:30px; border:0"></a>
                   <a href="http://www.twitter.com" target="_blank"><img src="./img/logotwitter.png" alt="twitter logo" style="width:30px; height:30px; border:0 padding-left:10px;"></a>
				   <a href="http://www.whatsapp.com" target="_blank"><img src="./img/whatsapplogo.jpg" alt="whatsapp logo" style="width:30px; height:30px; border:0 padding-left:10px;"></a>
               </div>
            </div>
        </div>
    </div>
</div>



      <?php include 'includes/footer.php'; ?>
    </body>
</html>
