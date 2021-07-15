<?php
    class baocaothuvachi extends Controller
    {
        public $a;
        public function __construct()
        {
            $this->a = $this->model("bctvc");
        }
    public function SayHi()
    {
        $this->view("tintuc",[
            "Page"=>"baocaothuchi",
        ]);
    }
    public function baocaotq()
    {
           // $id = isset($_POST['tenvi']) ? $_POST['tenvi']:"";
        $dataPoints = array( );
        $un3 = isset($_POST['un3']) ? $_POST['un3']:"";
        $row =  $this->a->bc($un3);
           $_SESSION['bdtq'] = $this->a->bieudotongquat($un3);
           echo "<table class='table'>";
           echo "<thead>
           <tr>
              <th scope='col'>Tên khoản chi</th>
              <th scope='col'>Tiền giao dịch</th>
              <th scope='col'>Loại</th>
              <th scope='col'>Chiếm</th>
              <th scope='col'>Ngày tạo</th>
              <th scope='col'>Xóa</th>
          </tr>
           </thead>";
         echo "<tbody>";
           while ($row2 = $row -> fetch_row())
           {
            $tg = $row2[2];
            $chiem = $row2[6] < 0 ? $row2[6] * -1:$row2[6];
            $k = date("d/m/Y",strtotime($tg));
             echo "<tr>
             <th scope='row'>$row2[0]</th>
             <td>$row2[1]</td>
             <td>$row2[4]</td>
             <td>$chiem %</td>
             <td>$k</td>
             <td><img src='https://img.icons8.com/ios/50/000000/delete--v3.png'/></td>
             </tr>";
           }
           echo "</tbody>";
           echo "</table>";
           for($i = 0;$i < 10;$i++)
           {
             array_push($dataPoints,array("label"=>"123", "y"=>$i));
           }
          echo "<script>
          window.onload = function() {
          var chart = new CanvasJS.Chart('chartContainer', {
              animationEnabled: true,
              title: {
                  text: 'Báo cáo tổng quát'
              },
              subtitles: [{
                  text: 'Tổng tiền trong các ví :<?php echo $datab; ?> '
              }],
              data: [{
                  type: 'pie',
                  yValueFormatString: '#,##0.00\'%\'',
                  indexLabel: '{label} ({y})',
                  dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
              }]
          });
          chart.render();
           
          }
          </script>";
          echo "<div id='chartContainer' style='height: 370px; width: 45%;margin-top:6vh;'>111111111111111111</div>";
    }
}
    
?>