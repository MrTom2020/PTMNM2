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
       function chuyentrang()
       {
        if(isset($_POST["a1"]))
        {
            $this->view("Admin",[
                "Page"=>"HomeAdmin",
                "Page1"=>"index",
                "dsnd"=>$this->a->ds()
            ]);
        }
        if(isset($_POST["a2"]))
        {
            $this->view("Admin",[
                "Page"=>"HomeAdmin",
                "Page1"=>"index2"
            ]);
        }
        if(isset($_POST["a3"]))
        {
            $this->view("Admin",[
                "Page"=>"HomeAdmin",
                "Page1"=>"index3"
            ]);
        }
       }
    }
?>