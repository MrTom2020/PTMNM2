<?php
class DB
{
    public $servername = "us-cdbr-east-04.cleardb.com";
    public $username = "b3b5c4ce68fd3f";
    public $databasename = "heroku_59161a489581119";
    public $password = "00a554cf";
    public $con;
    function __construct()
    {
        $this->con = mysqli_connect($this->servername,$this->username,$this->password);
        mysqli_select_db($this->con,$this->databasename);
        mysqli_query($this->con,"SET NAMES 'utf8'");
    }
}
?>