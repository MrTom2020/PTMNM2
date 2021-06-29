<?php
    class quanlytaikhoan extends Controller
    {
        public $a;
        public function __construct()
        {
            $this->a = $this->model("modelcon");
        }
    public function SayHi()
    {
        $this->view("tienich",[
            "Page"=>"Quanlytaikhoan",
        ]);
    }
    public function ql()
    {
        if(isset($_POST["vitien"]))
        {
            $this->view("tienich",[
                "Page"=>"vi",
            ]);
        }
    }
    public function taovi()
    {
        if(isset($_POST["taovi"]))
        {
            $tenvi = isset($_POST["tenvi"]) ? $_POST["tenvi"]:"";
            $tien = isset($_POST["tienvi"]) ? $_POST["tienvi"]:"";
            $userid = isset($_POST["tenvi"]) ? $_POST["tenvi"]:"";
            $ngaytao = isset($_POST["ngaytao"]) ? $_POST["ngaytao"]:"";
            $loaivi = isset($_POST["loaivi"]) ? $_POST["loaivi"]:"";

            echo $tenvi;
        }
    }
}
    
?>