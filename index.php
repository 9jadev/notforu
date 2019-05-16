<?php
ob_start();
require('script.php');
    $classObj = new ok;
    $classObj->dbcon();
?>
    <!DOCTYPE html>
    <html lang="en">
    <!-- Head -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Spring Heritage Banks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    
     <meta property="og:description" content="SPRING ,HERITAGE, BANK , BANK , FINANCIAL INSTITUTION , INTERNET PAYMENTS "/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
     <meta property="og:site_name" content="SPRING HERITAGE BANK"/>
    <meta property="og:title" content="spring heritage bank , personal banking , cards, "/>

    
    <!-- .css files -->
    <link href="css/bars.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/font-awesome.css" />
     <link href="assets/docs.css" rel="stylesheet" type="text/css" media="all">
     <link rel="stylesheet" href="css/flag-icon.css" type="text/css" media="all"/>

     <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
     
    <!-- //.css files -->
    <!-- Default-JavaScript-File -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        
    </script>
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
}
#login > span {
    color: red;
}
.jumbotron{
background: linear-gradient(to right, #eeeeee0d, #eeeeee1f);  

}

.boo{
    color: white;
    padding: 6px;
    border-radius: 5px;
}

  bae{
     border: 1px dotted #2ebaef;
   }
</style>
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



    <!-- //Top-Bar -->
    <div class="banner-main jarallax">
        <div class="container">
            <div class="banner-inner">
                <div class="col-md-5 banner-left">
                    
                 <form id="login" method="POST" enctype="multipart/form-data">
                        <center><h2 style="color: white;">SPRING HERITAGE BANK</h2></center>
                        <center><h4 style="color: white;">CREATE AN ACCOUNT</h4></center>
                        <?php echo $classObj->register() ?>
                        <input type="text" id="fn" name="fn" placeholder="First Name" required=""/>
                        <span class="error_first_name"></span>
                        
                        <input type="text" id="ln" name="ln" placeholder="Last Name" required=""/>
                        <span class="error_last_name"></span>

                        <input type="text" id="un" name="un" placeholder="User name" required=""/>
                        <span class="error_user_name"></span>

                        <input type="email" id="em" name="em" placeholder="User Email" required=""/>
                        <span class="error_email"></span>

                        <input type="tel" id="tel" name="ph"  placeholder="Phone number"   maxlength="15" required=""/>
                        <span style="color: green"> PLEASE ENSURE YOUR PHONE NUBMER IS IN INTERNATIONAL FORMAT (e.g uk 44XXXXXXX)</span>
                        <span class="error_phone"></span>
                        <span class="error_phone1"></span>
                    
                        <input type="password" name="pass" id="pass" placeholder="User Password" required=""/>
                        <span class="error_pass"></span>

                        <input type="password" name="cpass" id="conpass" placeholder="Confirm Password" required=""/>
                        <span class="error_pass2"></span>
                        
                         <div class="submit">
                            <input type="submit" id="sub" name="process" value="Proceed">
                        </div>
                        <div style="margin-top:15px;color:white" id="result">
                         </div>
                    </form>    
            <script type="text/javascript">
              
                $(document).ready(function() {
                 $('.error_first_name').hide();
                 $('.error_last_name').hide();
                 $('.error_user_name').hide();
                 $('.error_phone').hide();
                 $('.error_phone1').hide();
                 $('.error_pass').hide();
                 $('.error_pass2').hide();
                 
                 var efn = false;
                 var eln = false;
                 var eun = false;
                 var ep = false;
                 var ep2 = false;
                 var etel = false;
                  var etel11 = false;   
                 $("#un").focusout(function(){
                  
                    check_un();
                 });

                 $("#pass").focusout(function(){
                  
                    check_pass();
                 });

                 $("#conpass").focusout(function(){
                  
                    check_con_pass();
                 });
                 $("#tel").focusout(function(){
                  
                    check_tel();
                 });

                 $("#fn").focusout(function(){
                  
                    check_fn();
                 });

                 $("#ln").focusout(function(){
                      
                    check_ln();
                 });
                 
                $("form").submit(function(){
                    efn = false;
                    eln = false;
                    eun = false;
                    ep = false;
                    ep2 = false;
                    etel =false;
                     
                    check_fn();
                    check_ln();
                    check_un();
                    check_tel();
                    check_pass();
                    check_con_pass();

                    if (efn == false && eun == false && eln == false && ep == false && ep2 == false && etel == false ) {
                        return true;
                    }else{
                        return false;
                    }
                });             


                 function check_pass(){
                    var len_pass = $("#pass").val().length;
                    if (len_pass < 5 ||  len_pass > 30) {
                        $('.error_pass').html('password should  be between 5 and  20 characters');
                        $('.error_pass').show();
                          ep = true ;   
                    }else{
                        $('.error_pass').hide();   
                    }
                 }


                 function check_tel(){
                    var tell = $("#tel").val();
                    var len_tel = $("#tel").val().length;
                    if ( len_tel < 1 ||  len_tel > 14 ) {
                        $('.error_phone').html('phone number should be greater than 1 and lesser than 12 eg. 123XXXXXXXX');
                        $('.error_phone').show();
                          etel = true ;   
                    }    
                    else{
                        $('.error_phone').hide();   
                    }

                    var validn = /^[0-9-+]+$/;

                    if (validn.test(tell)) {
                        $('.error_phone1').hide();
                    }else{
                         $('.error_phone').html(' invalid phone number , it should be like 123XXXXXXXX');
                        $('.error_phone1').show();
                          etel1 = true ; 
                    }
                 }


                 function check_con_pass(){
                    var len_pass = $("#pass").val();
                    var len_conpass = $("#conpass").val();
                    if (len_pass  !=  len_conpass) {
                        $('.error_pass2').html('password and confirm password should be equal');
                        $('.error_pass2').show();
                          ep2 = true ;   
                    }else{
                        $('.error_pass2').hide();   
                    }
                 }

                 function check_ln(){
                    var len_ln = $("#ln").val().length;
                    if (len_ln < 5 ||  len_ln > 30) {
                        $('.error_last_name').html('last name should  be between 5 and  20 characters');
                        $('.error_last_name').show();
                        eln = true ;   
                    }else{
                        $('.error_last_name').hide();   
                    }
                 }

                 function check_fn(){
                    var  len_fn = $("#fn").val().length;

                    if (len_fn < 5 ||  len_fn > 30) {
                        $('.error_first_name').html('first name should  be between 5 and  20 characters');
                        $('.error_first_name').show();
                        efn = true ;   
                    }else{
                          $('.error_first_name').hide();
                    }
                 }
                  

                 function check_un(){
                    var  len_un = $("#un").val().length;

                    if (len_un < 5 ||  len_un > 30) {
                        $('.error_user_name').html('user name should  be between 5 and  20 characters');
                        $('.error_user_name').show();
                        eun = true ;   
                    }else{
                          $('.error_user_name').hide();
                    }
                 }                 
            });
            </script>        

                </div>
                <div class="col-md-7 banner-right">
						<h1>Online Banking with SPRING HERITAGE BANK !</h1>
						<h4>Our online banking features a new ‘look and feel’ along with high-tech banking solutions! Here are just a few of the many benefits of banking online.</h4>
							<div class="banner-right-text">
								<div class="main-icon">
									<i class="fa fa-share" aria-hidden="true"></i>
								</div>
								<p>Access Account Balances and Transaction History.</p>
							<div class="clearfix"></div>
							</div>
							<div class="banner-right-text">
								<div class="main-icon">
									<i class="fa fa-share" aria-hidden="true"></i>
								</div>
								<p>Make Payments Online.</p>
							<div class="clearfix"></div>
							</div>
							<div class="banner-right-text">
								<div class="main-icon">
									<i class="fa fa-share" aria-hidden="true"></i>
								</div>
								<p>Transfer Funds – Between SPRING HERITAGE BANK Accounts and to Other Financial Institutions</p>
							<div class="clearfix"></div>
							</div>
							<div class="banner-right-text">
								<div class="main-icon">
									<i class="fa fa-share" aria-hidden="true"></i>
								</div>
								<p>View and Download Statements and Check Images.</p>
							<div class="clearfix"></div>
							</div>
							<div class="banner-right-text">
								<div class="main-icon">
									<i class="fa fa-share" aria-hidden="true"></i>
								</div>
								<p>Safe and Secure.</p>	
							<div class="clearfix"></div>
							</div>
								<div class="banner-right-text">
								<div class="main-icon">
									<i class="fa fa-share" aria-hidden="true"></i>
								</div>
								<p>Convenient – Access All Day, Any Day.</p>	
							<div class="clearfix"></div>
							</div>
							<div class="banner-right-text">
								<div class="main-icon">
									<i class="fa fa-share" aria-hidden="true"></i>
								</div>
								<p>My Finance Feature – Manage your Personal Finances, Whether Here or at Another Institution.</p>	
							<div class="clearfix"></div>
							</div>
							<br>
								<p>
Existing customers can enroll in Online Banking with SPRING HERITAGE Bank by clicking on the Online Banking Sign-In link on our website.</p>
					</div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    <p style="height: 30px;"> </p>
        <div class="container">
            <div class="row">
     <h1 class="text-center" style="color: white; margin-bottom:5px; "> NEWS & STORIES </h1>

<?php $classObj->pulmess(); ?>



         </div>
        </div>
  <p style="height: 30px;"></p>
     <!-- other stories -->
   <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 boo" >
        <div class="bae">
      <strong>Checking Accounts</strong><br>
           It’s never too early to begin saving. Talk with our customer service to see how savings accounts help you put money aside.
           Choose the checking account that works best for you. See Spring Heritage Account  Checking and other SPRING HERITAGE Coupon offers for new customers. Make purchases with your debit card, and bank from almost anywhere with your phone, tablet or computer and at our 16,000 SPRING HERITAGE ATMs and 5,300 branches nationwide.
        </div>
            
    </div>

<div class="col-lg-4 col-md-4 boo">
      <div class="bae">
             
  <strong> Cards </strong><br> 
prepaid
With SPRING HERITAGE you’ll get the reloadable prepaid card with the security and convenience. Load your card with direct deposit and at thousands of SPRING HERITAGE ATMs. You can use your card to make purchases in stores and online.
 Credit <br>
Choose from our SPRING HERITAGE credit cards to help you buy what you need. Many offer rewards that can be redeemed for cash back, or for rewards at companies like Disney, Marriott, Hyatt, United or Southwest Airlines. We can help you find the credit card that matches your lifestyle. Plus, get your free credit score!
     
      </div>
</div>

   
<div class="col-lg-4 col-md-4 boo" >
   <div class="bae">
  <strong> Mortgages </strong>  <br>
Get a mortgage or refinance your home with SPRING HERITAGE. See today's mortgage rates, figure out what you can afford with our mortgage calculator before applying for a mortgage.
    <br>
     Home Equity Line of Credit
You might be able to use a portion of your home's value to spruce it up or pay other bills with a Home Equity Line of Credit. To find out if you may be eligible for a HELOC, use our HELOC calculator and other resources before you apply.
  <br>
       Car Buying & Loans
Auto finance  from SPRING HERITAGE Shop through the SPRING HERITAGE Car Buying Service to auto finance car buying page for your next car, apply for a car loan to auto finance .         
   </div>       
 </div>

<div class="col-lg-4 col-md-4 boo">
  <div class="bae">
<strong>Investment And Private Clients</strong><br> 
Whether you're starting to invest or want to review your plan, a financial advisor can develop a strategy for reaching your goals.
<br>
SPRING HERITAGE Private Client
Ask us about SPRING HERITAGE Private Client, a unique level of service that combines concierge banking from SPRING HERITAGE 

  </div>   
 </div>

<div class="col-lg-4 col-md-4 boo">
       <div class="bae">
      <strong> Business Banking </strong> <br>
   With Business Banking, you’ll receive guidance from a team of business professionals who specialize in helping improve cash flow, providing credit solutions, and on managing payroll. SPRING HERITAGE also offers online and mobile services, business credit cards, and payment acceptance solutions built specifically for businesses.
    
       </div>
 </div>

<div class="col-lg-4 col-md-4 boo" >
    <div class="bae">
      <strong>Sports & Entertainment </strong> <br>
    SPRING HERITAGE gives you access to unique sports, entertainment and culinary events through SPRING HERITAGE experiences and our exclusive partnerships such as the US OpenU. S. Open and Madison Square GardenM       
        
    </div>
</div>

<div class="col-lg-12 col-md-12 boo" >
<strong>INVESTMENT AND INSURANCE PRODUCTS ARE: • NOT FDIC INSURED • NOT INSURED BY ANY FEDERAL GOVERNMENT AGENCY  • NOT A DEPOSIT OR OTHER OBLIGATION OF, OR GUARANTEED BY SPRING HERITAGE  BANK, N.A. OR ANY OF ITS AFFILIATES • SUBJECT TO INVESTMENT RISKS, INCLUDING POSSIBLE LOSS OF THE PRINCIPAL AMOUNT INVESTED.</strong>

    <P> “SPRING HERITAGE ” the SPRING HERITAGE BANK  logo is a trademarks of SPRING HERITAGE BANK.  

Investing involves market risk, including possible loss of principal, and there is no guarantee that investment objectives will be achieved.

SPRING HERITAGE BANK and its affiliates offer investment products, which may include bank managed accounts and custody, as part of its trust and fiduciary services. Other investment products and services, such as brokerage and advisory accounts, are offered through Spring Heritage Securities LLC (SHBS), a member of FINRA(Opens Overlay) and SIPC(Opens Overlay). Annuities are made available through Spring Insurance Agency, Inc. (CIA), a licensed insurance agency, doing business as Spring Insurance Agency Services, Inc. in pennsylvania. SHB, SHBS and CIA are affiliated companies under the common control of Spring heritage Products not available in all states.

"Spring Private Client" is the brand name for a banking and investment product and service offering.   </P>

</div>

    
    </div>
   </div>
 </div>

    
   
   

    <!-- copyright -->
<section class="copyright">
   <?php include("foot.php"); ?>
</section>
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
<?php ob_end_flush(); ?>

