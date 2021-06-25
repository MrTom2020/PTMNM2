<?php
     class Ajax extends Controller
   {
       public $modelcon;
       public function __construct()
       {
          $this->modelcon = $this->model("modelcon");
       }
       function SayHi()
       {
        $this->view("main",[
            "Page"=>"main",
        ]);
       }
       public function checkuse()
       {
            $un =  isset($_POST["un"]) ? $_POST["un"]:0;
            $us = isset($_POST['useName']) ? $_POST['useName']:"";
            $pw = isset($_POST['usePassword']) ? $_POST['usePassword']:"";
            $kq = $this->modelcon->t($us,$pw);
            echo $kq;
            // if($us && $password && isset($_POST['btnLogin']))
            // {
            //     $this->view("main",[
            //                  "Page"=>"main"]);
            // }
            //echo $this->modelcon->checkus($un);
            // if (isset($_POST['btnLogin']))
            // {
            //     $name = isset($_POST['useName']) ? $_POST['useName']:"";
            //     $password = isset($_POST['usePassword']) ? $_POST['usePassword']:"";
            //     if(!$name && !$password)
            //     {
            //         $this->view("main",[
            //             "Page"=>"main"
            //         ]);
            //     }
            //     else
            //     {
            //         $this->view("Admin",[
            //             "Page"=>"HomeAdmin",
            //             "Page1"=>"index"
            //         ]);
            //     }
            // }
            // if (isset($_POST['signup']))
            // {
            //     $this->view("Signup",[
            //         "Page"=>"formsigup"
            //     ]);
            // }
            // if (isset($_POST['qll']))
            // {
            //     $this->view("tintuc",[
            //         "Page"=>"tienich"
            //     ]);
            // }
            // if(isset($_POST["admin"]))
            // {
            //     $this->view("Admin",[
            //         "Page"=>"HomeAdmin",
            //         "Page1"=>"index"
            //     ]);
            // }
       }
    }
?>