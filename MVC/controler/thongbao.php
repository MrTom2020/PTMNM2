<?php
     class thongbao extends Controller
   {
       public $modelcon;
       public function __construct()
       {
          $this->modelcon = $this->model("Qlnd");
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
            echo $maad;
        }
       }
    }
?>