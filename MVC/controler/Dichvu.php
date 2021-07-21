<?php
    class Dichvu extends Controller
    {
        public $dvv;
        public function __construct()
        {
            $this->dvv = $this->model("dv");
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
                "dsgame"=>$this->dvv->dsachgame()
            ]);
        }
        if(isset($_POST["qlgame"]))
        {
            $this->view("tintuc",[
                "Page"=>"Game",
                "dsgame"=>$this->dvv->dsachgame()
            ]);
        }
    }
   
}
    
?>