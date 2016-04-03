<div class="col-md-2 form-group">
    <span class="pagebtnxml">	
        <a id="abc" href="<?php echo base_url("htmlcontroller/export/xml"); ?>" class="btn">Xuất XML</a>
    </span>
</div>
<div class="col-md-2 form-group">
    <span class="pagebtnw">
<!--        <button id="do_word" type="" class="btn" onclick="handleClick('<?php echo base_url("htmlcontroller/check_search"); ?>','word')">Xuất Word</button>-->
       <a id="abc" href="<?php echo base_url("htmlcontroller/export/word"); ?>" class="btn">Xuất word</a>
    </span>
</div>
<div class="col-md-2 form-group">
    <span class="pagebtnex">	
<!--        <button id="do_excel" type="" class="btn" onclick="handleClick('<?php echo base_url("htmlcontroller/check_search"); ?>',excel)">Xuất Excel</button>-->
       <a id="abc" href="<?php echo base_url("htmlcontroller/export/excel"); ?>" class="btn">Xuất excel</a>
    </span>
</div>
<div class="clearfix"></div>
<font id="content" style="font-size:16px">
<?php
    echo 'Từ khóa tìm kiếm: <font style="color:green; font-size:15px">'.$keyword.'</font><br/>';
    foreach($result as $key)
        foreach($key as $value){
            echo 'Tiêu đề bài viết: <font style="font-weight:bold; color:red">'.$value['title'].'</font><br/>';
            echo 'Link bài viết: <font style="font-weight:bold"><a href="'.$value['link'].'">'.$value['link'].'</a></font><br/>';
            echo 'Từ khóa tìm kiếm: <font style="color:green; font-size:15px">'.$value['keyword'].'</font><br/>';
            echo 'Số lượng từ: <font style="font-weight:bold">'.$value['amount'].'</font><br/>';
            echo '<hr/>';
        }
?>
</font>