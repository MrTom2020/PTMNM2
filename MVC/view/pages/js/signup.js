$(document).ready(function(){
    $("#hoten").keyup(function()
    {
        var user = $(this).val();
        $.post("../dangkytaikhoan/kiemtra",{un:user},function(data){ $("#htkq1").html(data); });
    });
});