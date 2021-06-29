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
        if(isset($_POST["dongy"]))
        {
            $this->view("tienich",[
                "Page"=>"vi",
            ]);
        }
    }
}
    
?>