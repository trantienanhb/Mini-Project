<?php
class DbModel
{

    public  function  connect(){


        $conn=mysqli_connect('localhost','root','','qlsv');
        if(mysqli_connect_errno()){
            echo"ket noi ko thanh cong";
        }
        return $conn;
    }
}

