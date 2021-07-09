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
           while ($row2 = $row -> fetch_row())
           {
               echo "Tên ". $row2[0]. "giá trị ". $row2[1]. "Ngày tạo ".$row2[2]. "Danh mục ".$row2[3]. "Loại ví ".$row2[4];
           }
    }
}
    
?>