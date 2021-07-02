<?php
    class Quanlynguoidung extends Controller
    {
        public $a;
        public function __construct()
        {
            $this->a = $this->model("Qlnd");
        }
    public function SayHi()
    {
        $this->view("Admin",[
            "Page"=>"HomeAdmin",
            "Page1"=>"index"
        ]);
    }
    public function kpdlnd()
    {
        if(isset($_POST["kp"]))
        {
            $mand = isset($_POST['kp']) ? $_POST['kp']:"0";
            echo $this->a->kpuss($mand);
        }
    }
    public function vohieund()
    {
        if(isset($_POST["vh"]))
        {
            $mand = isset($_POST['vh']) ? $_POST['vh']:"0";
            echo $this->a->kpuss($mand);
        }
    }
}
    
?>