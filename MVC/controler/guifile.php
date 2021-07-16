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
            $myfile = fopen('2.txt','w+');
            $content = 'Đây là nội dung file 2 + 1';
            fwrite($myfile, $content);
            fclose($myfile);
            $content = file_get_contents('2.txt');
            echo $content;
        }
    }
    
   
}
    
?>