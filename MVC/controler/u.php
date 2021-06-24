<?php 
/*
public $servername = "us-cdbr-east-04.cleardb.com";
    public $username = "b3b5c4ce68fd3f";
    public $databasename = "heroku_59161a489581119";
    public $password = "00a554";
*/
    $servername = "us-cdbr-east-04.cleardb.com";
    $username = "b3b5c4ce68fd3f";
    $password = "00a554cf";
    $dbname = "heroku_59161a489581119";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
       die('Kết nối thất bại:'.mysqli_connect_error());
    }else{
        echo"kết nối thành công";
    }
    $sql = "select * from user";
    $tt = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($tt))
    {
        echo $row[2];
    }
    ?>
?>