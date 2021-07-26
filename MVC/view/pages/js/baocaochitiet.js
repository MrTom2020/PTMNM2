$(document).ready(function(){
    $("#xembcct" ).click(function()
     {
         var mavi = $("#tenvi1").val();
         $.post("../baocaothuvachi/baocaotq",{un3:mavi},function(data){ $("#hi1").html(data); });
        //alert(mavi);
      });
});