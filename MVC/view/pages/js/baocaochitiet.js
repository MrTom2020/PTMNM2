$(document).ready(function(){
    $("#xembcct" ).click(function()
     {
         var mavi = $("#tenvi1").val();
         var mavi2 = $("#chontheo").val();
         $.post("../baocaothuvachi/baocaoct",{un3:mavi},{un4:mavi2},function(data){ $("#hi1").html(data); });
        //alert(mavi);
      });
});