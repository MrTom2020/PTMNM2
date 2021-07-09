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
           echo "<table class='table'>";
           echo "<thead>
           <tr>
              <th scope='col'>ID</th>
              <th scope='col'>Tên ví</th>
              <th scope='col'>Tiền trong ví</th>
              <th scope='col'>Mã người dùng</th>
              <th scope='col'>Loại ví</th>
              <th scope='col'>Xóa</th>
          </tr>
           </thead>";
         echo "<tbody>";
           while ($row2 = $row -> fetch_row())
           {
               echo "Tên ". $row2[0]. "giá trị ". $row2[1]. "Ngày tạo ".$row2[2]. "Danh mục ".$row2[3]. "Loại ví ".$row2[4];
           }
           echo "</tbody>";
           echo "</table>";
    }
}
    
?>