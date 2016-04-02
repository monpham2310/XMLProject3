$(document).ready(function(){    
    function handleClick(controller) {
        var txtKeyword = $('#txtKeyword').val();
        var txtUrl = $('#txtUrl').val();
        var txtTag = $('#txtTag').val();
        var txtTitle = $('#txtTitle').val();
        var txtContent = $('#txtContent').val();
        var txtFilename = $('#txtFilename').val();
        var ajaxurl = controller,
        data =  {
            'txtKeyword': txtKeyword, 
            'txtUrl': txtUrl, 
            'txtTag': txtTag, 
            'txtTitle': txtTitle, 
            'txtContent': txtContent, 
            'txtFilename': txtFilename
        };
        $.post(ajaxurl, data, function (response) {            
            $('#resultContent').innerHTML = response;
        });
    };
});