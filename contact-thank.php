<?php
require_once "Mail.php";

$first_name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['phone'];
$user_message = $_POST['comments'];

$message1 = "<html>
							<head>
							<title border=1>Enquiry For Enersave Lighting From Website!</title>
							</head>
							<body>
							<table border=0 bordercolor='blue' width=735>
							<tr align=left><th colspan=3 height=50><font color=red><u><B>Enquiry For Enersave Lighting From Website!</b></u></font></th></tr>
							<tr>
							<td width=150 height=25><b>Name</td>
							<td width=300 height=25>&nbsp;<b>:</b>&nbsp;&nbsp;";
							$message1.=$first_name;
							$message1.="</td></tr><tr><td width=150 height=25><b>Contact Number</td><td width=300 height=25>&nbsp;<b>:</b>&nbsp;&nbsp;";
							$message1.=$contact;
							$message1.="</td></tr><tr><td width=150 height=25><b>Email Address</td><td width=300 height=25>&nbsp;<b>:</b>&nbsp;&nbsp;";
							$message1.=$email;
							$message1.="</td></tr><tr><td width=150 height=25><b>Comment</td><td width=300 height=25>&nbsp;<b>:</b>&nbsp;&nbsp;";
							$message1.=$user_message;
							$message1.="</td></tr>";
							$message1.="</table>";
							$body=$message1.="</body></html>";

 $from = "doctor.shamala@gmail.com";
 $to = 'support@centaurus.in';
 //$to  = 'admin@centaurus.in' . ', ';  note the comma 
 $subject = "Enquiry For Enersave Lighting From Website!";
							    
 $headers = array ("MIME-Version"=> '1.0', 
                 "Content-type" => "text/html; charset=iso-8859-1",
                 "From" => $from,
                 "To" => $to, 
                 "Subject" => $subject);


$smtp = Mail::factory('smtp', array(
       'host' => 'ssl://smtp.gmail.com',
       'port' => '465',
       'auth' => true,
       'username' => 'centaurustechnologies@gmail.com',
       'password' => 'Runa@1984td'
   ));
 
 $mail = $smtp->send($to, $headers, $body);
 
 if (PEAR::isError($mail)) 
 {
   echo("<p>" . $mail->getMessage() . "</p>");
  } 
  else 
  {
   echo("");
  }
?>

<body>
<!-- Google Code for Lead Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 969921360;
var google_conversion_language = "en";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "e-UpCPiVtggQ0Ka_zgM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enersave - Energy Saving Lighting Solutions</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/cssmenustyles.css" rel="stylesheet">
    <link href="css/menucool.css" rel="stylesheet">
    <link href="css/popupwindow.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link href="css/theme-responsive.css" rel="stylesheet">    
    <link href='http://fonts.googleapis.com/css?family=Noticia+Text:700' rel='stylesheet' type='text/css'>
    <link href="http://roboto-webfont.googlecode.com/svn/trunk/roboto.all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/jquery.dlmenu.js"></script>
	<script>
        $(function() {
            $( '#dl-menu' ).dlmenu({
                animationClasses : { classin : 'dl-animate-in-5', classout : 'dl-animate-out-5' }
            });
        });
    </script>    
       
    <script src="js/bootstrap.min.js"></script>    
    <script src="js/menucool.js" type="text/javascript"></script>
    <script src="js/cssmenuscript.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/popupwindow.js"></script>
	<script src="js/demo.js"></script>
    <script src="js/custom.js"></script>
    <!--<script src="js/jquery-1.9.1.min.js"></script>-->
    <script src="js/modernizr.js"></script>
</head>

