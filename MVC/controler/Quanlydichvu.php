<?php
     class Quanlydichvu extends Controller
   {
       public $themdv;
       public function __construct()
       {
          $this->themdv = $this->model("themdichvu");
       }
       function SayHi()
       {
        $this->view("Admin",[
            "Page"=>"HomeAdmin",
            "Page1"=>"themdv"
        ]);
       }
     public function them()
       {
        if(isset($_POST["dongythem"]))
        {
            $tendv = isset($_POST["tendv"]) ? $_POST["tendv"]:"";
            $tenfile = isset($_POST["tenfile"]) ? $_POST["tenfile"]:"";
            $loai = isset($_POST["loaidv"]) ? $_POST["loaidv"]:"";
            $noidung = isset($_POST["noidungdv"]) ? $_POST["noidungdv"]:"";
           $this->themdv->themdvu($tendv,$loai,$noidung, $tenfile);
             $this->view("Admin",[
            "Page"=>"HomeAdmin",
            "Page1"=>"themdv"
              ]);
        }
       }
       public function capnhatdv()
       {
            $un5 = isset($_POST["un5"]) ? $_POST["un5"]:"";
            echo $un5;
       }
    }
?>