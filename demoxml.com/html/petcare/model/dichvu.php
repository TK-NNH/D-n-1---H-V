<?php
function loadall_danhmuc(){
    $sql="select * from dichvu order by MaDichVu , mota , img ";
    $listdanhmuc=pdo_query($sql);
    return  $listdanhmuc;
}
function load_ten_dm($iddm){
    if($iddm>0){
        $sql="select * from dichvu where MaDichVu=".$iddm;  // Sửa thành bảng danhmuc thay vì sanpham
        $dm = pdo_query_one($sql);

        if ($dm) {
            return array(
                'name' => $dm['name'],
                'MoTa' => $dm['MoTa'],
                'img' => $dm['img']
            );
        } else {
            return "";
        }
    } else {
        return "";
    }
}

function insert_dichvu($tendv,$giadv, $hinh, $mota){
    $sql = "INSERT INTO `dichvu`(`name`, `Gia`, `img`, `MoTa`) VALUES ('$tendv', '$giadv', '$hinh', '$mota')";
    pdo_execute($sql);
}


