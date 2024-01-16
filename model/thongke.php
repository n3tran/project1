<?php
if (!function_exists('loadall_thongke')) {

    function loadall_statistics()
    {
        $sql = "SELECT `loai`.`ma_loai` as id_loai, loai.ten_loai as name_loai, count(san_pham.ma_sp) as count_sp, min(san_pham.gia_sp) as min_sp, max(san_pham.gia_sp) as max_sp, avg(san_pham.gia_sp) as avg_sp ";
        $sql .= " FROM san_pham LEFT JOIN loai on loai.ma_loai = san_pham.ma_loai";
        $sql .= " GROUP BY loai.ma_loai ORDER BY loai.ma_loai desc";
        $list_thongke = pdo_query($sql);
        return $list_thongke;
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