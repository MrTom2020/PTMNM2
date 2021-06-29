<?php
    class quanlytaikhoan extends Controller
    {
        public $a;
        public function __construct()
        {
            $this->a = $this->model("taovi");
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
        if(isset($_POST["tv"]))
        {
            $tenvi = isset($_POST["tenvi"]) ? $_POST["tenvi"]:"";
            $tien = isset($_POST["tienvi"]) ? $_POST["tienvi"]:"";
            $ngaytao = isset($_POST["ngaytao"]) ? $_POST["ngaytao"]:"";
            $loaivi = isset($_POST["loaivi"]) ? $_POST["loaivi"]:"";
         echo  $this->a->taovi1($tenvi,$tien,$ngaytao,$loaivi);
        }
    }
}
    
?>