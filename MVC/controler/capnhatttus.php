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
            // $this->a->dk($hotentv, $mktv,$ngaysinhtv,$dctv,$emailtv,$cauhoibimattv,$sdttv,$cautraloitv,$ngaytgtv);
            // $this->view("tienich",[
            //     "Page"=>"main"
            // ]);
            echo $sdtcn;
        }
    }
}
    
?>