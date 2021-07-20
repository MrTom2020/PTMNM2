<?php
    class Dichvu extends Controller
    {
        public $a;
        public function __construct()
        {
            $this->a = $this->model("modelcon");
        }
    public function SayHi()
    {
        $this->view("tintuc",[
            "Page"=>"dsgame",
        ]);
    }
    public function dvu()
    {
        if(isset($_POST["dsgame"]))
        {
            $this->view("tintuc",[
                "Page"=>"Game",
            ]);
        }
    }
   
}
    
?>