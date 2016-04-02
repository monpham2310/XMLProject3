function handleClick(controller) {
    var txtKeyword = $('#txtKeyword').val();
    var txtUrl = $('#txtUrl').val();
    var txtTag = $('#txtTag').val();
    var txtTitle = $('#txtTitle').val();
    var txtContent = $('#txtContent').val();
    var txtFilename = $('#txtFilename').val();
    var ajaxurl = controller;    
        
    if(txtKeyword !== "" && txtUrl !== "" && txtTag !== "" && txtTitle !== "" && txtContent !== ""
      && txtFilename !== "")
    {
        var data =  {
            txtKeyword: txtKeyword, 
            txtUrl: txtUrl, 
            txtTag: txtTag, 
            txtTitle: txtTitle, 
            txtContent: txtContent, 
            txtFilename: txtFilename
        };
        var dt = JSON.stringify(data);
        $.ajax({
           type: 'POST',
           url: ajaxurl,
           data: 'data='+dt,
            success: function(response) {
                //alert(response);
                $('#formInput').children().remove();
                $('#formInput').append(response);
            },
            error: function(err){
                alert(err.status +' '+ err.statusText);
            }
        });
    }
    else{
        alert('Vui lòng điền đầy đủ!');
    }
};