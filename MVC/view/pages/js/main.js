$(document).ready(function(){
    $("#useName").keyup(function()
    {
        var user = $(this).val();
        $.post("../Ajax/checkuse",{un:user},function(data){ $("#htkq").html(data); });
    });
});