function handleClick(controller) {
    var txtKeyword = $('#txtKeyword').val();
    var txtUrl = $('#txtUrl').val();
    var txtTag = $('#txtTag').val();
    var txtTitle = $('#txtTitle').val();
    var txtContent = $('#txtContent').val();
    var txtNumPage = $('#txtNumPage').val();
    var ajaxurl = controller;    
        
    if(txtKeyword !== "" && txtUrl !== "" && txtTag !== "" && txtTitle !== "" && txtContent !== ""
      && txtNumPage !== "")
    {
        var data =  {
            txtKeyword: txtKeyword, 
            txtUrl: txtUrl, 
            txtTag: txtTag, 
            txtTitle: txtTitle, 
            txtContent: txtContent, 
            txtNumPage: txtNumPage
        };
        var dt = JSON.stringify(data);
        $.ajax({
           type: 'POST',
           url: ajaxurl,
           connectTimeout: 60,
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