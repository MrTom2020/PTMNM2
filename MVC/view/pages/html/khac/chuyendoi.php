<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link id="btcss" href="https://qlct2022.herokuapp.com/MVC/view/pages/css/bootstrap_amazing.css" rel="stylesheet" media="(max-width: 996px)">
	<link rel="stylesheet" type="text/css" href="https://qlct2022.herokuapp.com/MVC/view/pages/css/amazing.css">
    <link rel="stylesheet" type="text/css" href="https://qlct2022.herokuapp.com/MVC/view/pages/css/tls.css">
    <link rel="stylesheet" type="text/css" href="https://qlct2022.herokuapp.com/MVC/view/pages/css/css_tinhlaisuat.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</head>
<body>
<div class="page_wrap bg1 ">
    <div class="page">
        <div class="column_left">

            
<style type="text/css">.column_left p,.column_left a,.column_left div,.leftmenu > li > a{font-size:13px !important;}
</style>
<div class="caption">Công cụ tính toán</div>
<form class="login-container" action="../tienich/ti" method="POST">
    <ul class="leftnav">
    <li class="list-group-item text-center" style="padding-bottom:2%;"><input class="dropdown-item" name="tlnobandau" type="submit" value="Trả nợ với dư nợ giảm dần"/>
        </li>
        <li class="list-group-item text-center" style="padding-bottom:2%;"><input class="dropdown-item" name="tlnogiamdan" type="submit" value="Trả nợ ban đầu"/>
        </li>
        <li class="list-group-item text-center" style="padding-bottom:2%;"><input class="dropdown-item" name="tltietkiem" type="submit" value="Tính lãi tiết kiệm"/>
        </li>
    </ul>
</form>
         </div>
        <div class="column_middle">
                <h1>Tính lãi tiết kiệm</h1>
                <div class="slideshow">
                </div>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
<script type="text/javascript">

	function converNumber(number)
	{
		var strNumber="";
		strNumber= String(number);
		return strNumber.replace(/\d(?=(?:\d{3})+(?!\d))/g, '$&,')
	}
	$(document).ready(function() {
		$('.txt-loan-repayment').keyup(function(){
				this.value = this.value.replace(/[^0-9\.]/g,''); // number only
			});
			$("#money").keyup(function(){
				var str = $(this).val();
				str = str.replace(/\D+/g, '');
				$(this).val(str.replace(/\d(?=(?:\d{3})+(?!\d))/g, '$&,'));
			});
		// Tính lãi suất
		var money=0, kyhan=0, laisuat=0, tienlai=0;
        $("#btnrepayment").click(function(){
            // check field
	if($("#money").val()=="")
	{
		alert("Số tiền không được rỗng");
		$("#money").focus();
		return;
	}
if($("#time").val()=="")
	{
		alert("Kỳ hạn lãi không được rỗng");
		$("#time").focus();
		return;
	}
if($("#percent").val()=="")
	{
		alert("Lãi xuất không được rỗng");
		$("#percent").focus();
		return;
	}

			var type=$("#ddlTerm").val();
			money=parseInt($("#money").val().replace(/\,/g,'')); // remove 
			kyhan=parseInt($("#time").val());
			laisuat=parseFloat($("#percent").val());
			tienlai=(money*kyhan*laisuat/100)/((type==1)?365:12);
			tienlai= Math.round(tienlai*1000)/1000;
			document.getElementById("lblLai").innerHTML=converNumber(tienlai) + " VND";
		});
    });
</script>
<div class="pfs-loan-repayment" style="margin-top:-7%;">
<div class="content-pfs-loan-repayment"><!-- content -->
<table bgcolor="#fafafa" border="0" bordercolor="#e2e2e2" cellpadding="0" cellspacing="0" class="tbl-loan-repayment">
	<tbody>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td align="left" width="20%">
			<div class="text-loan-repayment">Nhập số tiền</div>
			</td>
			<td align="left" width="80%"><input class="txt-loan-repayment" id="money" type="text" value=""> VND</td>
		</tr>
		<tr>
			<td align="left" width="20%">
			<div class="text-loan-repayment">Nhập kỳ hạn tính lãi</div>
			</td>
			<td align="left" width="80%"><input class="txt-loan-repayment" id="time" maxlength="3" type="text" value=""> <select id="ddlTerm"><option value="1">Ngày</option><option value="2">Tháng</option> </select></td>
		</tr>
		<tr>
			<td align="left" width="20%">
			<div class="text-loan-repayment">Lãi suất</div>
			</td>
			<td align="left" width="80%"><input class="txt-loan-repayment" id="percent" maxlength="3" type="text" value=""> % năm</td>
		</tr>
		<tr>
			<td align="left" width="20%">
			<div class="text-loan-repayment">Tiền lãi</div>
			</td>
			<td align="left" width="80%"><strong id="lblLai">VND</strong></td>
		</tr>
		<tr>
			<td align="left" width="20%">&nbsp;</td>
			<td align="left" width="80%"><input class="btnrepayment" id="btnrepayment" type="button" value="TÍNH"></td>
		</tr>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
	</tbody>
</table>

<div id="listRepayment">&nbsp;</div>
<!-- End content -->

<div class="line-bar">&nbsp;</div>
</div>
</div>
                 <div class="clear"></div>
                <div class="clear"></div>
                <div class="clear"></div>
                <div class="clear"></div>




            <div class="clear"></div>
            <div class="content_footer">
                <div class="float-left"> </div>
            </div>

        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>