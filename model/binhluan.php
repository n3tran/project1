<?php
if (!function_exists('thongke_binhluan')) {

    function thongke_binhluan()
    {
        $sql = "SELECT * from binh_luan
            join san_pham on `san_pham`.`ma_sp` = `binh_luan`.`ma_sp`
            join tai_khoan on `tai_khoan`.`ma_tk` = `binh_luan`.`ma_tk`";
        $tk_bl = pdo_query($sql);
        return $tk_bl;
    }
}
if (!function_exists('loadall_binhluan')) {

    function loadall_binhluan($idsp)
    {
        $sql = "SELECT * FROM `binh_luan`
        join `tai_khoan` on `binh_luan`.`ma_tk` = `tai_khoan`.`ma_tk`
        ";
        if ($idsp != 0) {
            $sql .= " where `ma_sp`='$idsp' ORDER BY `ma_bl` DESC LIMIT 10 OFFSET 0 ";
        }
        $binhluan = pdo_query($sql);
        return $binhluan;
    }
}
if (!function_exists('insert_binhluan')) {

    function insert_binhluan($noidung, $idsp, $idkh, $date)
    {
        $sql = "INSERT INTO `binh_luan` (`noi_dung`, `ma_sp`, `ma_tk`, `ngay_bl`) VALUES ('$noidung', '$idsp','$idkh', '$date')";
        pdo_execute($sql);
    }
}
if (!function_exists('delete_binhluan')) {

    function delete_binhluan($id)
    {
        $sql = "DELETE FROM `binh_luan` WHERE `binh_luan`.`ma_bl` = '$id'";
        pdo_execute($sql);
    }
}
if (!function_exists('delete_binhluan_bySP')) {

    function delete_binhluan_bySP($id)
    {
        $sql = "DELETE FROM `binh_luan` WHERE `binh_luan`.`ma_sp` = '$id'";
        pdo_execute($sql);
    }
}
if (!function_exists('delete_binhluan_byKH')) {
    function delete_binhluan_byKH($id)
    {
        $sql = "DELETE FROM `binh_luan` WHERE `binh_luan`.`ma_tk` = '$id'";
        pdo_execute($sql);
    }
}