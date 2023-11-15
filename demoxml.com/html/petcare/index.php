<?php

include "model/pdo.php";
include "model/dichvu.php";
include "model/taikhoan.php";

include "view/header.php";
include "global.php";
$dsdm = loadall_danhmuc();

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "thanhtoan":
            include "view/thanhtoan.php";
            break;

        case "giohang":
            include "view/giohang.php";
            break;

        case "trangchu":
            include "view/home.php";
            break;

        case "shopthucung":
            include "view/shopthucung.php";
            break;

        case "shopsanpham":
            include "view/shop.php";
            break;

        case "about-us":
            include "view/about-us.php";
            break;

        case "dangnhap":
          
            if (isset($_POST['dangnhap'])) {
                $loginMess = dangnhap($_POST['user'], $_POST['pass']);    
                $thongbao="Đăng nhập thành công";   
                  
                echo '<script>window.location.href = "index.php?act=trangchu";</script>';
            }

            include "view/login/dangnhap.php";
            break;
        case "dangxuat":
            dangxuat();
            echo '<script>window.location.href = "index.php?act=trangchu";</script>';
            break;

            case "dangky":
                if(isset($_POST['dangky']) && ($_POST['dangky']!="")){
                        $email = $_POST['email'];
                        $name = $_POST['user'];
                        $pswd = $_POST['pass'];
                        insert_taikhoan($email, $name,$pswd);
                        $thongbao="Đăng ký thành công";
                }
                include "view/login/login.php";
                break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
