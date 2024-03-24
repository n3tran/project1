<?php
function loadall_banner()
{
    $sql = "SELECT * FROM `banner` order by `ma_banner` ";
    $banner = pdo_query($sql);
    return $banner;
}
function insert_banner($tieude, $hinh_banner)
{
    $sql = "INSERT INTO `banner` (`tieu_de`,`hinh_banner`) VALUES ('$tieude','$hinh_banner')";
    pdo_execute($sql);
}
function delete_banner($id)
{
    $sql = "DELETE FROM banner WHERE `banner`.`ma_banner` = '$id'";
    pdo_execute($sql);
}

function update_banner($id, $tieude)
{
    $sql = "UPDATE `banner` SET `ten_loai` = '$tieude' WHERE `banner`.`ma_banner` = '$id'";
    pdo_execute($sql);
}

function loadone_banner($id)
{
    $sql = "SELECT * FROM `banner`where `ma_banner`='$id'";
    $bn = pdo_query_one($sql);
    return $bn;
}
?>