<?php
    class baocaothuvachi extends Controller
    {
        public $a;
       public $modelcon ;
       public $tongtienchi;
       public $c;
       public $d;
       public $e;
        public function __construct()
        {
           $this->a = $this->model("bctvc");
           $this->modelcon = $this->model("modelcon");
           $this->tongtienchi = $this->model("tongtienchiu");
           $this->e = $this->model("testbc");
        }
    public function SayHi()
    {
        $this->view("tintuc",[
            "Page"=>"Baocaokhoanchi",
        ]);
    }
    public function baocaotq()
    {
        try
        {
        $ID = isset($_SESSION['iduu']) ? $_SESSION['iduu']:"";
        $tongtien = $this->modelcon->tongtien($ID);
        $tienchi = $this->tongtienchi->tongtienc($ID) * -1;
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
            $kq = ($row2[1]/($tongtien + $tienchi) * 100) < 0 ? ($row2[1]/($tongtien + $tienchi) * 100 * - 1): ($row2[1]/($tongtien + $tienchi) * 100);
            $k = date("d/m/Y",strtotime($tg));
             echo "<tr>
             <th scope='row'>$row2[0]</th>
             <td>$row2[1]</td>
             <td>$row2[4]</td>
             <td>$kq</td>
             <td>$k</td>
             <td><img src='https://img.icons8.com/ios/50/000000/delete--v3.png'/></td>
             </tr>";
           }
           echo "</tbody>";
           echo "</table>";
        }
        catch(Exception $e)
        {
            echo '123';
        }
    }
    public function baocaoct()
    {
        
        $ID = isset($_SESSION['iduu']) ? $_SESSION['iduu']:"";
        $tongtien = $this->modelcon->tongtien($ID);
        $tienchi = $this->tongtienchi->tongtienc($ID) * -1;
        $un3 = isset($_POST['un3']) ? $_POST['un3']:"";
        echo "<script src='https://quanlychitieu2030.herokuapp.com/MVC/view/pages/js/test.js'></script>
        <div id='chart1' style='min-width: 310px; height: 400px; margin: 0 auto'></div>
        <script src = 'https://code.highcharts.com'> </ script>";
    }
}
    
?>