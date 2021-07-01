<?php
    class nhapkhoanthuchi extends Controller
    {
        public $a;
        public function __construct()
        {
            $this->a = $this->model("modelcon");
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
            echo $tendt . "<br/>".$ngaydt ."<br/>". $gtdt . "<br/>" . $dmdt;
        }
        if(isset($_POST["dykc"]))
        {
            $tenkc = isset($_POST["tenkhoanchi"]) ? $_POST["tenkhoanchi"]:"";
            $ngaykc  = isset($_POST["ngaygdkc"]) ? $_POST["ngaygdkc"]:"";
            $gtkc  = isset($_POST["gtkc"]) ? $_POST["gtkc"]:"";
            $dmkc  = isset($_POST["dmkc"]) ? $_POST["dmkc"]:"";
            $idvi = isset($_POST["tenvi"]) ? $_POST["tenvi"]:"";
            echo $tenkc . "<br/>".$ngaykc ."<br/>". $gtkc . "<br/>" . $dmkc ."<br/>".$idvi;
        }
        if(isset($_POST["dykt"]))
        {
            $tenkt = isset($_POST["tenkhoanthu"]) ? $_POST["tenkhoanthu"]:"";
            $ngaykt  = isset($_POST["ngaygdkt"]) ? $_POST["ngaygdkt"]:"";
            $gtkt  = isset($_POST["gtkt"]) ? $_POST["gtkt"]:"";
            $dmkt  = isset($_POST["dmkt"]) ? $_POST["dmkt"]:"";
            echo $tenkt . "<br/>".$ngaykt ."<br/>". $gtkt . "<br/>" . $dmkt;
        }
    }
}
    
?>