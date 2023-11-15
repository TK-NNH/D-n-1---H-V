<?php
include "../model/pdo.php";
include "../view/header.php";

include "../model/dichvu.php";

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "addsp":
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                
                $tendv = $_POST['tendv'];
                $giadv = $_POST['giadv'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                //                    echo $hinh;
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                //                    echo $target_file;
                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                    //                        echo "Bạn đã upload ảnh thành công";
                } else {
                    //                        echo "Upload ảnh không thành công";
                }
                //                    echo $iddm;
                insert_dichvu($tendv,$giadv, $hinh, $mota);
                $thanhcong = "Thêm thành công";
            }

            $listdanhmuc = loadall_danhmuc();
            include "add.php";
            break;
    }
} else {
    
}

include "footer.php";
