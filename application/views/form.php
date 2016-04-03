<h3 class="text-center">Get All Content</h3>
<div class="row">
    <div class="col-md-10 col-md-offset-1 form-group">
        <h4>Nhập từ khóa : </h4>
        <div class="input-group input-group-lg panelbox">
            <input id="txtKeyword" type="text" name="keyword" class="form-control" placeholder="Nhập từ khóa cần tìm" aria-describedby="sizing-addon1">
            <span class="input-group-addon" id="sizing-addon1">?</span>
        </div>
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-10 col-md-offset-1 form-group">
        <h4>Nhập link Website : </h4>
        <div class="input-group input-group-lg panelbox">
            <input id="txtUrl" type="text" name="txtUrl" class="form-control" placeholder="Nhập trang web cần tìm" aria-describedby="sizing-addon1">
            <span class="input-group-addon" id="sizing-addon1">?</span>
        </div>
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-10 col-md-offset-1 form-group">
        <h4>Nhập tên tag chứa khu vực cần lấy link : </h4>
        <div class="input-group input-group-lg panelbox">
            <input id="txtTag" type="text" name="txtTags" class="form-control" placeholder="Là tag chứa list danh sách các bài viết" aria-describedby="sizing-addon1">
            <span class="input-group-addon" id="sizing-addon1">?</span>
        </div>
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-10 col-md-offset-1 form-group">
        <h4>Nhập tên tag chứa tiêu đề bài viết : </h4>
        <div class="input-group input-group-lg panelbox">
            <input id="txtTitle" type="text" name="txtTag" class="form-control" placeholder="Là tag chứa tiêu đề bài viết" aria-describedby="sizing-addon1">
            <span class="input-group-addon" id="sizing-addon1">?</span>
        </div>
    </div>
</div>
<!-- /.row -->
<!-- /.row -->
<div class="row">
    <div class="col-md-10 col-md-offset-1 form-group">
        <h4>Nhập tên tag chứa nội dung bài viết : </h4>
        <div class="input-group input-group-lg panelbox">
            <input id="txtContent" type="text" name="txtTag" class="form-control" placeholder="Là tag chứa từng khu vực bài viết nhỏ trong list ở trên" aria-describedby="sizing-addon1">
            <span class="input-group-addon" id="sizing-addon1">?</span>
        </div>
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-10 col-md-offset-1 form-group">
        <h4>Nhập số trang : </h4>
        <div class="col-sm-4 col-md-offset-1">
            <div class="input-group input-group-lg panelbox">
                <input id="minNumPage" type="text" name="txtPageS" class="form-control" placeholder="Bắt đầu để lấy" aria-describedby="sizing-addon1">
                <span class="input-group-addon" id="sizing-addon1">?</span>
            </div>
        </div>
        <div class="col-sm-4 col-md-offset-1">
            <div class="input-group input-group-lg panelbox">
                <input id="maxNumPage" type="text" name="txtPageE" class="form-control" placeholder="Cuối cùng để lấy" aria-describedby="sizing-addon1">
                <span class="input-group-addon" id="sizing-addon1">?</span>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-10 col-md-offset-1 form-group">
        <h4>Nhập cấu trúc URL của phân trang : </h4>
        <div class="input-group input-group-lg panelbox">
            <input id="txtWpage" type="text" name="txtWpage" class="form-control" placeholder="Lấy hết URL chỉ để có thể thêm số trang ở cuối vào để truy cập được từng trang" aria-describedby="sizing-addon1">
            <span class="input-group-addon" id="sizing-addon1">?</span>
        </div>
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-2 col-md-offset-2 form-group">
        <span class="pagebtnxml">	
            <button id="do_search" type="" class="btn" onclick="handleClick('<?php echo base_url("htmlcontroller/check_search"); ?>','search')">Thực hiện</button>
        </span>
    </div>
    <div class="col-md-2 form-group">
        <span class="pagebtnxml">	
            <button type="" class="btn"  onclick="handleClick('<?php echo base_url("htmlcontroller/check_search"); ?>','xml')">Xuất XML</button>
        </span>
    </div>
    <div class="col-md-2 form-group">
        <span class="pagebtnw">	
            <button id="do_word" type="" class="btn" onclick="handleClick('<?php echo base_url("htmlcontroller/check_search"); ?>','word')">Xuất Word</button>
        </span>
    </div>
    <div class="col-md-2 form-group">
        <span class="pagebtnex">	
            <button id="do_excel" type="" class="btn" onclick="handleClick('<?php echo base_url("htmlcontroller/check_search"); ?>',excel)">Xuất Excel</button>
        </span>
    </div>
</div>
<div class="clearfix"></div>