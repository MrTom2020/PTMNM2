<?php
    class sogiaodich extends Controller
    {
        public $a;
        public function __construct()
        {
         //   $this->a = $this->model("modelcon");
        }
    public function SayHi()
    {
        $this->view("tintuc",[
            "Page"=>"nhapkhoanthuchi",
        ]);
    }
    public function ti()
    {
        if(isset($_POST["st"]))
        {
            $this->view("tintuc",[
                "Page"=>"sothu",
            ]);
        }
        if(isset($_POST["sc"]))
        {
            $this->view("tintuc",[
                "Page"=>"sochi",
            ]);
        }
        if(isset($_POST["sc"]))
        {
            $this->view("tintuc",[
                "Page"=>"sodautu",
            ]);
        }
    }
}
    
?>