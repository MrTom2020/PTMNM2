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
           $row = $this->a->bc($un3);
           while($row2 = mysqli_fetch_array($row))
           {
               echo $row2[1];
           }
    }
}
    
?>