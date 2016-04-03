//$("#do_search").click(function(){
//    var txtKeyword = $('#txtKeyword').val();
//    var txtUrl = $('#txtUrl').val();
//    var txtTag = $('#txtTag').val();
//    var txtTitle = $('#txtTitle').val();
//    var txtContent = $('#txtContent').val();
//    var minNumPage = $('#minNumPage').val();
//    var maxNumPage = $('#maxNumPage').val();
//    var txtWpage = $('#txtWpage').val();
//    if(txtKeyword !== "" && txtUrl !== "" && txtTitle !== "" && txtContent !== ""
//      && minNumPage !== "" && maxNumPage !== "" && txtWpage !== "")
//    {
//        var data =  {
//            txtKeyword: txtKeyword, 
//            txtUrl: txtUrl, 
//            txtTag: txtTag, 
//            txtTitle: txtTitle, 
//            txtContent: txtContent, 
//            minNumPage: minNumPage,
//            maxNumPage: maxNumPage,
//            txtWpage: txtWpage
//        };
//        var dt = JSON.stringify(data);
//        $.ajax({
//           type: 'POST',
//           url: "http://localhost:9090/XMLProject3/htmlcontroller/check_search/",
//           connectTimeout: 60,
//           data: 'data='+dt,
//            success: function(response) {
//                //alert(response);
//                $('#formInput').children().remove();
//                $('#formInput').append(response);
//            },
//            error: function(err){
//                alert(err.status +' '+ err.statusText);
//            }
//        });
//    }
//    else{
//        alert('Vui lòng điền đầy đủ!');
//    }
//});
function handleClick(controller,kind){
    
    var txtKeyword = $('#txtKeyword').val();
    var txtUrl = $('#txtUrl').val();
    var txtTag = $('#txtTag').val();
    var txtTitle = $('#txtTitle').val();
    var txtContent = $('#txtContent').val();
    var minNumPage = $('#minNumPage').val();
    var maxNumPage = $('#maxNumPage').val();
    var txtWpage = $('#txtWpage').val();
    if(txtKeyword !== "" && txtUrl !== "" && txtTitle !== "" && txtContent !== ""
      && minNumPage !== "" && maxNumPage !== "" && txtWpage !== "")
    {
        var data =  {
            txtKeyword: txtKeyword, 
            txtUrl: txtUrl, 
            txtTag: txtTag, 
            txtTitle: txtTitle, 
            txtContent: txtContent,
            minNumPage: minNumPage,
            maxNumPage: maxNumPage,
            txtWpage: txtWpage
        };
        var dt = JSON.stringify(data);
        $.ajax({
           type: 'POST',
           url: "http://localhost:9090/XMLProject3/htmlcontroller/check_search/",
           connectTimeout: 60,
           data: 'data='+dt+"&kind="+kind,
            success: function(response) {
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
}