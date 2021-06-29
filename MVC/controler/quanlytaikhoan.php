<?php
    class quanlytaikhoan extends Controller
    {
        public $a;
        public function __construct()
        {
            $this->a = $this->model("taovi");
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
        if(isset($_POST["danhsachvi"]))
        {
            $this->view("tienich",[
                "Page"=>"listwallet",
                "listvi"=>$this->a->dsvi()
            ]);
        }
    }
}
    
?>