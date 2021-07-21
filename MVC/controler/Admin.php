<?php
     class Admin extends Controller
   {
       public $modelcon;
       public $dsdv;
       public function __construct()
       {
          $this->modelcon = $this->model("Qlnd");
          $this->dsdv = $this->model("danhsachdv");
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
                "dsnd"=>$this->modelcon->ds()
            ]);
        }
        if(isset($_POST["a2"]))
        {
            $this->view("Admin",[
                "Page"=>"HomeAdmin",
                "Page1"=>"index2",
                "dsnd"=>$this->modelcon->ds()
            ]);
        }
        if(isset($_POST["a3"]))
        {
            $this->view("Admin",[
                "Page"=>"HomeAdmin",
                "Page1"=>"index3",
                "dsnd"=>$this->modelcon->dsndbvh()
            ]);
        }
        if(isset($_POST["a4"]))
        {
            $this->view("Admin",[
                "Page"=>"HomeAdmin",
                "Page1"=>"themdv",
                "dsnd"=>$this->modelcon->ds()
            ]);
        }
        if(isset($_POST["a5"]))
        {
            $this->view("Admin",[
                "Page"=>"HomeAdmin",
                "Page1"=>"capnhatdv",
                "dsnd"=>$this->dsdv->dsdvu()
            ]);
        }
        if(isset($_POST["a7"]))
        {
            $this->view("Admin",[
                "Page"=>"HomeAdmin",
                "Page1"=>"thongbaocanhan",
                "dsnd"=>$this->modelcon->ds()
            ]);
        }
        if(isset($_POST["a8"]))
        {
            $this->view("Admin",[
                "Page"=>"HomeAdmin",
                "Page1"=>"thongbaochung"
            ]);
        }
        if(isset($_POST["a25"]))
        {
            $this->view("Admin",[
                "Page"=>"HomeAdmin",
                "Page1"=>"calendar"
            ]);
        }
       }
    }
?>