<?php
if (!function_exists('loadall_taikhoan')) {

    function loadall_taikhoan()
    {
        $sql = "SELECT * FROM `tai_khoan` order by `ma_tk` ";
        $khachhang = pdo_query($sql);
        return $khachhang;
    }
}
if (!function_exists('insert_taikhoan')) {

    function insert_taikhoan($name, $email, $pass, $phone, $address,$province,$district,$wards)
    {
        $sql = "INSERT INTO `tai_khoan`( `ho_ten`, `email`, `mat_khau`, `sdt`, `dia_chi`, `province_id`,`district_id`,`wards_id` ) VALUES ('$name','$email','$pass','$phone','$address',' $province','$district','$wards') " ;
        pdo_execute($sql);
    }
}
if (!function_exists('loadone_taikhoan')) {

    function loadone_taikhoan($id)
    {
        $sql = "SELECT * FROM `tai_khoan`where ma_tk = $id ";

        $sp = pdo_query_one($sql);
        return $sp;
    }
}
if (!function_exists('update_taikhoan')) {

    function update_taikhoan($ma_tk, $name, $pass, $email, $phone, $address, $vai_tro,$province,$district,$wards)
    {
        $sql = "UPDATE `tai_khoan` SET `ho_ten`='$name',`email`='$email',`mat_khau`='$pass',`sdt`='$phone',`dia_chi`='$address',`vai_tro` = '$vai_tro',`province_id`='$province',`district_id`='$district',`wards_id`='$wards' WHERE `ma_tk`='$ma_tk'";
        pdo_execute($sql);
    }
}
if (!function_exists('loadone_taikhoan_byID')) {

    function loadone_taikhoan_byID($id)
    {
        $sql = "SELECT * FROM `tai_khoan`where `ma_tk`='$id'";
        $kh = pdo_query_one($sql);
        return $kh;
    }
}
if (!function_exists('delete_taikhoan')) {

    function delete_taikhoan($id)
    {
        $sql = "DELETE FROM `binh_luan` WHERE `ma_tk` = " . $id;
        pdo_execute($sql);
        $sql1 = "DELETE FROM `tai_khoan` WHERE `ma_tk` = " . $id;
        pdo_execute($sql1);
    }
}
if (!function_exists('check_acount')) {

    function check_acount($email, $pass)
    {
        $sql = "SELECT * FROM  `tai_khoan` WHERE `email`='" . $email . "' AND `mat_khau`='" . $pass . "'";
        $kh = pdo_query_one($sql);
        return $kh;
    }
}
if (!function_exists('check_email')) {
    function check_email($email)
    {
        $sql = "SELECT * FROM `tai_khoan` WHERE `email` = '" . $email . "' ";
        $kh = pdo_query_one($sql);
        return $kh;
    }
}
if (!function_exists('update_mk')) {
    function update_mk($id, $pass_word)
    {
        $sql = "UPDATE `tai_khoan` SET `mat_khau`='$pass_word' WHERE `ma_tk` =" . $id;
        pdo_execute($sql);
    }
}
function name_province( $province){
    $sql= "SELECT * FROM `province` WHERE province_id = ". $province;
    $kh = pdo_query_one($sql);
    return $kh;
}
function name_district( $district){
    $sql= "SELECT * FROM `district` WHERE district_id =". $district;
    $kh = pdo_query_one($sql);
    return $kh;
}
function name_wards( $wards){
    $sql= "SELECT * FROM `wards` WHERE wards_id =". $wards;
    $kh = pdo_query_one($sql);
    return $kh;
}

// SELECT province.name, district.name, wards.name FROM province LEFT JOIN district ON province.province_id = district.province_id LEFT JOIN wards on district.district_id = wards.d