$(document).ready(function(){
    $("#xembc" ).click(function()
     {
         var mavi = $("#tenvi").val();
         $.post("../baocaothuvachi/baocaotq",{un3:mavi},function(data){ $("#hi").html(data); });
        //alert(mavi);
      });
      $("#xembcct" ).click(function()
     {
         var mavi = $("#tenvi1").val();
         $.post("../baocaothuvachi/baocaotq",{un3:mavi},function(data){ $("#hi").html(data); });
        //alert(mavi);
      });
   
   
});