<?php 
    $servername = "us-cdbr-east-04.cleardb.com";
    $username = "b3b5c4ce68fd3f";
    $password = "00a554";
    $dbname = "heroku_59161a489581119";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
       die('Kết nối thất bại:'.mysqli_connect_error());
    }else{
        echo"kết nối thành công";
    }
    ?>
?>