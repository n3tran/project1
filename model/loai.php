<?php
if (!function_exists('loadall_danhmuc')) {
    function loadall_danhmuc()
    {
        $sql = "SELECT * FROM `loai`  where `ma_loai` != 50 order by `ma_loai`  desc";
        $danhmuc = pdo_query($sql);
        return $danhmuc;
    }
}

if (!function_exists('insert_danhmuc')) {

    function insert_danhmuc($tenloai)
    {
        $sql = "INSERT INTO `loai` (`ten_loai`) VALUES ('$tenloai')";
        pdo_execute($sql);
    }
}
if (!function_exists('delete_danhmuc')) {

    function delete_danhmuc($id)
    {
        $sql = "UPDATE `san_pham` SET `ma_loai`='54'WHERE `ma_loai` = " . $id;
        pdo_execute($sql);
        $sql1 = "DELETE FROM `loai` WHERE `ma_loai` = " . $id;
        pdo_execute($sql1);
    }
}
if (!function_exists('update_danhmuc')) {

    function update_danhmuc($ma_loai, $name_dm)
    {
        $sql = "UPDATE `loai` SET `ten_loai` = '" . $name_dm . "' WHERE `loai`.`ma_loai` =" . $ma_loai;
        pdo_execute($sql);
    }
}
if (!function_exists('loadone_danhmuc')) {

    function loadone_danhmuc($id)
    {
        $sql = "SELECT * FROM `loai` where `ma_loai`=" . $id;
        $dm = pdo_query_one($sql);
        return $dm;

    }

}
?>