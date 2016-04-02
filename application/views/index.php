<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fox Design</title>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <!-- Custom styling plus plugins -->
  <link href="css/custom.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.3.css" />
  <link href="css/icheck/flat/green.css" rel="stylesheet" />
  <link href="css/floatexamples.css" rel="stylesheet" type="text/css" />
  <script src="js/jquery.min.js"></script>
  <script src="js/nprogress.js"></script>
  <script src="menu/js.html"></script>
</head>
<body class="nav-md">
<form  method="POST" action="index.php" >
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Fox Design</span></a>
					</div>
					<div class="clearfix"></div>
					<?php require_once 'menu/menuprile.html';
					 	  require_once 'menu/siderbar.html';
					 	  require_once 'menu/menuFooter.html';
					?>
				</div>
			</div>
			<?php require_once 'menu/topnav.html';?>
			<!-- page content -->
			<div class="right_col" role="main">
				<div class="panel">
					<?php require_once 'xuly/getContent.php';?>
				</div>
				<!-- /page content -->
				<!-- footer content -->
				<?php require_once 'menu/footer.html';?>
				<!-- /footer content -->
			</div>
			<!-- /page content -->
		</div>
	</div>
	<div id="custom_notifications" class="custom-notifications dsp_none">
		<ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
		</ul>
		<div class="clearfix"></div>
		<div id="notif-group" class="tabbed_notifications"></div>
	</div>
	<!--javascrip-->
	<?php require_once 'menu/js.html';?>
	<!-- /footer content -->
	</form>
</body>

</html>
