<?php
require_once("DbModel.php");
class UserModel extends  DbModel
{
    public function login($username,$password)
    {
        $conn = $this->connect();
        $sql = "SELECT * FROM LOGIN WHERE username='$username' and password='$password'";
         $result=$conn->query($sql);
         $user= mysqli_fetch_assoc($result);
         return $user;
    }
}