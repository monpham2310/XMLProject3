<h3 class="text-center">Vui Lòng Nhập Thông Tin</h3>
<div class="row">
	<div class="col-md-10 col-md-offset-1 form-group">
		<div class="input-group input-group-lg panelbox">
			<input type="text" name="keyword" class="form-control" placeholder="Nhập từ khóa cần tìm..." aria-describedby="sizing-addon1">
			<span class="input-group-addon" id="sizing-addon1">?</span>
		</div>
	</div>
</div>
<!-- /.row -->
<div class="row">
	<div class="col-md-10 col-md-offset-1 form-group">
		<div class="input-group input-group-lg panelbox">
			<input type="text" name="txtUrl" class="form-control" placeholder="Nhập trang web cần tìm..." aria-describedby="sizing-addon1">
			<span class="input-group-addon" id="sizing-addon1">?</span>
		</div>
	</div>
</div>
<!-- /.row -->
<div class="row">
	<div class="col-md-10 col-md-offset-1 form-group">
		<div class="input-group input-group-lg panelbox">
			<input type="text" name="txtTag" class="form-control" placeholder="Nhập tên tag chứa bài viết..." aria-describedby="sizing-addon1">
			<span class="input-group-addon" id="sizing-addon1">?</span>
		</div>
	</div>
</div>
<!-- /.row -->
<div class="row">
	<div class="col-md-10 col-md-offset-1 form-group">
		<div class="input-group input-group-lg panelbox">
			<input type="text" name="txtTitle" class="form-control" placeholder="Nhập tên tag chứa tiêu đề..." aria-describedby="sizing-addon1">
			<span class="input-group-addon" id="sizing-addon1">?</span>
		</div>
	</div>
</div>
<!-- /.row -->
<div class="row">
	<div class="col-md-10 col-md-offset-1 form-group">
		<div class="input-group input-group-lg panelbox">
			<input type="text" name="txtContent" class="form-control" placeholder="Nhập tên tag chứa nội dung chính bài viết..." aria-describedby="sizing-addon1">
			<span class="input-group-addon" id="sizing-addon1">?</span>
		</div>
	</div>
</div>
<!-- /.row -->
<div class="row">
	<div class="col-md-10 col-md-offset-1 form-group">
		<div class="input-group input-group-lg panelbox">
			<input type="text" name="txtFolder" class="form-control" placeholder="Nhập tập tin để lưu file..." aria-describedby="sizing-addon1">
			<span class="input-group-addon" id="sizing-addon1">?</span>
		</div>
	</div>
</div>
<!-- /.row -->
<div class="row">
	<div class="col-md-2 col-md-offset-4 form-group">
		<span class="pagebtny">	
						<button type="submit" name="submit" class="btn" >Thực Hiện</button></span>
	</div>
	<div class="col-md-2 form-group">
		<span class="pagebtnn">	
						<button type="button" class="btn">Hủy Bỏ</button></span>
	</div>
</div>
<div class="clearfix"></div>
<!-- /.row -->
<div class="row">
	<div class="col-md-12 form-group">
		<?php
			require_once('simple_html_dom.php');
			error_reporting(0);
			if(isset($_POST['submit'])){
			if(isset($_POST['txtUrl']) and isset($_POST['txtTag']) and isset($_POST['txtTitle']) and isset($_POST['txtContent']) )
			{
				$url=$_POST['txtUrl'];
				$tag=$_POST['txtTag'];
				$title=$_POST['txtTitle'];
				$content=$_POST['txtContent'];
//				$folder=trim($_POST['txtFolder']);
				echo "<pre>";
				print_r($_POST);
				echo "</pre>";
				$html = file_get_html($url);
				//echo $url;
				//echo $html;
				
				$tags=array();
				foreach($html->find($tag) as $art) {
					$item['title']     = $art->find($title, 0);
					$item['content']    = $art->find($content, 0)->plaintext;
					$tags[] = $item;
				}

				echo "Tiêu đề bài viết:" . $tags[0]['title'];
				echo "<br>Nội dung bài viết:". $tags[0]['content'];
				//Xu ly tieu de bai viet
				//$Article['title']=str_replace('admin',"",$Article[0]['title'])
			}
			else
                {
                    echo '<script language="javascript">';
                    echo 'alert("Bạn chưa nhập đầy đủ thông tin!")';
                    echo '</script>';
                }
		}
		?>
	</div>
</div>
<!-- /.row -->
