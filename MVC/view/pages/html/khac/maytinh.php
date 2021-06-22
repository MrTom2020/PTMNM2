<!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Máy tính bỏ túi</title>
 <link rel="stylesheet" type="text/css" href="https://qlct2022.herokuapp.com/MVC/view/pages/css/maytinh.css">
 <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
 </head>
 <body>
 <div id="may_tinh">
   <div id="ket_qua">
       <div id="ket_qua_cu">
         <p id="gia_tri_cu"></p>
      </div>
      <div id="xuat_ket_qua">
         <p id="gia_tri_xuat"></p>
      </div>
   </div>
   <div id="ban_phim"> 
     <button class="he_thong" id="xoa_tat_ca">C</button>
     <button class="he_thong" id="xoa_tung_so">CE</button>
     <button class="he_thong" id="%">%</button>
     <button class="he_thong" id="/">÷</button>
     <button class="con_so" id="7">7</button>
     <button class="con_so" id="8">8</button>
     <button class="con_so" id="9">9</button>
     <button class="he_thong" id="*">×</button>
     <button class="con_so" id="4">4</button>
     <button class="con_so" id="5">5</button>
     <button class="con_so" id="6">6</button>
     <button class="he_thong" id="-">-</button>
     <button class="con_so" id="1">1</button>
     <button class="con_so" id="2">2</button>
     <button class="con_so" id="3">3</button>
     <button class="he_thong" id="+">+</button>
     <button class="trong" id="trong"></button>
     <button class="con_so" id="0">0</button>
     <button class="trong" id="trong"></button>
     <button class="he_thong" id="=">=</button>
 </div>
</div>
<form  action="../Ajax/checkuse" method="POST">
<INPUT class="btn btn-primary btn-block mb-4" type="submit" name="qll" VALUE="Quay lại">
</form>
<script src="https://qlct2022.herokuapp.com/MVC/view/pages/js/maytinh.js"></script>
 </body>
 </html>