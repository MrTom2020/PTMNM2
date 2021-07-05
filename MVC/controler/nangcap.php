<?php
    class nangcap extends Controller
    {
        public $a;
        public function __construct()
        {
            $this->a = $this->model("nangcaptk");
        }
    public function SayHi()
    {
        $this->view("main",[
            "Page"=>"main",
        ]);
    }
    public function nc()
    {
        if(isset($_POST["dync"]))
        {
            $ID = isset($_SESSION['iduu']) ? $_SESSION['iduu']:"";
            $this->a->nc($ID);
            $this->view("main",[
                "Page"=>"main",
            ]);
        }
    }
}
    
?>