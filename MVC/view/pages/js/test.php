<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <div>
        <canvas id='pieChart' style='max-width: 500px;'>123</canvas>
     </div>
  <script>
    var ctxP = document.getElementById("pieChart").getContext('2d');
var kkkk;
    kkkk = 1000;//$.post("hi").value;
    var d = [];
    //d = [10,20,30,40,50];
    for($i = 0;$i < 10;$i+=1)
    {
      d.push($i);
    }
    d.push(kkkk);
    var myPieChart = new Chart(ctxP, {
      type: 'pie',
      data: {
        labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
        datasets: [{
          data: d,
          backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
          hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
        }]
      },
      options: {
        responsive: true
      }
    });
  </script>
</body>
</html>
