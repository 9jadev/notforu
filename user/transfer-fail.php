

<!DOCTYPE html>


<head>

<!-- Basic Page Needs
================================================== -->
<title> Spring Hertiage Bank  || trasfer fail </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/main.css" id="colors">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>

<!-- Wrapper -->
<div id="wrapper">


<!-- Content
================================================== -->

<!-- Coming Soon Page -->
<div class="coming-soon-page" style="background-image: url(images/p.jpg)">
	<div class="container">
		<!-- Search -->
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<br><a class="button" href="index.php" style="background: green;"> continue </a>
				<input type="hidden" id="id" value="<?php echo $_GET["id"]; ?>" />
				<h3 id="nop">
					 
				</h3>
				<br>

			</div>
		</div>
		<!-- Search Section / End -->
	</div>
</div>
<!-- Coming Soon Page / End -->

</div>
<!-- Wrapper / End -->



<!-- Scripts
================================================== -->
<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
    	var id = $('#id').val();

    	setInterval(myFunction, 1000);
    	
    	function myFunction(){
	    	$.get("trans_status.php?id="+id, function(data){
	        	$('#nop').empty().text(data);
	        	console.log(data);
	   		});
	   	}    	
	});
</script>
</body>

</html>