<?php
    class nhapkhoanthuchi extends Controller
    {
        public $a;
        public function __construct()
        {
            $this->a = $this->model("thuvachitieu");
        }
    public function SayHi()
    {
        $this->view("login",[
            "Page"=>"login",
        ]);
    }
    public function themkhoanthuchi()
    {
        if(isset($_POST["dydt"]))
        {
            $tendt = isset($_POST["tenloaidautu"]) ? $_POST["tenloaidautu"]:"";
            $ngaydt  = isset($_POST["ngaygddt"]) ? $_POST["ngaygddt"]:"";
            $gtdt  = isset($_POST["gtdt"]) ? $_POST["gtdt"]:"";
            $dmdt  = isset($_POST["dmdt"]) ? $_POST["dmdt"]:"";
            $idvi = isset($_POST["tenvi"]) ? $_POST["tenvi"]:"";
            $loai = "Khoản đầu tư";
            $this->a->taochitieu($tenkc,$loai,$idvi,$ngaykc,$gtkc,$dmkc);
            $this->view("tintuc",[
                "Page"=>"sothu",
            ]);
            echo $tendt . "<br/>".$ngaydt ."<br/>". $gtdt . "<br/>" . $dmdt;
        }
        if(isset($_POST["dykc"]))
        {
            $tenkc = isset($_POST["tenkhoanchi"]) ? $_POST["tenkhoanchi"]:"";
            $ngaykc  = isset($_POST["ngaygdkc"]) ? $_POST["ngaygdkc"]:"";
            $gtkc  = isset($_POST["gtkc"]) ? $_POST["gtkc"]:"";
            $dmkc  = isset($_POST["dmkc"]) ? $_POST["dmkc"]:"";
            $idvi = isset($_POST["tenvi"]) ? $_POST["tenvi"]:"";
            $loai = "Khoản chi";
            $this->a->taochitieu($tenkc,$loai,$idvi,$ngaykc,$gtkc * - 1,$dmkc);
            $this->view("tintuc",[
                "Page"=>"sochi",
            ]);
        }
        if(isset($_POST["dykt"]))
        {
            $tenkt = isset($_POST["tenkhoanthu"]) ? $_POST["tenkhoanthu"]:"";
            $ngaykt  = isset($_POST["ngaygdkt"]) ? $_POST["ngaygdkt"]:"";
            $gtkt  = isset($_POST["gtkt"]) ? $_POST["gtkt"]:"";
            $dmkt  = isset($_POST["dmkt"]) ? $_POST["dmkt"]:"";
            $idvi = isset($_POST["tenvi"]) ? $_POST["tenvi"]:"";
            $loai = "Khoản thu";
            $this->a->taochitieu($tenkc,$loai,$idvi,$ngaykc,$gtkc * - 1,$dmkc);
            $this->view("tintuc",[
                "Page"=>"sodautu",
            ]);
            echo $tenkt;
        }
    }
}
    
?>