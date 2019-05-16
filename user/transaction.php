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
<title> CUSTOMER || DASHBOARD || transacton </title>
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

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/jq-3.3.1/dt-1.10.18/datatables.min.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
				 
<style type="text/css">
	.user-menu.active .user-name{
		color: #2a2a2a;	
	} 
	.user-menu:hover{
		color: #2a2a2a;	
	}
	.nan{
		color: #2a2a2a;
		background: white;
	}
	.nan:hover{
		color: #2a2a2a;
		background: white; 
	}
	a.button.border{
		color: #2a2a2a;
	}
	@media screen and (max-width: 600px){
		table td {
		    border-bottom: 1px solid #ddd;
		    display: block;
		    font-size: 14px;
		    text-align: center;
		}
	}
</style>
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
							<li><a href="#">Home</a></li>
							<li>Transaction</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<!-- Notice -->
		<p>Hello  <strong>You are welcome to Spring heritage bank Transfer transation history </p>
		<!-- Content -->


		<div class="row">			
				<!-- Item -->				
				<?php //$classObj->gettransact(); ?>
			<div class="table-reponsive">
		  		<table id="table_id" class="table table-hover display">
				    <thead>
				      <tr>
				      	<th> SN </th>
				      	<th> Bank </th>
				      	<th> Reciever </th>
				        <th> Amount</th>
				        <th> Status</th>
				        <th> View </th>
				        <th> Date </th>
				      </tr>
				    </thead>
				    <tbody>
				      <?php $classObj->gettt(); ?>
				    </tbody>
			    </table>
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

	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">

				<div class="small-dialog-header">
					<h3>Transfer</h3>
				</div>
				<div class="sign-in-form style-1">

					<ul class="tabs-nav" >
						<li class=""><a href="#tab1">SAME BANK</a></li>
						<li><a href="#tab2">DIFFERENT BANK </a></li>
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
									<label for="username">Recipiant account number  
										
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
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/jq-3.3.1/dt-1.10.18/datatables.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript">
$(document).ready( function () {
   // $('#table_id').DataTable();
} );
</script>


</body>

</html>

<?php ob_end_flush() ?>

