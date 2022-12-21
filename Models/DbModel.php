<?php
class DbModel
{

    public  function  connect(){


        $conn=mysqli_connect('localhost','root','','login');
        if(mysqli_connect_errno()){
            echo"ket noi ko thanh cong";
        }
        return $conn;
    }
}

