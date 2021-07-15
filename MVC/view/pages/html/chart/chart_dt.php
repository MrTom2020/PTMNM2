<?php 
$k = 10;
 $datab = isset($data['Tongtien']) ? $data['Tongtien']:NULL;
 $datac = isset($_SESSION["listienchi"]) ? $_SESSION["listienchi"]:NULL;
 $datat = isset($_SESSION["listienthu"]) ? $_SESSION["listienthu"]:NULL;
 $datadt = isset($_SESSION["listiendt"]) ? $_SESSION["listiendt"]:NULL;
 $ptcl = 100;
 $kq = 0;
 $dataPoints = array( );
 if($datac)
 {
	while($row = mysqli_fetch_array($datac))
	{
		$gt = $row[2] < 0 ? $row[2] * -1:$row[2];
		$pt = ($gt/$datab) * 100;
		$kq += $pt;
		array_push($dataPoints,array("label"=>$row[1], "y"=>$pt));
	}
 }
 if($datat)
 {
	while($row = mysqli_fetch_array($datat))
	{
		$pt = ($row[2]/$datab) * 100;
		$kq += $pt;
		array_push($dataPoints,array("label"=>$row[1], "y"=>$pt));
	}
 }
 	$ptcl = $ptcl - $pt;
 	array_push($dataPoints,array("label"=>"Còn lại", "y"=>$ptcl));
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Báo cáo tổng quát"
	},
	subtitles: [{
		text: "Tổng tiền trong các ví :<?php echo $datab; ?> "
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>

<div id="chartContainer" style="height: 370px; width: 45%;margin-top:6vh;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html> 