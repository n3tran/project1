<?php

if (!function_exists('loadAll_sanpham')) {

    function loadAll_sanpham()
    {
        $sql = "SELECT * FROM `san_pham`
        where 1 order by `ma_sp` desc limit 0,10";
        $sanpham = pdo_query($sql);
        return $sanpham;
    }
}
if (!function_exists('loadAll_spadmin')) {

    function loadAll_spadmin($sp_page,$offset)
    {
        $sql = "SELECT * FROM `san_pham`
        join loai on `loai`.`ma_loai` = `san_pham`.`ma_loai`
      
        where 1 ORDER BY `ma_sp` DESC LIMIT $sp_page OFFSET  ".$offset;
        $sanpham = pdo_query($sql);
        return $sanpham;
    }
}
if (!function_exists('loadAll_product')) {

    function loadAll_product()
    {
        $sql = "SELECT * FROM `san_pham`
        join loai on `loai`.`ma_loai` = `san_pham`.`ma_loai`
      
        where 1 ORDER BY `ma_sp` DESC LIMIT 9 OFFSET  0";
        $sanpham = pdo_query($sql);
        return $sanpham;
    }
}
if (!function_exists('sum')) {

    function sum($id)
    {
        $sql = "SELECT sum(soluong) sl FROM `bien_the`
        where ma_sp = '$id' group by ma_sp";
        $sum = pdo_query_one($sql);
        return $sum;
    }
}

if (!function_exists('loadAll_sanpham_chondm')) {

    function loadAll_sanpham_chondm($kyw, $dm)
    {
        $sql = "SELECT * FROM `san_pham`
        where 1";
        if ($kyw != "") {
            $sql .= " and ten_sp like '%" . $kyw . "%'";
        }
        if ($dm > 0) {
            $sql .= " and ma_loai = '" . $dm . "'";
        }
        $sql .= "ORDER BY `ma_sp` ASC LIMIT 9 OFFSET 0 ";
        $sanpham = pdo_query($sql);
        return $sanpham;
    }
}
if (!function_exists('loadAll_sanpham_top10')) {

    function loadAll_sanpham_top10()
    {
        $sql = "SELECT * FROM `san_pham` where 1 order by `so_luot_xem` desc limit 0,10";
        $sanpham = pdo_query($sql);
        return $sanpham;
    }
}
if (!function_exists('loadAll_sanpham_listdm')) {

    function loadAll_sanpham_listdm($kyw, $dm)
    {
        $sql = "SELECT * FROM `san_pham` where 1";
        if (!$kyw = "") {
            $sql .= " and ten_sp like '%" . $kyw . "%'";
        }
        if (!$dm = "") {
            $sql .= " and ma_loai = '.$dm.'";
        }
        $sql .= " order by `ma_sp` desc ";
        $sanpham = pdo_query($sql);
        return $sanpham;
    }
}
if (!function_exists('filter_sp_key')) {

    function filter_sp_key($kyw)
    {
        $sql = "SELECT * FROM `san_pham` where ten_sp like '%$kyw%' order by `ma_sp` desc ";
        $sanpham = pdo_query($sql);
        return $sanpham;
    }
}
if (!function_exists('loadAll_sanpham_dm')) {

    function loadAll_sanpham_dm($iddm)
    {
        $sql = "SELECT * FROM `san_pham` where 1 and ma_loai = $iddm order by `ma_sp` desc  ";
        $sanpham = pdo_query($sql);
        return $sanpham;
    }
}
if (!function_exists('loadAll_sanpham_dm_dt')) {

    function loadAll_sanpham_dm_dt($iddm, $id_sp)
    {
        $sql = "SELECT * FROM `san_pham` where 1 and ma_loai = $iddm and ma_sp != $id_sp order by `ma_sp` desc  ";
        $sanpham = pdo_query($sql);
        return $sanpham;
    }
}

