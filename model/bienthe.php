<?php
if (!function_exists('loadall_bienthe')) {
    function loadall_bienthe()
    {
        $sql = "SELECT * FROM `bien_the` order by `ma_bt` ";
        $bienthe = pdo_query($sql);
        return $bienthe;
    }
}
if (!function_exists('insert_bienthe')) {

    function insert_bienthe($id,$size,$so_luong)
    {
        $sql = "INSERT INTO `bien_the`( ma_sp, size,soluong) VALUES ($id,$size,$so_luong)";
        pdo_execute($sql);
    }
}
if (!function_exists('delete_danhmuc')) {

    function delete_danhmuc($id)
    {
        $sql = "DELETE FROM loai WHERE `loai`.`ma_loai` = '$id'";
        pdo_execute($sql);
    }
}
if (!function_exists('update_danhmuc')) {

    function update_danhmuc($id, $tenloai)
    {
        $sql = "UPDATE `loai` SET `ten_loai` = '$tenloai' WHERE `loai`.`ma_loai` = '$id'";
        pdo_execute($sql);
    }
}
if (!function_exists('loadone_sizesp')) {

    function loadone_sizesp($id)
    {
        $sql = "SELECT * FROM bien_the where `ma_sp`=$id";
        $bienthe = pdo_query($sql);
        return $bienthe;
    }
}
?>
