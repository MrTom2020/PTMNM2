<?php
     class Quanlydichvu extends Controller
   {
       public $themdv;
       public $ttdv;
       public $cn;
       public function __construct()
       {
          $this->themdv = $this->model("themdichvu");
          $this->ttdv = $this->model("thongtinctdv");
          $this->cn = $this->model("capnhatdvu");
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
       public function cn()
       {
         if(isset($_POST["dycn"]))
         {
           $id = isset($_POST["madvcn"]) ? $_POST["madvcn"]:"";
           $tendvmoi = isset($_POST["tendvcn"]) ? $_POST["tendvcn"]:"";
           $loaicn = isset($_POST["loaidvcn"]) ? $_POST["loaidvcn"]:"";
           $tinhtrang = isset($_POST["tinhtranghd"]) ? $_POST["tinhtranghd"]:"";
           $noidung = isset($_POST["noidungdvcn"]) ? $_POST["noidungdvcn"]:"";
           echo $this->cn->cndv($id,$tendvmoi,$loaicn,$noidung,$tinhtrang);
         }
       }
       public function capnhatdv()
       {
            $un5 = isset($_POST["un5"]) ? $_POST["un5"]:"";
            $row = $this->ttdv->ttdv($un5);
            if($row)
            {
              echo "<form action='Quanlydichvu/cn' method='POST'>";
              while ($row1 = $row -> fetch_row())
              {
                $kq = $row1[3] == '1' ? "Đang hoạt động":"Không hoạt động";
                  echo "<div class='form-outline'>
                  <select class='form-select' id='madvcn' name='madvcn' aria-label='Default select example'>
               <option value='$row1[0]'>$row1[0]</option>
               </select>
                  <label class='form-label' for='madvcn'>Mã dịch vụ</label>
                  <input type='text' name='tendvcn' id='tendvcn' class='form-control' value='$row1[1]' />
                  <label class='form-label' for='tendvcn'>Tên dịch vụ</label>
                </div>";
                echo "<div class='form-outline'>
                <input type='text' name='loaidvcn' id='loaidvcn' class='form-control' value='$row1[2]' />
                <label class='form-label' for='loaidvcn'>Loại</label>
               </div>";
               echo "<div class='form-outline'>
               <select class='form-select' id='tinhtranghd' name='tinhtranghd' aria-label='Default select example'>
               <option value='$row1[3]'>$kq</option>
               <option value='0'>Không hoạt động</option>
               </select>
              <label class='form-label' for='tinhtrangdvcn'>Tình trạng</label>
              </div>";
              echo "<div class='form-outline'>
              <textarea class='form-control' name='noidungdvcn' id='noidungdvcn' rows='4'>$row1[4]</textarea>
              <label class='form-label' for='noidungdvcn'>Nội dung</label>
               </div>";
              }
              echo "<input type='submit' class='form-control'  name='dycn' value='Đồng ý cập nhật'>";
              echo "</form>";
            }
       }
    }
?>