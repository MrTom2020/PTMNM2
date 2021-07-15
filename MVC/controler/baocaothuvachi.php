<?php
    class baocaothuvachi extends Controller
    {
        public $a;
        public $modelcon ;
        public $b;
        public $c;
        public $d;
        public function __construct()
        {
            $this->d = $this->model("tongtienchicua1vi");
            $this->c = $this->model("tientrongvi");
            $this->a = $this->model("bctvc");
            $this->modelcon = $this->model("modelcon");
            $this->b = $this->model("tongtienchiu");
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
        $ID = isset($_SESSION['iduu']) ? $_SESSION['iduu']:"";
        $tongtien = $this->modelcon->tongtien($ID) + $this->b->tongtienc($ID);
        $un3 = isset($_POST['un3']) ? $_POST['un3']:"";
        // $tientv = ($this->d->ttchi($un3) * -1);
        //$pt = ($tientv/$tongtien) * 100;
        echo $tongtien;
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
           echo "<tr>
           <td colspan='4'>Ví có tiền 12 chiếm  % </td>
           </tr>";
           echo "</tbody>";
           echo "</table>";
    }
}
    
?>