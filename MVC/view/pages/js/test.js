    var ctxP = document.getElementById("pieChart").getContext('2d');
var kkkk;
var kkkk2;
var kkkk3;
    kkkk = document.getElementById('txtJob').value;
    kkkk2 = document.getElementById('txtJob2').value;
    kkkk3 = document.getElementById('txtJob3').value;
    // json_encode(kkkk);
    //kkkk = $.post("hi").value;
    var d = [];
    var d1 = [];
    //d = [10,20,30,40,50];
    var a;
    var a2
    a = JSON.parse(kkkk);
    a2 = JSON.parse(kkkk3);
    //alert(a);
    for(var ii = 0;ii < kkkk2;++ii)
    {
      //alert(a[ii]);
      d.push(a[ii]);
      d1.push(a2[ii]);
    }
    for($i = 0;$i < 10;$i+=1)
    {
      d.push($i);
    }
    d.push(kkkk);
    var myPieChart = new Chart(ctxP, {
      type: 'pie',
      data: {
        labels: d1,
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
