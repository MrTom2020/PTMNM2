$(document).ready(function(){
    $("#hotentv").keyup(function()
    {
        var user = $(this).val();
        $.post("../dangkytaikhoanthanhvien/kiemtradn",{un8:user},function(data){ $("#thongbao").html(data); });
    });
});