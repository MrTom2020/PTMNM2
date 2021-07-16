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
        $this->view("tintuc",[
            "Page"=>"main",
        ]);
    }
    public function senddata()
    {
        if(isset($_POST["btnguifile"]))
        {
            $k = isset($_POST["file"]) ? $_POST["file"]:"";
            echo $k;
        }
    }
    
   
}
    
?>