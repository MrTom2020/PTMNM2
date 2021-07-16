<?php
    class guifile extends Controller
    {
        public $a;
        public function __construct()
        {
            $this->a = $this->model("modelcon");
        }
    public function SayHi()
    {
        $this->view("sendata",[
            "Page"=>"sendata",
        ]);
    }
    public function senddata()
    {
        if(isset($_POST["btnguifile"]))
        {
            $this->view("sendata",[
                "Page"=>"sendata",
            ]);
        }
    }
    
   
}
    
?>