<?php
     class Admin extends Controller
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
            $ma = isset($_POST["ndcg"]) ? $_POST["ndcg"]:"";
            echo $ma;
        }
       }
    }
?>