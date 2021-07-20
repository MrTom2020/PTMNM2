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
            "Page1"=>"themdv"
        ]);
       }
       function themdv()
       {
        if(isset($_POST["a1"]))
        {
            $this->view("Admin",[
                "Page"=>"HomeAdmin",
                "Page1"=>"index",
                "dsnd"=>$this->modelcon->ds()
            ]);
        }
       }
    }
?>