if (!function_exists('insert_sanpham')) {

    function insert_sanpham($tensp, $dongia, $hinh, $loai, $mota, $date)
    {
        $sql = "INSERT INTO `san_pham` (`ten_sp`, `gia_sp`, `hinh_sp`, `ma_loai`, `mo_ta`,`ngay_nhap`) VALUES ('$tensp', '$dongia', '$hinh', '$loai', '$mota','$date')";
        pdo_execute($sql);
    }
}
if (!function_exists('update_slx')) {

    function update_slx($id)
    {
        $sql = "UPDATE `san_pham` SET `so_luot_xem` = `so_luot_xem` + 1  WHERE `san_pham`.`ma_sp` ='$id'";
        pdo_execute($sql);
    }
}
if (!function_exists('update_sl_sp')) {

    function update_sl_sp($ma_sp, $size, $so_luong)
    {
        $sql = "UPDATE `bien_the` SET `soluong` = `soluong` - $so_luong  WHERE `ma_sp` ='$ma_sp' and `size` = '$size'";
        pdo_execute($sql);
    }
}
if (!function_exists('delete_sanpham')) {

    function delete_sanpham($ma_sp)
    { 
        $sql = "DELETE FROM `thu_vien_anh` WHERE `ma_sp`=" . $ma_sp;
        pdo_execute($sql);
        $sql2 = "DELETE FROM `bien_the` WHERE `ma_sp` =" . $ma_sp;
        pdo_execute($sql2);
        $sql3 = "DELETE FROM `binh_luan` WHERE `ma_sp` = " .$ma_sp;
        pdo_execute($sql3);
        $sql1 = "DELETE FROM `san_pham` WHERE `ma_sp` =" . $ma_sp;
        pdo_execute($sql1);
       
    }
}
if (!function_exists('update_sanpham')) {

    function update_sanpham($id, $tensp, $dongia, $hinh, $loai, $mota)
    {
        if ($hinh != "") {
            $sql = "UPDATE `san_pham` SET `ten_sp` = '$tensp', `gia_sp` = '$dongia',`ma_loai` = $loai, `hinh_sp` = '$hinh', `mo_ta` = '$mota' WHERE `san_pham`.`ma_sp` = '$id'";
        } else {
            $sql = "UPDATE `san_pham` SET `ten_sp` = '$tensp', `gia_sp` = '$dongia',`ma_loai` = $loai, `mo_ta` = '$mota' WHERE `san_pham`.`ma_sp` = '$id'";
        }
        pdo_execute($sql);
    }
}
if (!function_exists('loadOne_sanpham')) {

    function loadOne_sanpham($id)
    {
        $sql = "SELECT * FROM `san_pham`  where `ma_sp` = '$id'";
        $sanpham = pdo_query_one($sql);
        return $sanpham;
    }
}
if (!function_exists('loadSize_sanpham')) {

    function loadSize_sanpham($id)
    {
        $sql = "SELECT `size` FROM `san_pham` order by `ma_sp` where `ma_sp` = '$id'";
        $sanpham = pdo_query($sql);
        return $sanpham;
    }
}
if (!function_exists('loadAnh_sanpham')) {

    function loadAnh_sanpham($id)
    {
        $sql = "SELECT `thu_vien`.`anh` FROM `san_pham` 
    join `thu_vien` on `thu_vien`.`ma_sp` =  `san_pham`.`ma_sp`
    order by `ma_sp` where `ma_sp` = '$id''";
        $sanpham = pdo_query($sql);
        return $sanpham;
    }
}
if (!function_exists('loadsize_sp')) {

    function loadSanpham_size($id, $dm)
    {
        $sql = "SELECT * FROM `san_pham` 
        join `bien_the` on `bien_the`.`ma_sp` =  `san_pham`.`ma_sp`
         where bien_the.size = $id ";
        if ($dm > 0) {
            $sql .= " and san_pham.ma_loai  = $dm";
        }
        $sql .= " order by `san_pham`.`ma_sp`;";
        $sanpham = pdo_query($sql);
        return $sanpham;
    }
}

if (!function_exists('load_name_dm')) {

    function load_name_dm($ma_loai)
    {
        if ($ma_loai > 0) {
            $sql = "select * from san_pham where ma_loai=" . $ma_loai;
            $dm = pdo_query_one($sql);
            extract($dm);
            return $ten_loai;
        } else {
            return "";
        }
    }
}
if (!function_exists('filter_price')) {

    function filter_price($value)
    {
        $sql = "SELECT * FROM `san_pham`
        join loai on `loai`.`ma_loai` = `san_pham`.`ma_loai`
        where 1 ";
        if ($value == 2) {
            $sql .= " ORDER BY `gia_sp` desc ";
        } elseif ($value == 1) {
            $sql .= " ORDER BY `gia_sp`  ";
        }
        $sanpham = pdo_query($sql);
        return $sanpham;
    }
}
