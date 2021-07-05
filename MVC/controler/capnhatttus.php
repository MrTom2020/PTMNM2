<?php
    class capnhatttus extends Controller
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
    public function capnhattt()
    {
        if(isset($_POST["dongycn"]))
        {
            $ngaysinhcn = isset($_POST["ngaysinhcn"]) ? $_POST["ngaysinhcn"]:"";
            $mkcn = isset($_POST["mkcn"]) ? $_POST["mkcn"]:"";
            $xnmkcn = isset($_POST["xnmkcn"]) ? $_POST["xnmkcn"]:"";
            $dccn = isset($_POST["dccn"]) ? $_POST["dccn"]:"";
            $emailcn = isset($_POST["emailcn"]) ? $_POST["emailcn"]:"";
            $sdtcn = isset($_POST["sdtcn"]) ? $_POST["sdtcn"]:"";
            $cauhoibimatcn = isset($_POST["cauhoibimatcn"]) ? $_POST["cauhoibimatcn"]:"";
            $cautraloicn = isset($_POST["cautraloicn"]) ? $_POST["cautraloicn"]:"";
            $ID = isset($_SESSION['iduu']) ? $_SESSION['iduu']:"";
            $this->a->capnhatthongtinus($ID,$ngaysinhcn,$mkcn,$dccn,$emailcn,$sdtcn,$cauhoibimatcn,$cautraloicn);
            $this->view("tienich",[
                "Page"=>"Quanlytaikhoan",
            ]);
        }
    }
}
    
?>