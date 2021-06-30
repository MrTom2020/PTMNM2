<?php
    class dangkytaikhoanthanhvien extends Controller
    {
        public $a;
        public function __construct()
        {
           $this->a = $this->model("dangkytaikhoanthanhvien");
        }
    public function SayHi()
    {
        $this->view("tienich",[
            "Page"=>"Themtaikhoanquanly"
        ]);
    }
    public function khachdangkytaikhoantv()
    {
        if(isset($_POST["dangkytv"]))
        {
            $hotentv = isset($_POST["hotentv"]) ? $_POST["hotentv"]:"";
            $ngaysinhtv = isset($_POST["ngaysinhtv"]) ? $_POST["ngaysinhtv"]:"";
            $mktv = isset($_POST["mktv"]) ? $_POST["mktv"]:"";
            $xnmktv = isset($_POST["xnmktv"]) ? $_POST["xnmktv"]:"";
            $dctv = isset($_POST["dctv"]) ? $_POST["dctv"]:"";
            $emailtv = isset($_POST["emailtv"]) ? $_POST["emailtv"]:"";
            $sdttv = isset($_POST["sdttv"]) ? $_POST["sdttv"]:"";
            $cauhoibimattv = isset($_POST["cauhoibimattv"]) ? $_POST["cauhoibimattv"]:"";
            $cautraloitv = isset($_POST["cautraloitv"]) ? $_POST["cautraloitv"]:"";
           echo 3;//$this->a->dk($hotentv, $mktv,$ngaysinhtv,$dctv,$emailtv,$cauhoibimattv,$sdttv,$cautraloitv,$ngaytgtv);
        }
    }
}
    
?>