<?php
     class Quanlydichvu extends Controller
   {
       public $themdv;
       public $ttdv;
       public function __construct()
       {
          $this->themdv = $this->model("themdichvu");
          $this->ttdv = $this->model("thongtinctdv");
       }
       function SayHi()
       {
        $this->view("Admin",[
            "Page"=>"HomeAdmin",
            "Page1"=>"themdv"
        ]);
       }
     public function them()
       {
        if(isset($_POST["dongythem"]))
        {
            $tendv = isset($_POST["tendv"]) ? $_POST["tendv"]:"";
            $tenfile = isset($_POST["tenfile"]) ? $_POST["tenfile"]:"";
            $loai = isset($_POST["loaidv"]) ? $_POST["loaidv"]:"";
            $noidung = isset($_POST["noidungdv"]) ? $_POST["noidungdv"]:"";
           $this->themdv->themdvu($tendv,$loai,$noidung, $tenfile);
             $this->view("Admin",[
            "Page"=>"HomeAdmin",
            "Page1"=>"themdv"
              ]);
        }
       }
       public function capnhatdv()
       {
            $un5 = isset($_POST["un5"]) ? $_POST["un5"]:"";
            $row = $this->ttdv->ttdv($un5);
            if($row)
            {
              echo "<form action='#' method='POST'>";
              while ($row1 = $row -> fetch_row())
              {
                $kq = $row1[3] == '1' ? "Đang hoạt động":"Không hoạt động";
                  echo "<div class='form-outline'>
                  <input type='text' name='tendvcn' id='tendvcn' class='form-control' value='$row1[1]' />
                  <label class='form-label' for='tendvcn'>Tên dịch vụ</label>
                </div>";
                echo "<div class='form-outline'>
                <input type='text' name='loaidvcn' id='loaidvcn' class='form-control' value='$row1[2]' />
                <label class='form-label' for='loaidvcn'>Loại</label>
               </div>";
               echo "<div class='form-outline'>
              <input type='text' name='tinhtrangdvcn' id='tinhtrangdvcn' class='form-control' value='$kq' />
              <label class='form-label' for='tinhtrangdvcn'>Tình trạng</label>
              </div>";
              echo "<div class='form-outline'>
              <textarea class='form-control' name='noidungdvcn' id='noidungdvcn' value='$row1[4]' rows='4'/>
              <label class='form-label' for='noidungdvcn'>Nội dung</label>
               </div>";
              }
              echo "</form>";
            }
       }
    }
?>