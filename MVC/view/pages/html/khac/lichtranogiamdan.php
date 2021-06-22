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
                <h1>Tính lịch trả nợ với dư nợ ban đầu</h1>
                <div class="slideshow">
                </div>
<script type="text/javascript" src="https://qlct2022.herokuapp.com/MVC/view/pages/js/calendar.js">
    
</script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
 
 <script type="text/javascript">



$(document).ready(function () {
    // thousand separator & number only


    $('.txt-loan-repayment').keyup(function () {
        this.value = this.value.replace(/[^0-9\.]/g, ''); // number only

    });

    $("#money").keyup(function () {
        var str = $(this).val();
        str = str.replace(/\D+/g, '');
        $(this).val(str.replace(/\d(?=(?:\d{3})+(?!\d))/g, '$&,'));
    });


});

function converNumber(number) {
    var strNumber = "";
    strNumber = String(number);
    return strNumber.replace(/\d(?=(?:\d{3})+(?!\d))/g, '$&,')
}




function calcLoan() {
    var summoney = 0, time = 0, percent = 0, date, tmpDate;
    var goc = 0, lai = 0, goc_lai = 0, sum_goc = 0, sum_lai = 0, tempGoc;
    var day, month, year;

    // check field
    if ($("#money").val() == "") {
        alert("Số tiền không được rỗng");
        $("#money").focus();
        return;
    }
    if ($("#time").val() == "") {
        alert("Thời gian không được rỗng");
        $("#time").focus();
        return;
    }
    if ($("#percent").val() == "") {
        alert("Lãi suất không được rỗng");
        $("#percent").focus();
        return;
    }




    summoney = parseInt($("#money").val().replace(/\,/g, '')); // remove ,
    time = parseInt($("#time").val());
    percent = parseFloat($("#percent").val());
    date = $("#date").val();


    var d = new Date(date);

    day = d.getDate();
    month = d.getMonth() + 1;
    year = d.getFullYear();
    var strDate = month + "/" + day + "/" + year;


    tempGoc = summoney;


    var strResult = "";
    strResult = "<table class=\"tbl-list-repayment\"  cellpadding=\"0\" cellspacing=\"0\" border=\"1\" bordercolor=\"#e2e2e2\" bgcolor=\"#fafafa\">"

    strResult += "<tr>"
                + "<th width=\"20%\" align=\"center\" colspan=\"2\">Kỳ trả nợ</th>"
                + "<th width=\"20%\" align=\"center\">Số gốc còn lại</th>"
                + "<th width=\"20%\" align=\"center\">Gốc</th>"
                + "<th width=\"20%\" align=\"center\">Lãi</th>"
                + "<th width=\"20%\" align=\"center\">Tổng gốc + Lãi</th>"
                + "</tr>";

    strResult += "<tr>"
                + "<td width=\"15%\" align=\"center\">" + strDate + "</td>"
                + "<td width=\"5%\" align=\"center\">0</td>"
                + "<td width=\"20%\" align=\"center\">" + converNumber(summoney) + "</td>"
                + "<td width=\"20%\" align=\"center\"></td>"
                + "<td width=\"20%\" align=\"center\"></td>"
                + "<td width=\"20%\" align=\"center\"></td>"
                + "</tr>";

    goc = parseInt(summoney) / time;				// tính gốc
    lai = parseInt(summoney) / 12 * percent / 100; // tính lãi
    goc_lai = goc + lai;


    for (var i = 0; i < time; i++) {
        sum_goc = sum_goc + goc;
        sum_lai = sum_lai + lai;
        tempGoc = tempGoc - goc;

        // cộng ngày tháng
        if (month == 12) {
            month = 1;
            year = year + 1;
        }
        else {
            month = month + 1;
        }
        strDate = day + "/" + ((month < 10) ? "0" + month : month) + "/" + year;

        strResult += "<tr>"
                + "<td width=\"15%\" align=\"center\">" + strDate + "</td>"
                + "<td width=\"5%\" align=\"center\">" + (i + 1) + "</td>"
                + "<td width=\"20%\" align=\"center\">" + converNumber(Math.round(tempGoc)) + "</td>"
                + "<td width=\"20%\" align=\"center\">" + converNumber(Math.round(goc)) + "</td>"
                + "<td width=\"20%\" align=\"center\">" + converNumber(Math.round(lai)) + "</td>"
                + "<td width=\"20%\" align=\"center\">" + converNumber(Math.round(goc_lai)) + "</td>"
                + "</tr>"
    }

    strResult += "<tr>"
                + "<th width=\"15%\" align=\"center\">Tổng</th>"
                + "<th width=\"5%\" align=\"center\"></th>"
                + "<th width=\"20%\" align=\"center\"></th>"
                + "<th width=\"20%\" align=\"center\">" + converNumber(Math.round(sum_goc)) + "</th>"
                + "<th width=\"20%\" align=\"center\">" + converNumber(Math.round(sum_lai)) + "</th>"
                + "<th width=\"20%\" align=\"center\">" + converNumber(Math.round(sum_goc + sum_lai)) + "</th>"
                + "</tr>"

    strResult += "</table>";


    document.getElementById("listRepayment").innerHTML = strResult;
}

</script>
<div class="pfs-loan-repayment">
<div class="content-pfs-loan-repayment"><!-- content -->
<table bgcolor="#fafafa" border="0" bordercolor="#e2e2e2" cellpadding="0" cellspacing="0" class="tbl-loan-repayment">
	<tbody>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td align="left" width="20%">
			<div class="text-loan-repayment">Số tiền vay</div>
			</td>
			<td align="left" width="80%"><input class="txt-loan-repayment" id="money" type="text" value=""> VND</td>
		</tr>
		<tr>
			<td align="left" width="20%">
			<div class="text-loan-repayment">Thời gian vay</div>
			</td>
			<td align="left" width="80%"><input class="txt-loan-repayment" id="time" maxlength="3" type="text" value=""> tháng</td>
		</tr>
		<tr>
			<td align="left" width="20%">
			<div class="text-loan-repayment">Lãi suất</div>
			</td>
			<td align="left" width="80%"><input class="txt-loan-repayment" id="percent" maxlength="3" type="text" value=""> % năm</td>
		</tr>
		<tr>
			<td align="left" width="20%">
			<div class="text-loan-repayment">Ngày giải ngân</div>
			</td>
			<td align="left" width="80%"><input class="txt-date" id="date" readonly="readonly" type="text" value=""> <img alt="Chọn ngày" id="btnDate" src="https://qlct2022.herokuapp.com/MVC/view/pages/img/khac/calendar-icon.gif"> <script type="text/javascript">//<![CDATA[
                        Calendar.setup({
                            inputField: "date",
                            trigger: "btnDate",
                            onSelect: function () { this.hide() },
                            showTime: 8,
                            dateFormat: " %d/%m/%Y"
                        });
                        //]]></script></td>
		</tr>
		<tr>
			<td align="left" width="20%">&nbsp;</td>
			<td align="left" width="80%"><input class="btnrepayment" id="btnrepayment" onclick="calcLoan();" type="button" value="TÍNH"></td>
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
                <div class="float-left">
                </div>
                
            </div>

        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>