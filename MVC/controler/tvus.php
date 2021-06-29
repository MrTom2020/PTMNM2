<?php
    class tvus extends Controller
    {
        public $a;
        public function __construct()
        {
            $this->a = $this->model("taovi");
        }
    public function SayHi()
    {
        $this->view("tienich",[
            "Page"=>"vi",
        ]);
    }
    public function ql()
    {
        if(isset($_POST["tv"]))
        {
            $tenvi = isset($_POST["tenvi"]) ? $_POST["tenvi"]:"";
            $tien = isset($_POST["tienvi"]) ? $_POST["tienvi"]:"";
            $ngaytao = isset($_POST["ngaytao"]) ? $_POST["ngaytao"]:"";
            $loaivi = isset($_POST["loaivi"]) ? $_POST["loaivi"]:"";
         echo  $loaivi;
        }
    }
}
    
?>