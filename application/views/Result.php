<div class="tabs">
    <ul class="tab-links">
        <li class="active"><a href="#tab1">Số từ lớn hơn 0</a></li>
        <li><a href="#tab2">Tất cả</a></li>
    </ul>
    <div class="tab-content">
        <div id="tab1" class="tab active">
            <div class="col-md-2 col-md-offset-3 form-group">
                <span class="pagebtnxml">	
        <a id="abc" href="<?php echo base_url("htmlcontroller/export/xml/page1"); ?>" class="btn">Xuất XML</a>
        </span>
            </div>
            <div class="col-md-2 form-group">
                <span class="pagebtnw">
    <!--        <button id="do_word" type="" class="btn" onclick="handleClick('<?php echo base_url("htmlcontroller/check_search"); ?>','word')">Xuất Word</button>-->
           <a id="abc" href="<?php echo base_url("htmlcontroller/export/word/page1"); ?>" class="btn">Xuất word</a>
        </span>
            </div>
            <div class="col-md-2 form-group">
                <span class="pagebtnex">
<!--        <button id="do_excel" type="" class="btn" onclick="handleClick('<?php echo base_url("htmlcontroller/check_search"); ?>',excel)">Xuất Excel</button>-->
           <a id="abc" href="<?php echo base_url("htmlcontroller/export/excel/page1"); ?>" class="btn">Xuất excel</a>
        </span>
            </div>
            <div class="clearfix"></div>
            <font id="content" style="font-size:16px">
        <?php
            echo 'Từ khóa tìm kiếm: <font style="color:green; font-size:15px">'.$keyword.'</font>
            <br/>'; foreach($resultWithNotZero as $key){ foreach($key as $value){ echo 'Tiêu đề bài viết: <font style="font-weight:bold;color:red">'.$value['title'].'</font>
            <br/>'; echo 'Link bài viết: <font style="font-weight:bold"><a href="'.$value['link'].'">'.$value['link'].'</a></font>
            <br/>'; echo 'Số lượng từ: <font style="font-weight:bold">'.$value['amount'].'</font>
            <br/>'; echo '
            <hr/>'; } } ?>
            </font>
        </div>

        <div id="tab2" class="tab">
            <div class="col-md-2 col-md-offset-3 form-group">
                <span class="pagebtnxml">	
            <a id="abc" href="<?php echo base_url("htmlcontroller/export/xml/page2"); ?>" class="btn">Xuất XML</a>
            </span>
            </div>
            <div class="col-md-2 form-group">
                <span class="pagebtnw">
    <!--        <button id="do_word" type="" class="btn" onclick="handleClick('<?php echo base_url("htmlcontroller/check_search"); ?>','word')">Xuất Word</button>-->
           <a id="abc" href="<?php echo base_url("htmlcontroller/export/word/page2"); ?>" class="btn">Xuất word</a>
        </span>
            </div>
            <div class="col-md-2 form-group">
                <span class="pagebtnex">	
<!--        <button id="do_excel" type="" class="btn" onclick="handleClick('<?php echo base_url("htmlcontroller/check_search"); ?>',excel)">Xuất Excel</button>-->
           <a id="abc" href="<?php echo base_url("htmlcontroller/export/excel/page2"); ?>" class="btn">Xuất excel</a>
        </span>
            </div>
            <div class="clearfix"></div>
            <font id="content" style="font-size:16px">
        <?php
            echo 'Từ khóa tìm kiếm: <font style="color:green; font-size:15px">'.$keyword.'</font>
            <br/>';
            foreach($resultWithZero as $key){
                foreach($key as $value){
                    echo 'Tiêu đề bài viết: <font style="font-weight:bold; color:red">'.$value['title'].'</font><br/>';
                    echo 'Link bài viết: <font style="font-weight:bold"><a href="'.$value['link'].'">'.$value['link'].'</a></font><br/>';
                    echo 'Số lượng từ: <font style="font-weight:bold">'.$value['amount'].'</font><br/>';
                    echo '<hr/>';
                }
            }
        ?>
            </font>
        </div>
    </div>
</div>
<script>
    $('.tabs .tab-links a').on('click', function(e)  {
        var currentAttrValue = jQuery(this).attr('href');
        
        // Show/Hide Tabs
        $(currentAttrValue).show().siblings().hide();
 
        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
 
        e.preventDefault();
    });
</script>