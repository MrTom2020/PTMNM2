$(document).ready(function(){
    $("#xembcct" ).click(function()
     {
         var mavi = $("#tenvi1").val();
         $.post("../baocaothuvachi/baocaoct",{un3:mavi},function(data){ $("#hi1").html(data); });
        //alert(mavi);
      });
});