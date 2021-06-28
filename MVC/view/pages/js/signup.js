$(document).ready(function(){
    $("#form6Example1").keyup(function()
    {
        var user = $(this).val();
        $.post("../dangkytaikhoan/kiemtra",{un:user},function(data){ $("#htkq1").html(data); });
    });
});