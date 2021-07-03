<?php
    class xemthongbao extends Controller
    {
        public $a;
        public function __construct()
        {
            $this->a = $this->model("xtb");
        }
    public function SayHi()
    {
        $this->view("login",[
            "Page"=>"login",
        ]);
    }
    public function xemtb()
    {
        if(isset($_POST["xoatb"]))
        {
           $ma = isset($_POST["xoatb"]) ? $_POST["xoatb"]:'';
           echo $this->a->xoatb($ma);
        }
    }
}
    
?>