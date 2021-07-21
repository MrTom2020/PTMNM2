<?php
    class dsgamee extends Controller
    {
        public $a;
        public function __construct()
        {
          //  $this->a = $this->model("modelcon");
        }
    public function SayHi()
    {
        $this->view("tintuc",[
            "Page"=>"game",
        ]);
    }
    public function nsk()
    {
        if(isset($_POST["game1"]))
        {
            $this->view("main",[
                "Page"=>"main",
            ]);
        }
    }

   
}
    
?>