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
        if(isset($_POST["xembc"]))
        {
            $id = isset($_POST['tenvi']) ? $_POST['tenvi']:"";
           echo $this->a->bc($id);
        }
    }
}
    
?>