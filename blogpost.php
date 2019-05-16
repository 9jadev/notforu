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
    <?php $classObj->blogp(); ?>
    <title>SPRING Heritage BANK || <?php $classObj->blogs(); ?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Corporate Bank a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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

<div class="container"> 
    <div class="row">
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 " style="1px solid #e4e0e0; border-radius: 3px; margin-bottom: 10px;"> 
        <?php $classObj->blogcc(); ?>
</div> 

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
   <?php $classObj->duo(); ?>

        </div>
     </div> 
</div>  
 
 <div style="padding-bottom: 10px;">

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


