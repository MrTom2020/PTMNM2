<?php
     class Quanlydichvu extends Controller
   {
       public $themdv;
       public function __construct()
       {
          $this->$themdv = $this->model("themdichvu");
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
            // $tendv = isset($_POST["tendv"]) ? $_POST["tendv"]:"";
            // $tenfile = isset($_POST["tenfile"]) ? $_POST["tenfile"]:"";
            // $loai = isset($_POST["loaidv"]) ? $_POST["loaidv"]:"";
            // $noidung = isset($_POST["noidungdv"]) ? $_POST["noidungdv"]:"";
           //echo $this->themdv->themdvu($tendv,$loai,$noidung, $tenfile);
           echo $this->themdv->themdvu();
        }
       }
    }
?>