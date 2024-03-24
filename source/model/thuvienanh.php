<?php
if (!function_exists('thuvien')) {

    function thuvien()
    {
        $sql = "SELECT `san_pham`.`ten_sp`
            count(*) so_luong,
            from binh_luan 
            join `san_pham` on `binh_luan`.`ma_sp` = `san_pham`.`ma_sp`
            order by ma_sp
    ";
        $thuvien = pdo_query($sql);
        return $thuvien;
    }
}
if (!function_exists('insert_anh_thuvien')) {

    function insert_anh_thuvien($id, $anh)
    {
        $sql = "INSERT INTO `thu_vien_anh` (`ma_sp`,`anh`) VALUES ('$id','$anh')";
        pdo_execute($sql);
    }
}
if (!function_exists('loadAnh_thuvien')) {

    function loadAnh_thuvien($id)
    {
        $sql = "SELECT * FROM `thu_vien_anh` where `ma_sp` = '$id' order by `ma_tv` ";
        $tvanh_sp = pdo_query($sql);
        return $tvanh_sp;
    }
}
if (!function_exists('delete_anh_thuvien')) {

    function delete_anh_thuvien($id)
    {
        $sql = "DELETE FROM `thu_vien` WHERE `thu_vien`.`ma_tv` = '$id'";
        pdo_execute($sql);
    }
}
?>