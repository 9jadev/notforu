
    <!DOCTYPE html>
    <html lang="en">
    <!-- Head -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title> SPRING HERITAGE BANK || contact us </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="spring heritage , bank ,contact us, payment, locations, loan, credit, debit, " />
    
    
    <meta name="description" content="spring heritage bank contact us " />
    <!-- .css files -->
    <link href="css/bars.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/font-awesome.css" />
     <link href="assets/docs.css" rel="stylesheet" type="text/css" media="all">
     <link rel="stylesheet" href="css/flag-icon.css" type="text/css" media="all" />
      <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
     
    <!-- //.css files -->
    <!-- Default-JavaScript-File -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- //Default-JavaScript-File -->
    <!-- fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Ropa+Sans:400,400i&amp;subset=latin-ext" rel="stylesheet">
    <!-- //fonts -->
    <!-- scrolling script -->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <style>
        #progress{
            display: none;
        }
    </style>
    <!-- //scrolling script -->

      <style>.select {
    position: relative;
    display: inline-block;
    margin-bottom: 15px;
    width: 100%;
}    .select select {
        font-family: 'Arial';
        display: inline-block;
        width: 100%;
        cursor: pointer;
        padding: 13px 14px;
        outline: 0;
        border: 0px solid #000000;
        border-radius: 0px;
        background: #f7f7f;
        color: #7B7B7B;
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
    }
        .select select::-ms-expand {
            display: none;
        }
        .select select:hover,
        .select select:focus {
            color: #000000;
            background: #CCCCCC;
        }
        .select select:disabled {
            opacity: 0.5;
            pointer-events: none;
        }
.select_arrow {
    position: absolute;
    top: 16px;
    right: 19px;
    width: 0;
    height: 0;
    border: solid #7B7B7B;
    border-width: 0 3px 3px 0;
    display: inline-block;
    padding: 3px;
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
}
.select select:hover ~ .select_arrow,
.select select:focus ~ .select_arrow {
    border-top-color: #000000;
}
.select select:disabled ~ .select_arrow {
    border-top-color: #CCCCCC;
}</style>
</head>    <!-- //Head -->
    <!-- Body -->
    <body>
    
<div class="top-main">
    <div class="number">
        <h3><i class="fa fa-envelope" aria-hidden="true"></i> info@spring-heritagebank.com</h3>
        <div class="clearfix"></div>
    </div>
    <div class="social-icons">
        <ul class="top-icons">
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        </ul>
    </div>
    <div class="clearfix"></div>
</div>
<!-- Top-Bar -->
<?php include("head.php") ?>
<div class="logo">
    <a href="index.php"><!--<i class="fa fa-inr" aria-hidden="true"></i>--><img src="images/logo.png" /> SPRING <span> HERITAGE BANK </span></a>
