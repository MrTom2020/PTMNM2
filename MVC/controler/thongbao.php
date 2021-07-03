<?php
     class thongbao extends Controller
   {
       public $modelcon;
       public function __construct()
       {
          $this->modelcon = $this->model("thongbaous");
       }
       function SayHi()
       {
        $this->view("Admin",[
            "Page"=>"HomeAdmin",
            "Page1"=>"index"
        ]);
       }
       public function guicanhan()
       {
        if(isset($_POST['gcn']))
        {
            $maad =isset($_SESSION['iduu']) ? $_SESSION['iduu']:"";
            $ma = isset($_POST["ndcg"]) ? $_POST["ndcg"]:"";
            $tentacgia = isset($_SESSION['ten']) ? $_SESSION['ten']:"";
            $noidung = isset($_POST['noidungcn']) ? $_POST['noidungcn']:"";
            $tieude = isset($_POST['ttde']) ? $_POST['ttde']:"";
            $ngaydang = date("l"). "  ". date("Y/m/d"). "   " . date("h:i:sa");
            echo $this->modelcon->tbcn($ma,$tentacgia,$tieude,$noidung,$ngaydang);
            echo $noidung;
        }
       }
       public function guitatca()
       {
        if(isset($_POST['gchung']))
        {
            $maad =isset($_SESSION['iduu']) ? $_SESSION['iduu']:"";
            $ma = isset($_POST["ndcg"]) ? $_POST["ndcg"]:"";
            $tentacgia = isset($_SESSION['ten']) ? $_SESSION['ten']:"";
            $noidung = isset($_POST['noidungchung']) ? $_POST['noidungchung']:"";
            $tieude = isset($_POST['ttdechung']) ? $_POST['ttdechung']:"";
            $ngaydang = date("l"). "  ". date("Y/m/d"). "   " . date("h:i:sa");
            echo $this->modelcon->thongbaochung($maad,$tentacgia,$tieude,$noidung,$ngaydang);
            echo $maad;
        }
       }
       public function guitheonhom()
       {
        if(isset($_POST['gcn']))
        {
            $maad =isset($_SESSION['iduu']) ? $_SESSION['iduu']:"";
            $ma = isset($_POST["ndcg"]) ? $_POST["ndcg"]:"";
            echo $maad;
        }
       }
    }
?>