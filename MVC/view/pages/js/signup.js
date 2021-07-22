$(document).ready(function(){
    $("#form6Example1").keyup(function()
    {
        var user = $(this).val();
        $.post("../dangkytaikhoan/kiemtra",{un:user},function(data){ $("#htkq1").html(data); });
    });
    $("#form6Example5").keyup(function()
    {
        var user = $(this).val();
        $.post("../dangkytaikhoan/kiemtra2",{un1:user},function(data){ $("#htkq2").html(data); });
    });
    $("#hotentv").keyup(function()
    {
        var user = $(this).val();
        $.post("../dangkytaikhoanthanhvien/kiemtradn",{un8:user},function(data){ $("#form6Example1").html(data); });
    });
});