function handleClick(controller, kind) {

    var txtKeyword = $('#txtKeyword').val();
    var txtUrl = $('#txtUrl').val();
    var txtTag = $('#txtTag').val();
    var txtTitle = $('#txtTitle').val();
    var txtContent = $('#txtContent').val();
    var minNumPage = $('#minNumPage').val();
    var maxNumPage = $('#maxNumPage').val();
    var txtWpage = $('#txtWpage').val();
    var txtWpageEnd = $('#txtWpageEnd').val();
    if (txtKeyword !== "") {
        $('#_txtKeyword').html("");
    } else {
        $('#_txtKeyword').html("Vui lòng nhập từ khóa tìm kiếm!!");
    }
    if (txtUrl !== "") {
        $('#_txtUrl').html("");
    } else {
        $('#_txtUrl').html("Vui lòng nhập đường dẫn website!!");
    }
    if (txtTag !== "") {
        $('#_txtTag').html("");

    } else {
        $('#_txtTag').html("Vui lòng nhập tag chứa link bài viết!!");
    }
    if (txtTitle !== "") {
        $('#_txtTitle').html("");

    } else {
        $('#_txtTitle').html("Vui lòng nhập tag chứa tiêu đề bài viết!!");
    }
    if (txtContent !== "") {
        $('#_txtContent').html("");
    } else {
        $('#_txtContent').html("Vui lòng nhập tag chứa nội dung bài viết!!");
    }
    if (minNumPage !== "") {
        $('#_minNumPage').html("");

    } else {
        $('#_minNumPage').html("Vui lòng nhập số thứ tự trang bắt đầu!!");
    }
    if (maxNumPage !== "" && maxNumPage >= minNumPage) {
        $('#_maxNumPage').html("");

    } else {
        $('#_maxNumPage').html("Vui lòng nhập số thứ tự trang kết thúc và không được nhỏ hơn số trang bắt đầu!!");
    }
    if (txtWpage !== "") {
        $('#_txtWpage').html("");

    } else {
        $('#_txtWpage').html("Vui lòng nhập cấu trúc link phân trang!!");
    }
    if (txtKeyword !== "" && txtUrl != "" && txtTag != "" && txtTitle != "" && txtContent != "" && txtWpage != "" && minNumPage != "" && maxNumPage != "") {
        $("#loading").fadeIn();
        var opts = {
            lines: 12, // The number of lines to draw
            length: 7, // The length of each line
            width: 4, // The line thickness
            radius: 10, // The radius of the inner circle
            color: '#000', // #rgb or #rrggbb
            speed: 1, // Rounds per second
            trail: 60, // Afterglow percentage
            shadow: false, // Whether to render a shadow
            hwaccel: false // Whether to use hardware acceleration
        };
        var target = document.getElementById('loading');
        var spinner = new Spinner(opts).spin(target);
        var data = {
            txtKeyword: txtKeyword,
            txtUrl: txtUrl,
            txtTag: txtTag,
            txtTitle: txtTitle,
            txtContent: txtContent,
            minNumPage: minNumPage,
            maxNumPage: maxNumPage,
            txtWpage: txtWpage,
            txtWpageEnd: txtWpageEnd
        };
        var dt = JSON.stringify(data);
        $.ajax({
            type: 'POST',
            url: controller,
            connectTimeout: 60,
            data: 'data=' + dt + "&kind=" + kind,
            success: function (response) {

                $('#formInput').children().remove();
                $('#formInput').append(response);
            },
            error: function (err) {
                alert(err.status + ' ' + err.statusText);
            }
        });
    }
}