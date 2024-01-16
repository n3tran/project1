<?php
if (!function_exists('loadall_donhang')) {
    function loadall_donhang()
    {
        $sql = "SELECT *  FROM `don_hang` 
                group by ma_order";
        $donhang = pdo_query($sql);
        return $donhang;
    }
}
if (!function_exists('so_luong_sp')) {
    function so_luong_sp($id)
    {
        $sql = "SELECT sum(soluong) as tong  FROM `don_hang_chitiet` where ma_order = $id  group by ma_order";
        $donhang = pdo_query_one($sql);
        return $donhang;
    }
}
if (!function_exists('filter_sl')) {
    function filter_sl($id)
    {
        $sql = "SELECT sum(soluong) as tong  FROM `don_hang_chitiet` where ma_order = $id group by ma_order";
        $donhang = pdo_query($sql);
        return $donhang;
    }
}
if (!function_exists('loadone_donhang')) {
    function loadone_donhang($id)
    {
        $sql = "SELECT * FROM `don_hang_chitiet` 
        join `san_pham` on `san_pham`.`ma_sp` = `don_hang_chitiet`.`ma_sp`
        join `loai` on `loai`.`ma_loai` = `san_pham`.`ma_loai`
        where `ma_order` = '$id'";
        $donhang = pdo_query($sql);
        return $donhang;
    }
}
if (!function_exists('size_sp')) {
    function size_sp($id)
    {
        $sql = "SELECT size FROM `don_hang_chitiet` 
        where `ma_order_ct` = '$id'";
        $donhang = pdo_query_one($sql);
        return $donhang;
    }
}
if (!function_exists('load_dh_dt')) {
    function load_dh_dt($ma_tk)
    {
        $sql = "SELECT * FROM `don_hang` WHERE ma_tk ='$ma_tk' ORDER BY `ma_order` DESC";
        $donhang = pdo_query($sql);
        return $donhang;
    }
}
if (!function_exists('insert_donhang')) {

    function insert_donhang($ho_ten, $email, $sdt, $dia_chi, $ghi_chu, $don_gia, $date_order, $trang_thai,$ma_tk)
    {
        $conn = pdo_get_connection();
        $sql = "INSERT INTO `don_hang` (`ho_ten`, `email`, `sdt`, `dia_chi`, `ghi_chu`,`don_gia`,`ngay_dat`,`trang_thai`,`ma_tk`)
         VALUES ('$ho_ten', '$email', '$sdt', '$dia_chi', '$ghi_chu','$don_gia','$date_order','$trang_thai','$ma_tk')";
        $conn->exec($sql);
        $id = $conn->lastInsertId();
        $conn = null;
        return $id;
    }
}
if (!function_exists('insert_donhang_ct')) {

    function insert_donhang_ct($ma_dh, $ma_sp, $gia_sp,$size, $so_luong, $thanh_tien)
    {
        $sql = "INSERT INTO `don_hang_chitiet` (`ma_order`, `ma_sp`, `gia_sp`,`size`, `soluong`,`thanhtien`)VALUES ('$ma_dh', '$ma_sp', '$gia_sp','$size', '$so_luong', '$thanh_tien')";
        pdo_execute($sql);
    }
}

if (!function_exists('filter_donhang')) {
    function filter_donhang($id)
    {
        $sql = "SELECT *,sum(soluong) tong,sum(thanhtien) tt FROM `don_hang`
                join `don_hang_chitiet` on `don_hang_chitiet`.`ma_order` = `don_hang`.`ma_order`
                where `trang_thai` = $id ";
        $donhang = pdo_query($sql);
        return $donhang;
    }
}
if (!function_exists('delete_donhang')) {

    function delete_donhang($id)
    {
        $sql = "DELETE FROM `don_hang` WHERE `ma_order` = '$id'";
        pdo_execute($sql);
    }
}
if (!function_exists('delete_donhang_ct')) {

    function delete_donhang_ct($id)
    {
        $sql = "DELETE FROM `don_hang_chitiet` WHERE `ma_order` = '$id'";
        pdo_execute($sql);
    }
}
if (!function_exists('update_trangthai')) {
    function update_trangthai($trangthai, $ma_order, $date_update)
    {
        $sql = "UPDATE `don_hang` SET `trang_thai` = '" . $trangthai . "', `ngay_update` = '" . $date_update . "' WHERE `don_hang`.`ma_order` =" . $ma_order;
        pdo_execute($sql);
    }
}
function trangthai_donhang($trangthai)
{
    if ($trangthai == 2) {
        echo "Đã xác nhận";

    } elseif ($trangthai == 3) {
        echo "Đang giao hàng";

    } elseif ($trangthai == 4) {
        echo "Hoàn thành";

    } elseif ($trangthai == 1) {
        echo "Chờ xác nhận";

    } else {
        echo "";
    }
}
if (!function_exists('update_dh')) {
    function update_dh()
    {
        $sql = "SELECT *  FROM `don_hang`  where `trang_thai` != 4
                group by ma_order";
        $donhang = pdo_query($sql);
        return $donhang;
    }
}
?>