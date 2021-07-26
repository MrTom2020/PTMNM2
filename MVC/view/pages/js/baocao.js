$(document).ready(function(){
    $("#xembc" ).click(function()
     {
         var mavi = $("#tenvi").val();
         $.post("../baocaothuvachi/baocaoct",{un3:mavi},function(data){ $("#hi").html(data); });
        //alert(mavi);
      });
});