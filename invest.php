<?php ob_start(); ?>

<?php
require('../script.php');
    $classObj = new ok;
    $classObj->dbcon();
    session_start();
?>


<?php
if (!isset($_SESSION["cname"])) {
  header('location:../login.php');
}
?>

<!DOCTYPE html>


<head>

<!-- Basic Page Needs
================================================== -->
<title> CUSTOMER || DASHBOARD || Investment Tab</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/colors/main.css" id="colors">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
 	<link rel="manifest" href="manifest.json">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="SHBank">
  <link rel="apple-touch-icon" href="images/icons/48.jpeg" sizes="57x57">
  <link rel="apple-touch-icon" href="images/icons/96.jpeg" sizes="60x60">
  <link rel="apple-touch-icon" href="images/icons/96.jpeg" sizes="72x72">
  <link rel="apple-touch-icon" href="images/icons/192.jpeg" sizes="76x76">
  <link rel="apple-touch-icon" href="images/icons/256.jpeg" sizes="114x114">
  <link rel="apple-touch-icon" href="src/images/icons/apple-icon-120x120.png" sizes="120x120">
  
  <meta name="msapplication-TileImage" content="images/icons/192.jpeg">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="SHBank">
  <meta name="msapplication-TileColor" content="#fff">
  <meta name="theme-color" content="#3aa5dc">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<?php require("header.php") ?>
	<!-- Navigation / End -->


	<!-- Content
	================================================== -->
	<div class="dashboard-content">

    

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">

				<div class="col-md-12">

					<h2>Welcome, <?php echo $_SESSION['cname'] ?></h2>

		       	<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Investment</a></li>
							<li>Dashboard</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
    <?php $classObj->lolol(); ?>
		<!-- Notice -->

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "title": "S&P 500",
      "proName": "OANDA:SPX500USD"
    },
    {
      "title": "Shanghai Composite",
      "proName": "INDEX:XLY0"
    },
    {
      "title": "EUR/USD",
      "proName": "FX_IDC:EURUSD"
    },
    {
      "title": "BTC/USD",
      "proName": "BITFINEX:BTCUSD"
    }
  ],
  "colorTheme": "light",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->

		<p>Hello  <strong>You are welcome to Spring heritage bank</p>
		<!-- Content -->
		<!-- stock market pricing widget  -->
		
		<div class="row">
				<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/indices/" rel="noopener" target="_blank"><span class="blue-text">Index Quotes</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
  {
  "locale": "en",
  "symbolsGroups": [
    {
      "symbols": [
        {
          "displayName": "S&P 500",
          "name": "OANDA:SPX500USD"
        },
        {
          "displayName": "E-Mini S&P",
          "name": "CME_MINI:ES1!"
        },
        {
          "displayName": "U.S. Dollar Currency Index",
          "name": "INDEX:DXY"
        },
        {
          "displayName": "Dow 30",
          "name": "FOREXCOM:DJI"
        },
        {
          "displayName": "Volatility S&P 500",
          "name": "INDEX:VIX"
        }
      ],
      "name": "US & Canada"
    },
    {
      "symbols": [
        {
          "displayName": "Euro Stoxx 50",
          "name": "INDEX:MOY0"
        },
        {
          "displayName": "FTSE 100",
          "name": "FOREXCOM:UKXGBP"
        },
        {
          "displayName": "DAX Index",
          "name": "INDEX:DAX"
        },
        {
          "displayName": "CAC 40 Index",
          "name": "INDEX:CAC"
        },
        {
          "name": "INDEX:SMI"
        }
      ],
      "name": "Europe"
    },
    {
      "symbols": [
        {
          "displayName": "Nikkei 225",
          "name": "INDEX:NKY"
        },
        {
          "displayName": "Hang Seng",
          "name": "INDEX:HSI"
        },
        {
          "displayName": "BSE SENSEX",
          "name": "BSE:SENSEX"
        },
        {
          "name": "BSE:BSE500"
        },
        {
          "displayName": "Kospi Composite",
          "name": "INDEX:KQY0"
        }
      ],
      "name": "Asia/Pacific"
    }
  ],
  "title": "Indices",
  "width": 770,
  "height": 450
}
  </script>
</div>
<!-- TradingView Widget END -->
			
		</div>

			
		<div class="row">
			
			<!-- Copyrights -->
			<?php include("footer.php"); ?>
		</div>

	</div>
	<!-- Content / End -->


</div>
<!-- Dashboard / End -->


