<?php
class DB
{
    public $servername = "localhost";
    public $username = "root";
    public $databasename = "qlct2";
    public $password = "";
    public $con;
    function __construct()
    {
        $this->con = mysqli_connect($this->servername,$this->username,$this->password);
        mysqli_select_db($this->con,$this->databasename);
        mysqli_query($this->con,"SET NAMES 'utf8'");
    }
}
?>