</div>

 <!-- contact -->
    <section class="contact" id="contact">
       
        <div class="container">
            <div class="contact-heading">
                <h3>Contact us</h3>
            </div>
            <div class="contact-grids">
                <div class=" col-md-6 contact-form">
                    <form  method="post">
            <?php 
               if (isset($_POST["sub2"])) {
                   $sub =  $_POST["sub"];
                   $name = $_POST["name"];
                   $to = $_POST["email"];
                   $message = $_POST["age"];
                  $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@spring-heritagebank.com>' . "\r\n";


                   $txt = '
                              <html lang="en">
<head>
     <style type="text/css">
    body { 
      padding-top: 70px; 
      background-color: beige;
    }
    </style>

</head>
<body style=" padding: 4px 4px 4px 4px; border: 2px dotted black; border-radius:5px; ">
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; <img alt="SPRING HERTAGE LOGO" src="https://spring-heritagebank.com/images/logo.png" style="height:70px; width:64px" />

</p>

<h2><span style="font-family:Arial,Helvetica,sans-serif">&nbsp;&nbsp; SPRING HERITAGE BANK</span></h2>

<h3><strong>Dear&nbsp; customer ,</strong></h3>

<p><strong>&nbsp; Thank you for contacting Spring Heritage Bank 24Hrs call and message support center.&nbsp; &nbsp; This is a system -generated&nbsp; reply automatically sent on receipt of your mail. Please do not reply.</strong></p>

<p><strong>Your mail is important to us and you&nbsp; will be responded to personally by a member of our team within 24 hours</strong></p>

<p><strong>&nbsp; &nbsp;Please ensure you do not reveal your PIN , Online banking password , responses from your token&nbsp; ( token generated number ) or full card number ( PAN ) to anyone. First Heritage Bank would not resquest these details from you at anytime .</strong></p>

<p><strong>Also , do not open links , respond to suspicious calls, mails or letters requesting your bank details . Such messages are fraudulent and are not from First heritage Bank&nbsp;</strong></p>

<p><strong>for enquiries please contact us</strong></p>

<p><strong>website&nbsp; :&nbsp;<a href="https://spring-heritagebank.com" target="_blank">spring-heritagebank.com</a></strong></p>

<p><strong>email: info@spring-heritagebank.com</strong></p>

<p><strong>telephone : + 15187221474 </strong></p>

<p>&nbsp;</p>

<p><strong>&nbsp;&nbsp;</strong></p>

<hr>
The Information contained and transmitted by this E-MAIL is proprietary to Spring Heritage Bank and/or its Customer and is intended for use only by the individual or entity to which it is addressed, and may contain information that is privileged, confidential or exempt from a disclosure under applicable law.
If this is a forwarded message, the content of this E-MAIL may not have been sent with the authority of the Bank. Spring Heritage Bank shall not be liable for any mails sent without due authorisation or through unauthorised access.
If you are not the intended recipient, an agent of the intended recipient or a person responsible for delivering the information to the named recipient, you are notified that any use, distribution, transmission, printing, copying or dissemination of this information in any way or in any manner is strictly prohibited.
If you have received this communication in error, please delete this mail and notify us immediately at info@spring-heritagebank.com.
</body>
</html>

                              
                               '; 
                      $mess2 = $name." ".$message;
                    $conta =  wordwrap($mess2 , 70);  
                   mail($to,'Spring heritage Request confirmation',$txt,$headers);
                   $header2 = "From: ".$to;
                 $send2 =   mail('info@spring-heritagebank.com',$sub,$mess2,$header2);
                   if($send2){
                       echo ' <div class="alert alert-successful"style="color:white;" > Thank you for contacting us we will get back to you before 24  hours</div>';
                    }
                }
                        ?>
                        <input type="text" name="sub" placeholder="Subject" required=""/>
                        <input type="text" name="name" placeholder="Your name" required=""/>
                        <input type="email" name="email" placeholder="Your mail" required=""/>
                        <textarea placeholder="Message" name="age" required=""></textarea>
                        <div class="submit1">
                    <input type="submit" name="sub2" >
                        </div>
                    </form>
                </div>
                
       
       
                <div class=" col-md-6 map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d97755.83196667333!2d-76.64448758861418!3d40.03368741613019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x89c89d1b343f37f7%3A0x5d14d856239fa4ce!2sColumbia%2C+Pennsylvania%2C+USA!3m2!1d40.033708499999996!2d-76.50440979999999!5e0!3m2!1sen!2sng!4v1525105161429" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>  
            
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>
    <!-- //contact -->

    <!-- copyright -->
<section class="copyright">
   <?php include("foot.php"); ?>
</section>
<!-- //copyright --><!--Start of Tawk.to Script-->

    <script src="js/jarallax.js"></script>
    <script src="js/SmoothScroll.min.js"></script>
    <script type="text/javascript">
        /* init Jarallax */
        $('.jarallax').jarallax({
            speed: 0.5,
            imgWidth: 1366,
            imgHeight: 768
        })
    </script>

    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>

    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {

            $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
    <!-- //here ends scrolling icon -->
    <script src="js/bars.js"></script>
    </body>
    <!-- //Body -->
    
</html>