</div>
<!-- Wrapper / End -->

	<div id="sign-in-dialog" style="max-width: 552px;" class="zoom-anim-dialog mfp-hide">

				<div class="small-dialog-header">
					<h3>Transfer</h3>
				</div>
				<div class="sign-in-form style-1">
					<h5 style="color: black; font-weight: bold;"> Please Select Transfer option. </h5>
					<p style="color: black; font-size: 12px;line-height: 1.5;">
						<span style="color: red; font-weight: bold;"> Welcome to Spring Heritage Bank.</span><br>
						Please make sure that you have enough funds available in your account to transfer.Also don't forget to validate Receiver's Bank Acount and Account Number.
					</p>
					<ul class="tabs-nav" >
						<li class=""><a href="#tab1">SAME BANK</a></li>
						<li><a href="#tab2">LOCAL BANKS </a></li>
						<li><a href="#tab3">INTERNATIONAL BANKS </a></li>
					</ul>

					<div class="tabs-container alt">

						<!-- Login -->
						<div class="tab-content" id="tab1" style="display: none;">
							<form method="post" class="login">
								<?php $classObj->intertransfer(); ?>
								<p class="form-row form-row-wide">
									<label for="username">accout balance($)
										<?php $classObj->transdata(); ?>
								</label>
								</p>
          						<p class="form-row form-row-wide">
									<label for="username">Receiver's account number  
										<input type="text" class="input-text" name="rn" placeholder="22XXXXXXX"required />
									</label>
								</p>

								<p class="form-row form-row-wide">
									<label for="username">amount to transfer ($)
										
							<input type="number" class="input-text" min="0" max="<?php $classObj->maxamount(); ?>" name="at"  placeholder="000000"  />
									</label>
								</p>

								<div class="form-row">
								<input type="submit" class="button border margin-top-5" name="login" style="background: green;" value="Transfer" />
									
								</div>
								
							</form>
						</div>

						<!-- Register -->
						<div class="tab-content" id="tab2" style="display: none;">

							<form method="post" class="register">
								
							<p class="form-row form-row-wide">
								<label for="username2">Bank:
									
									<input type="text" class="input-text" name="bank" id="username2" value="" />
								</label>
							</p>
								
							<p class="form-row form-row-wide">
								<label for="email2">Account name:
										<input type="text" class="input-text" name="acnn" id="email2" value="" />
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="email2">Account number:
										<input type="number" min="0" name="accn" class="input-text"  value="" />
								</label>
							</p>

							

							<p class="form-row form-row-wide">
								<label for="email2">Amount($):
										<input type="number" min="0"  max="<?php $classObj->maxamount(); ?>" name="amount" class="input-text"  value="" />
								</label>
							</p>

							
							<input type="submit" class="button border fw margin-top-10" name="transferto" style="background: green;" value="transfer" />
	
							</form>
						</div>
						<!-- do not know  -->
						<div class="tab-content" id="tab3" style="display: none;">

							<form method="post" class="different">
								
							<p class="form-row form-row-wide">
								<label for="username2">Reciever's Bank Name:
									<input type="text" class="input-text" name="bank" id="username2" value=""  required="yes" />
								</label>
							</p>
								
							<p class="form-row form-row-wide">
								<label for="email2">Reciever's Account name:
										<input type="text" class="input-text" name="accn1" id="email2" value="" required="yes" />
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="email2">Reciever's Account number:
										<input type="number" min="0" name="acnn1" class="input-text"  value="" required="yes"/>
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="email2">Reciever's Swift Code:
										<input type="text" name="swift" class="input-text"  value=""  required="yes"/>
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="email2">Reciever's Country:
										<input type="text" min="0" name="country" class="input-text"  value=""  required="yes"/>
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="am">Amount($):
										<input type="number" id="am" min="0"  max="<?php $classObj->maxamount(); ?>" name="amount1" class="input-text"  value=""  required="yes"/>
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="comment">Comment:			
										<textarea rows="4" placeholder="Transaction description" name="comment" required="yes"> </textarea>
								</label>
							</p>

							<input type="submit" class="button border fw margin-top-10" name="diftransfer" style="background: green;" value="International Transfer" />
	
							</form>
						</div>
					</div>
				</div>
	</div>

<!-- Scripts
================================================== -->
<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>

<script type="text/javascript" src="scripts/mmenu.min.js"></script>
<script type="text/javascript" src="scripts/chosen.min.js"></script>
<script type="text/javascript" src="scripts/slick.min.js"></script>
<script type="text/javascript" src="scripts/rangeslider.min.js"></script>
<script type="text/javascript" src="scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="scripts/waypoints.min.js"></script>
<script type="text/javascript" src="scripts/counterup.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="scripts/tooltips.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
<script type="text/javascript" src="scripts/reg.js"></script>


</body>

</html>

<?php ob_end_flush() ?>