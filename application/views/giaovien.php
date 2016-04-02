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
					?>
				</div>
			</div>
			<?php require_once 'menu/topnav.html';?>
			<!-- page content -->
			<div class="right_col" role="main">
				<div class="panel">
				<h3 class="text-center">Giáo Viên Hướng Dẫn</h3>
					<div class="col-md-3 col-md-offset-1">
						<div class="thumbnail boxuser">
						  <img src="images/tanguyen.jpg" alt="Tạ Nguyễn">
						  <div class="caption text-center">
							<h4>Tạ Nguyễn</h4>
							<p>Giáo viên hướng dẫn</p>
							 <p><a href="https://www.facebook.com/TNguyen.Coffee"><span><img src="images/facebook.png" width="50px" height="50px"/></span></a>
								<a href="https://www.facebook.com/TNguyen.Coffee"><span><img src="images/google_plus.png" width="50px" height="50px"/></span></a></p>
							
						  </div>
						</div>
				    </div>
				    <div class="col-md-7 col-md-offset-1-right">
				    	<h2>Đề bài 3</h2>
				    	<p><strong>Xây dựng ứng dụng</strong>
				    	 tùy chọn nhập vào 1 từ khóa và 1 link website với yêu cầu ( 2 nhóm)
						</br>a. Tìm tất cả trang (cả trang con) mà bài viết có chứa từ khóa
						</br>b. Xuất ra dạng XML với thông tin địa chỉ trang web, từ khóa, số lượng từ khóa, tiêu đề trang/bài viết
						</br>c. Ví dụ: Nhập “Lập trình web” và “vietnamwork. com” thì sẽ tìm ra tất cả các topic liên quan đến từ khóa “Lập trình web” hoặc "iphone 6" và "tinhte.vn" thì sẽ tìm tất cả topic trong tinhte.vn có từ khóa "iphone 6".

				    	</p>
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
