<?php
    class quanlytaikhoan extends Controller
    {
        public $a;
        public function __construct()
        {
            $this->a = $this->model("modelcon");
        }
    public function SayHi()
    {
        $this->view("tienich",[
            "Page"=>"Quanlytaikhoan",
        ]);
    }
    public function ql()
    {
        if(isset($_POST["vitien"]))
        {
            $this->view("tienich",[
                "Page"=>"vi",
            ]);
        }
    }
    public function taovi()
    {
        if(isset($_POST["vitien"]))
        {
            $this->view("tienich",[
                "Page"=>"vi",
            ]);
        }
    }
}
    
?>