<?php
if (!function_exists('loadall_thongke')) {

    function loadall_statistics()
    {
        $sql = "SELECT `loai`.`ma_loai` as id_loai, loai.ten_loai as name_loai, 
        sum(don_hang_chitiet.gia_sp) as tongtien, 
        count(san_pham.ma_sp) as sl, 
        min(don_hang_chitiet.gia_sp) as min_sp, 
        max(don_hang_chitiet.gia_sp) as max_sp";
        $sql .= " FROM don_hang_chitiet";
        $sql .= " JOIN don_hang on don_hang_chitiet.ma_order = don_hang.ma_order";
        $sql .= " JOIN san_pham on don_hang_chitiet.ma_sp = san_pham.ma_sp";
        $sql .= " join loai on loai.ma_loai = san_pham.ma_loai";
        $sql .= " where `don_hang`.`trang_thai`=4  GROUP BY loai.ma_loai ORDER BY loai.ma_loai desc";
        $list_thongke = pdo_query($sql);
        return $list_thongke;
    }
}
if (!function_exists('doanhThu')) {

    function doanhThu()
    {
        $sql = "SELECT sum(don_hang_chitiet.gia_sp) as doanhthu from `don_hang_chitiet`
        JOIN don_hang on don_hang_chitiet.ma_order = don_hang.ma_order
        where `don_hang`.`trang_thai`=4 
        ";
        $doanhthu = pdo_query($sql);
        return $doanhthu;
    }
}
// function loadall_statistics()
// {
//     $sql = " select categories.id_dm as id_dm, categories.name_dm as name_dm, count(produsts.id_sp) as countsp, min(produsts.price) as minprice, max(produsts.price) as maxprice, avg(produsts.price) as avgprice ";
//     $sql .= " from produsts left join categories on categories.id_dm = produsts.id_dm ";
//     $sql .= " group by categories.id_dm order by categories.id_dm desc ";
//     $listtk = pdo_query($sql);
//     return $listtk;
// }

?>