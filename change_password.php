<?php
require('script.php');
    $classObj = new ok;
    $classObj->dbcon();
?>
<?php
session_start();
if (isset($_SESSION["cname"])) {
  header('location:user');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Spring heritage Bank Change password</title>
<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Karla|Lobster|Pacifico" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="admin/dashboard/css/bootstrap.min.css">
<link rel="stylesheet" href="admin/dashboard/css/font-awesome.css">
	
  <style type="text/css">
	body{
		font-family: 'Karla', sans-serif;
	}
	</style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- font-family: 'Pacifico', cursive; -->

<p style="height: 100px;"></p>

<div class="container">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>

		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 well">
			<h3 class="text-center"> Bank User Change Password</h3>

<form method="POST">
<?php $classObj->change_pass(); ?>
  <div class="form-group">
    <input type="password" class="form-control" placeholder="customer password" name="pass" required="required/">
  </div>

  <div class="form-group">
    <input type="password" class="form-control" placeholder="confirm customer password" name="pass1" required="required/">
  </div>
  <button type="submit" name="logi" class="btn btn-info">Submit</button> &nbsp &nbsp &nbsp <a href="index.php"> home </a> &nbsp &nbsp &nbsp <a href="login.php"> login </a>
</form>
		</div>
	</div>
</div>

<p style="height: 100px;"></p>
<script src="admin/dashboard/js/jquery-2.1.4.min.js"></script>
<script src="admin/dashboard/js/bootstrap.min.js"></script>
</body>
</html>

<?php ob_end_flush(); ?>