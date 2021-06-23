<?php
    class tienich extends Controller
    {
        public $a;
        public function __construct()
        {
         //   $this->a = $this->model("modelcon");
        }
    public function SayHi()
    {
        $this->view("tienich",[
            "Page"=>"tienich",
        ]);
    }
    public function ti()
    {
        if(isset($_POST["mt"]))
        {
            $this->view("maytinh",[
                "Page"=>"maytinh",
            ]);
        }
        if(isset($_POST["cd"]))
        {
            $this->view("maytinh",[
                "Page"=>"chuyendoitien",
            ]);
        }
        if(isset($_POST["tlnobandau"]))
        {
            $this->view("tienich",[
                "Page"=>"lichtranogd",
            ]);
        }
        if(isset($_POST["tlnogiamdan"]))
        {
            $this->view("tienich",[
                "Page"=>"lichtranogiamdan",
            ]);
        }
        if(isset($_POST["tltietkiem"]))
        {
            $this->view("maytinh",[
                "Page"=>"chuyendoitien",
            ]);
        }
        if(isset($_POST["nhac"]))
        {
            $this->view("tienich",[
                "Page"=>"nhac",
            ]);
        }
        if(isset($_POST["mailbox"]))
        {
            $this->view("tienich",[
                "Page"=>"mailbox",
            ]);
        }
    }
}
    
?>