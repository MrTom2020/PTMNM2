<?php
    class dangkytaikhoanthanhvien extends Controller
    {
        public $a;
        public $ktt;
        public function __construct()
        {
           $this->a = $this->model("dangkytaikhoanthanhvien1");
           $this->ktt= $this->model("modeldktk");
        }
    public function SayHi()
    {
        $this->view("tienich",[
            "Page"=>"Themtaikhoanquanly"
        ]);
    }
    public function kiemtradn()
    {
        $un8 = isset($_POST['un8']) ? $_POST['un8']:"";
        echo  $this->$ktt->kt($un8);
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
            $this->a->dk($hotentv, $mktv,$ngaysinhtv,$dctv,$emailtv,$cauhoibimattv,$sdttv,$cautraloitv,$ngaytgtv);
            $this->view("tienich",[
                "Page"=>"main"
            ]);
        }
    }
}
    
?>