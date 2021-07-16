<?php
    class guifile extends Controller
    {
        public $gf;
        public function __construct()
        {
            $this->gf = $this->model("xuatfile");
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
            $ID = isset($_SESSION['iduu']) ? $_SESSION['iduu']:"";
            $this->view("sendata",[
                "Page"=>"sendata",
                "gui"=>$this->gf->xf($ID)
            ]);
        }
    }
    
   
}
    
?>