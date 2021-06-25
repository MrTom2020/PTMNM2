<?php
    class Home extends Controller
    {
        public $a;
        public function __construct()
        {
            $this->a = $this->model("modelcon");
        }
    public function SayHi()
    {
        $this->view("login",[
            "Page"=>"login",
        ]);
    }
    public function khachdangnhap()
    {
        if(isset($_POST["dongy"]))
        {
            $username = $_POST["useName"];
            $password = $_POST["usePassword"];
        }
    }
}
    
?>