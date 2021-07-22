$(document).ready(function(){
    $("#dongycndv" ).click(function()
     {
         var mavi = $("#iddv").val();
         $.post("../Quanlydichvu/capnhatdv",{un5:mavi},function(data){ $("#kqht").html(data); });
        //alert(mavi);
      });
   
});