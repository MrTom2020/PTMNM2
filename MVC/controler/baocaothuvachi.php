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
        $un3 = isset($_POST['un3']) ? $_POST['un3']:"";
        $row =  $this->a->bc($un3);
           $_SESSION['bdtq'] = $this->a->bieudotongquat($un3);
           echo "<table class='table'>";
           echo "<thead>
           <tr>
              <th scope='col'>Tên ví</th>
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
            $chiem = $row2[5] < 0 ? $row2[5] * -1:$row2[5];
            $k = date("d/m/Y",strtotime($tg));
             echo "<tr>
             <th scope='row'>$row2[0]</th>
             <td>$row2[1]</td>
             <td>$row2[4]</td>
             <td>$row2[4]</td>
             <td>$k</td>
             <td><img src='https://img.icons8.com/ios/50/000000/delete--v3.png'/></td>
             </tr>";
           }
           echo "</tbody>";
           echo "</table>";
          
    }
}
    
?>