<h3 class="text-center">Get All Content</h3>
<div class="row">
    <div class="col-md-10 col-md-offset-1 form-group">
        <h4>Nhập từ khóa <font style="color:red">(*)</font>: </h4>
        <div class="input-group input-group-lg panelbox">
            <input id="txtKeyword" type="text" name="keyword" class="form-control" placeholder="Nhập từ khóa cần tìm" aria-describedby="sizing-addon1">
            <span class="input-group-addon" id="sizing-addon1">?</span>

        </div>
        <span name="warning" id="_txtKeyword" style="color:red; font-size:15px"></span>
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-10 col-md-offset-1 form-group">
        <h4>Nhập link Website <font style="color:red">(*)</font>: </h4>
        <div class="input-group input-group-lg panelbox">
            <input id="txtUrl" type="text" name="txtUrl" class="form-control" placeholder="Nhập trang web cần tìm" aria-describedby="sizing-addon1">

            <span class="input-group-addon" id="sizing-addon1">?</span>
        </div>
        <span name="warning" id="_txtUrl" style="color:red; font-size:15px"></span>
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-10 col-md-offset-1 form-group">
        <h4>Nhập tên tag chứa link bài viết <font style="color:red">(*)</font>: </h4>
        <div class="input-group input-group-lg panelbox">
            <input id="txtTag" type="text" name="txtTags" class="form-control" placeholder="Là tag chứa link bài viết" aria-describedby="sizing-addon1">

            <span class="input-group-addon" id="sizing-addon1">?</span>
        </div>
        <span name="warning" id="_txtTag" style="color:red; font-size:15px"></span>
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-10 col-md-offset-1 form-group">
        <h4>Nhập tên tag chứa tiêu đề bài viết <font style="color:red">(*)</font>: </h4>
        <div class="input-group input-group-lg panelbox">
            <input id="txtTitle" type="text" name="txtTag" class="form-control" placeholder="Là tag chứa tiêu đề bài viết" aria-describedby="sizing-addon1">

            <span class="input-group-addon" id="sizing-addon1">?</span>
        </div>
        <span name="warning" id="_txtTitle" style="color:red; font-size:15px"></span>
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-10 col-md-offset-1 form-group">
        <h4>Nhập tên tag chứa nội dung bài viết <font style="color:red">(*)</font>: </h4>
        <div class="input-group input-group-lg panelbox">
            <input id="txtContent" type="text" name="txtTag" class="form-control" placeholder="Là tag chứa từng khu vực bài viết nhỏ trong list ở trên" aria-describedby="sizing-addon1">

            <span class="input-group-addon" id="sizing-addon1">?</span>
        </div>
        <span name="warning" id="_txtContent" style="color:red; font-size:15px"></span>
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-10 col-md-offset-1 form-group">
        <h4>Nhập số trang <font style="color:red">(*)</font>: </h4>
        <div class="col-sm-4 col-md-offset-1">
            <div class="input-group input-group-lg panelbox">
                <input id="minNumPage" type="number" name="txtPageS" class="form-control" placeholder="Bắt đầu để lấy" aria-describedby="sizing-addon1">

                <span class="input-group-addon" id="sizing-addon1">?</span>
            </div>
            <span name="warning" id="_minNumPage" style="color:red; font-size:15px"></span>
        </div>
        <div class="col-sm-4 col-md-offset-1">
            <div class="input-group input-group-lg panelbox">
                <input id="maxNumPage" type="number" name="txtPageE" class="form-control" placeholder="Cuối cùng để lấy" aria-describedby="sizing-addon1">

                <span class="input-group-addon" id="sizing-addon1">?</span>
            </div>
            <span name="warning" id="_maxNumPage" style="color:red; font-size:15px"></span>
        </div>
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-10 col-md-offset-1 form-group">
        <div class="col-sm-7">
            <h4>Nhập cấu trúc URL của phân trang <font style="color:red">(*)</font>: </h4>
            <div class="input-group input-group-lg panelbox">
                <input id="txtWpage" type="text" name="txtWpage" class="form-control" placeholder="VD: https://tinhte.vn/?wpage=" aria-describedby="sizing-addon1">
                <span class="input-group-addon" id="sizing-addon1">?</span>
            </div>
            <span name="warning" id="_txtWpage" style="color:red; font-size:15px"></span>
        </div>
        <div class="col-sm-4 col-md-offset-1">
            <h4>Đuôi cấu trúc phân trang: </h4>
            <div class="input-group input-group-lg panelbox">
                <input id="txtWpageEnd" type="text" name="txtWpageEnd" class="form-control" placeholder="VD: .page" aria-describedby="sizing-addon1">
                <span class="input-group-addon" id="sizing-addon1">?</span>
            </div>
            <span name="warning" id="_maxNumPage" style="color:red; font-size:15px"></span>
        </div>
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-2 col-md-offset-4 form-group">
        <span class="pagebtnxml">	
            <button id="do_search" type="" class="btn" onclick="handleClick('<?php echo base_url("htmlcontroller/check_search"); ?>','search')">Thực hiện</button>
        </span>
    </div>
</div>
<div id="loading">
    <div id="loadingcontent">
        <p id="loadingspinner">
            Đang dò...
        </p>
    </div>
</div>
<div class="clearfix"></div>