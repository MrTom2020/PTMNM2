$(document).ready(function(){
    $("#tentvien").keyup(function()
    {
        var user = $(this).val();
        $.post("./../dangkytaikhoanthanhvien/kiemtradn",{un8:user},function(data){ $("#thongbao").html(data); });
    });
    $("#form6Example5").keyup(function()
    {
        var user = $(this).val();
        $.post("./../dangkytaikhoanthanhvien/kiemtradn",{un9:user},function(data){ $("#htkq2").html(data); });
    });
});