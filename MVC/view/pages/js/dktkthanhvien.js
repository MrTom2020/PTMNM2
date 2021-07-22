$(document).ready(function(){
    $("#hotentv").keyup(function()
    {
        var user = $(this).val();
        $.post("./../dangkytaikhoanthanhvien/kiemtradn",{un:user},function(data){ $("#thongbao").html(data); });
    });
    $("#emailtv").keyup(function()
    {
        var user = $(this).val();
        $.post("./../dangkytaikhoanthanhvien/kiemtraedn",{un:user},function(data){ $("#thongbao2").html(data); });
    });
});