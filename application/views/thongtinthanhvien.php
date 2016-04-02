<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Thông Tin Thành Viên</title>
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
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Fox Design</span></a>
					</div>
					<div class="clearfix"></div>
					<?php require_once 'menu/menuprile.html';
					 	  require_once 'menu/siderbar.html';
					 	  require_once 'menu/menuFooter.html';
						  require_once 'menu/xuly.php';
					?>
				</div>
			</div>
			<?php require_once 'menu/topnav.html';?>
			<!-- page content -->
			<div class="right_col" role="main">
				<div class="panel">
				<h3 class="text-center">Thông Tin Thành Viên</h3>
					<div class="col-sm-6 col-md-3 ">
						<div class="thumbnail boxuser">
						  <img src="images/huy.jpg" alt="Phạm Quang Huy">
						  <div class="caption text-center">
							<h4>Phạm Quang Huy</h4>
							<p>Programer</p>
							 <p><a href="facebook.com/camten1503"><span><img src="images/facebook.png" width="50px" height="50px"/></span></a>
								<a href="facebook.com/camten1503"><span><img src="images/google_plus.png" width="50px" height="50px"/></span></a></p>
							
						  </div>
						</div>
				    </div>
				    <div class="col-sm-6 col-md-3 ">
						<div class="thumbnail boxuser">
						  <img src="images/tien.jpg" alt="Đỗ Cẩm Tiên">
						  <div class="caption text-center">
							<h4>Đỗ Cẩm Tiên</h4>
							<p>Designer</p>
							 <p><a href="facebook.com/camten1503"><span><img src="images/facebook.png" width="50px" height="50px"/></span></a>
								<a href="facebook.com/camten1503"><span><img src="images/google_plus.png" width="50px" height="50px"/></span></a></p>
							
						  </div>
						</div>
				    </div>
				    
				    <div class="col-sm-6 col-md-3 ">
						<div class="thumbnail boxuser">
						  <img src="images/hung.jpg" alt="Hoàng Sỹ Hùng">
						  <div class="caption text-center">
							<h4>Hoàng Sỹ Hùng</h4>
							<p>Programer</p>
							 <p><a href="facebook.com/camten1503"><span><img src="images/facebook.png" width="50px" height="50px"/></span></a>
								<a href="facebook.com/camten1503"><span><img src="images/google_plus.png" width="50px" height="50px"/></span></a></p>
							
						  </div>
						</div>
				    </div>
				     <div class="col-sm-6 col-md-3 ">
						<div class="thumbnail boxuser">
						  <img src="images/hung.jpg" alt="Hoàng Sỹ Hùng">
						  <div class="caption text-center">
							<h4>Nguyễn Hữu Thành</h4>
							<p>Programer</p>
							 <p><a href="facebook.com/camten1503"><span><img src="images/facebook.png" width="50px" height="50px"/></span></a>
								<a href="facebook.com/camten1503"><span><img src="images/google_plus.png" width="50px" height="50px"/></span></a></p>
							
						  </div>
						</div>
				    </div>
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
</body>

</html>
