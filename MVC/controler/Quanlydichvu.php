<?php
     class Admin extends Controller
   {
       public $modelcon;
       public function __construct()
       {
         // $this->modelcon = $this->model("Qlnd");
       }
       function SayHi()
       {
        $this->view("Admin",[
            "Page"=>"HomeAdmin",
            "Page1"=>"themdv"
        ]);
       }
       function them()
       {
        if(isset($_POST["dongythem"]))
        {
            // $this->view("Admin",[
            //     "Page"=>"HomeAdmin",
            //     "Page1"=>"index",
            //     "dsnd"=>$this->modelcon->ds()
            // ]);
            $tendv = isset($_POST["tendv"]) ? $_POST["tendv"]:"";
            $tenfile = isset($_POST["tenfile"]) ? $_POST["tenfile"]:"";
            $loai = isset($_POST["loaidv"]) ? $_POST["loaidv"]:"";
            $noidung = isset($_POST["noidungdv"]) ? $_POST["noidungdv"]:"";
            echo $tendv ."|". $tenfile ."|". $loai ."|". $noidung;
        }
       }
    }
?>