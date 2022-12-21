<?php
require_once "Models/UserModel.php";
if (isset($_SESSION["username"])) {
    header("location:./index.php");
}
class UserController
{
    public function getUser()
    {

            $username = isset($_POST['username']) ? $_POST['username'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';
            $message=[];
            if ($username != '' && $password != '') {
                $usermodel = new UserModel();
                $user = $usermodel->user($username, $password);
                if ($user) {
                    if (!empty($_POST["remember"])) {
                        setcookie ("username",$_POST["username"],time()+ 3600);
                        setcookie ("password",$_POST["password"],time()+ 3600);
                        echo "Cookies Set Successfuly";
                        $_SESSION["username"] = $username;;
                    } else {
                        setcookie("username","");
                        setcookie("password","");
                        echo "Cookies Not Set";
                    }
                    header("location:Views/home.php");
                } else {
                    require_once "Views/login.php";
                    echo "Tài Khoản mật khẩu không chính xác";
                }
            } else {
                require_once "Views/login.php";
                echo "Bạn chưa nhập hết thông tin";
            }
        }

}