<body>
	<div class="container-fluid">
    	<div class="row">
        	<div class="site-layout">                
                
                <div class="col-lg-12">
                	<div class="row">
                        <div class="col-lg-2">
                        	<div class="row">
                            	<a href="index.html"><img src="images/logo.jpg" alt="" class="logo" /></a>
                            </div>
                        </div>
                        <div class="col-lg-10">
                        	<div class="row">
                        		<a href="#"><img src="images/els-logo.jpg" alt="" class="els-logo" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-12">
                	<div class="row">
                    	<div id='cssmenu'>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>                                
                               	<li class='has-sub'><a href='#'>Products &nbsp;<i class="fa fa-caret-down"></i></a>
                                  <ul>
                                     <li><a href="led-lighting/led-lamps.html">LED Lighting System</a></li>
                                     <li><a href="#">Commercials</a></li>
                                     <li class='has-sub'><a href='#'>Fancy Lights</a></li>
                                  </ul>
                               </li>
                               <li><a href="illumination.html">Illumination</a></li>
                               <li><a href="#">Clients</a></li>
                               <li class="active"><a href="contact-us.html">Contact Us</a></li>
                               
                               <!--<li class='has-sub'><a href='#'>COMMERCIAL PRODUCTS</a>
                                  <ul>
                                     <li class='has-sub'><a href='#'>Product 1</a>
                                        <ul>
                                           <li><a href='#'>Sub Product</a></li>
                                           <li><a href='#'>Sub Product</a></li>
                                        </ul>
                                     </li>
                                     <li class='has-sub'><a href='#'>Product 2</a>
                                        <ul>
                                           <li><a href='#'>Sub Product</a></li>
                                           <li><a href='#'>Sub Product</a></li>
                                        </ul>
                                     </li>
                                  </ul>
                               </li>-->
                               
                            </ul>
                        </div>
                        
                        <div class="column">
                            <div id="dl-menu" class="dl-menuwrapper">
                                <button class="dl-trigger">Open Menu</button>
                                <ul class="dl-menu">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="#">Products <i class="fa fa-caret-right fa-arrowicon"></i></a>
                                        <ul class="dl-submenu">
                                            <li><a href='led-lamps.html'>LED Lighting System</a></li>
                                            <li><a href='domesticdelights-ftl.html'>Commercials</a></li>
                                            <li><a href='#'>Fancy Lights</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="illumination.html">Illumination</a></li>
                                    <li><a href="#">Clients</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                </ul>
                            </div><!-- /dl-menuwrapper -->
                        </div>
                        
                    </div>
                </div>
                
                <div class="col-lg-12">
                	<div class="row">
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15553.97108785188!2d77.57256042327877!3d12.940288952915356!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe8abb6aa41f34692!2sEnersave+Lighting+Solutions+Private+Limited!5e0!3m2!1skn!2sin!4v1429179676821" width="100%" height="460" frameborder="0" style="border-top:1px solid #ffffff;"></iframe>
                    </div>
                    
                    <div class="contactinfo-hold">
                    <h1 class="heading1">Contact Us</h1>
                    	<div class="col-lg-7">
                        	<div class="row">
                            	<h1 class="heading2">Enersave Lightinhg Solutions Pvt. Ltd.</h1>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="left-icon"><i class="fa fa-map-marker"></i></div>
                                        <p class="address-right"><strong>#69, Netakallappa Circle, ,<br />Subbaram Shetty Road, Basavanagudi,<br />Bengaluru, Karnataka 560004.</strong></p>
                                    </div>
                                </div>
                            
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="left-icon"><i class="fa fa-mobile"></i></div>
                                        <p class="address-right"><span>+91 98440 12886</span></p>
                                    </div>
                                </div>
                            
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="left-icon"><i class="fa fa-envelope-square"></i></div>
                                        <p class="address-right"><a href="mailto:enersave.ls@gmail.com" class="contactemail-id">enersave.ls@gmail.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                        	<div class="row">
                            	<h1 class="enquire-heading">Enquiry</h1>       
                                
                                <div class="contact-response">
                                    <h4 class="thank-u-text text-center">Thank You For Contacting Us.</h4>
                                    <p class="replay-message text-center">We will reply you as early as possible.</p>
                                    <div class="text-center"><a href="contact-us.html" class="enquire-us-link">Click here to Enquire Us</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                </div>
                
                <div class="col-lg-12 margin-t-30">
                	<div class="row">
                    	<div class="footer">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-6">
                                            	<div class="row">
                                                    <div class="copyright">
                                                        <p>Copyright © 2015. Enersave Lighting. All Rights Reserved.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-6">
                                            	<div class="row">
                                                    <ul class="social-hold pull-right">
                                                       <li><a href="#" class="fb-icon" target="_blank"></a></li>
                                                       <li><a href="#" class="twitt-icon" target="_blank"></a></li>
                                                       <li><a href="#" class="linkedin-icon" target="_blank"></a></li>
                                                       <li><a href="#" class="youtube-icon" target="_blank"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>     
                
            </div>
        </div>
    </div>
            
</body>
</html>
