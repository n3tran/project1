<?php
include_once '../model/pdo.php';
include '../model/loai.php';
include '../model/sanpham.php';
include '../model/taikhoan.php';
include '../model/thuvienanh.php';
include '../model/binhluan.php';
include '../model/bienthe.php';
include '../model/donhang.php';
include '../model/thongke.php';
session_start();
include "header.php";

if (isset ($_GET['btn'])) {
   $btn = $_GET['btn'];
   switch ($btn) {
      // case 'home':
      //    include '../view/home.php';
      //    break;
      //CATERGORY
      case 'add_dm':
         if (isset ($_POST['add_new']) && $_POST['add_new']) {
            $tenloai = $_POST['tenloai'];
            if ($tenloai != "") {
               insert_danhmuc($tenloai);
               $thongbao = "Thêm thành công";
            } else {
               $error = "Tên loại không được để trống!";
            }
         }
         include "category/add_dm.php";
         break;
      case 'list_dm':
         $list_dm = loadall_danhmuc();
         include "category/list_dm.php";
         break;
      case 'delet_dm':
         if (isset ($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {
            delete_danhmuc($_GET['ma_loai']);
         }
         $list_dm = loadall_danhmuc();
         include "category/list_dm.php";
         break;
      case 'edit':
         if (isset ($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {
            $dm = loadone_danhmuc($_GET['ma_loai']);
         }
         include "category/update_dm.php";
         break;
      case 'update':
         if (isset ($_POST['update_new']) && ($_POST['update_new'])) {
            $ma_loai = $_POST['ma_loai'];
            $name_dm = $_POST['name_dm'];
            update_danhmuc($ma_loai, $name_dm);
            $thong_bao = "Cập nhật thành công";
         }
         $list_dm = loadall_danhmuc();
         include "category/list_dm.php";
         break;

      //PRODUCTS
      case 'add_sp':
         if (isset ($_POST['add_new']) && ($_POST['add_new'])) {
            $ten_sp = $_POST['ten_sp'];
            $iddm = $_POST['id_loai'];
            $gia_sp = $_POST['gia_sp'];
            // $size= $_POST['size'];
            $mota = $_POST['mo_ta'];
            $date = date("y-d-m");
            $filename = $_FILES['img']['name'];
            $target_dir = '../img/';
            $target_file = $target_dir . basename($_FILES['img']['name']);
            if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
               //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            } else {
               //echo "Sorry, there was an error uploading your file.";
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
               $errors = [];
               if (empty (trim($ten_sp))) {
                  $errors = "Không được để trống";
               }
               if (empty (trim($gia_sp))) {
                  $errors = "Không được để trống";
               }
               if (empty (trim($filename))) {
                  $errors = "Không được để trống";
               }
               if (empty (trim($mota))) {
                  $errors = "Không được để trống";
               }
            }
            if (empty ($errors)) {
               insert_sanpham($ten_sp, $gia_sp, $filename, $iddm, $mota, $date);
               $thong_bao = "Thêm sản phẩm thành công";
            }
         }
         $list_sp = loadAll_spadmin();
         $list_dm = loadall_danhmuc();
         include "products/page_sp.php";
         break;
      case 'list_sp':
         $list_dm = loadall_danhmuc();
         if (isset ($_POST['kyw']) && isset ($_POST['chon_dm'])) {
            $kyw = $_POST['kyw'];
            $chon_dm = $_POST['chon_dm'];
            $list_sp = loadAll_sanpham_chondm($kyw, $chon_dm);
            $dm = loadone_danhmuc($chon_dm);
         } else {
            $kyw = '';
            $chon_dm = '';
            $list_sp = loadAll_spadmin();
         }
         include "products/list_sp.php";
         break;

      case 'edit_sp':
         $list_dm = loadall_danhmuc();
         if (isset ($_GET['id']) && ($_GET['id'] > 0)) {
            $list_sp = loadOne_sanpham($_GET['id']);
         }
         include "products/update_sp.php";
         break;
      case 'update_sp':
         $list_dm = loadall_danhmuc();
         if (isset ($_POST['update_new']) && ($_POST['update_new'])) {
            $list_sp = loadOne_sanpham($_POST['ma_sp']);
            $ma_sp = $_POST['ma_sp'];
            $ten_sp = $_POST['ten_sp'];
            $iddm = $_POST['id_loai'];
            $gia_sp = $_POST['gia_sp'];
            $mota = $_POST['mo_ta'];

            $target_dir = '../img/';
            $name = [];
            $tmp = [];
            foreach ($_FILES['img']['name'] as $file) {
               $name[] = $file;
            }
            foreach ($_FILES['img']['tmp_name'] as $file) {
               $tmp[] = $file;
            }
            for ($i = 0; $i < count($name); $i++) {
               $target_file = $target_dir . basename($name[$i]);
               if (move_uploaded_file($tmp[$i], $target_file)) {
                  insert_anh_thuvien($ma_sp, $name[$i]);
               }
            }

            update_sanpham($ma_sp, $ten_sp, $gia_sp, $name[0], $iddm, $mota);
            if (isset ($_POST['size']) && !empty ($_POST['size'])) {
               $size = $_POST['size'];
               $soluong = $_POST['so_luong_size'];
               for ($i = 0; $i < sizeof($_POST['size']); $i++) {
                  insert_bienthe($ma_sp, $size[$i], $soluong[$i]);
               }
            }
         }
         $list_sp = loadAll_spadmin();
         include "products/list_sp.php";
         break;
      case 'del_sp':
         if (isset ($_GET['id']) && ($_GET['id'] > 0)) {
            delete_sanpham($_GET['id']);
         }
         $list_sp = loadAll_spadmin();
         include "products/list_sp.php";
         break;
      //USER
      case 'page_kh':
         if (isset ($_SESSION['user'])) {
            $thong_bao = 'hidden';
         }
         $list_user = loadall_taikhoan();
         include "user/list_kh.php";
         break;
      case 'edit_user':
         if (isset ($_GET['ma_tk']) && ($_GET['ma_tk'] > 0)) {
            $user = loadone_taikhoan_byID($_GET['ma_tk']);
         }
         include "user/update_tk.php";
         break;
      case 'update_user':
         if (isset ($_POST['update_tk']) && ($_POST['update_tk'])) {
            $email = $_POST['email'];
            $name = $_POST['name_tk'];
            $phone = $_POST['phone'];
            $pass = $_POST['pass_word'];
            $address = $_POST['address'];
            $vai_tro = $_POST['vai_tro'];
            $_SERVER['user'] = check_acount($email, $pass);
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
               if ($vai_tro > 1) {
                  $errors = "Vui lòng chọn lại vai trò ";
               }
            }
            $ma_tk = $_POST['ma_tk'];
            if (empty ($errors)) {
               update_taikhoan($ma_tk, $name, $pass, $email, $phone, $address, $vai_tro);
               $_SESSION['user'] = check_acount($email, $pass);
               $thong_bao = "Cập nhật thành công";
            }
         }
         if (isset ($_SESSION['user'])) {
            $thong_bao = 'hidden';
         }
         $list_user = loadall_taikhoan();
         include "user/list_kh.php";
         break;
      case 'delete_user':
         if (isset ($_GET['ma_tk']) && ($_GET['ma_tk'])) {
            if ($_GET['ma_tk'] == $_SESSION['user']['ma_tk']) {
               delete_taikhoan($_GET['ma_tk']);
            }
         }
         if (isset ($_SESSION['user'])) {
            $thong_bao = 'hidden';
         }
         $list_user = loadall_taikhoan();
         include "user/list_kh.php";
         break;
      case 'page_bl':
         $tk_bl = loadall_binhluan(0);
         include "comment/list_bl.php";
         break;
      case 'del_bl':
         if (isset ($_GET["id"]) && $_GET["id"] != "") {
            delete_binhluan($_GET["id"]);
            $tk_bl = thongke_binhluan();
            $thong_bao = "Bạn đã xóa thành công";
            include "comment/list_bl.php";
         } else {
            $tk_bl = thongke_binhluan();
            include "comment/list_bl.php";
         }
         break;
      //Statistical
      case 'page_tk':
         $statistics = loadall_statistics();
         $doanhthu = doanhthu();
         include "statistical/statistical.php";
         break;
      // case 'chart':
      //    $statistics = loadall_statistics();
      //    include "statistical/chart.php";
      //    break;
      //ORDER
      case 'page_dh':
         $donhang = loadall_donhang();
         include "order/order.php";
         break;
      case 'dh_ht':
         $donhang = donhang_hoanthanh();
         include "order/order.php";
         break;
      case 'trangthai_dh':
         if (isset ($_POST['edit_dh']) && $_POST['edit_dh']) {
            $ma_order = $_POST['ma_dh'];
            $trangthai = $_POST['trangthai'];
            $date_update = date("y-m-d");
            for ($i = 0; $i < sizeof($ma_order); $i++) {
               update_trangthai($trangthai[$i], $ma_order[$i], $date_update);
            }
            $thong_bao = "Cập nhật thành công";
            $donhang = loadall_donhang();
            include "order/order.php";
         } else {
            $donhang = loadall_donhang_update();
            include "order/order_edit.php";
         }
         break;
      case 'chitiet_dh':
         if (isset ($_GET['idct']) && $_GET['idct']) {
            $id = $_GET['idct'];
            $dh = loadone_donhang($id);
            include "order/order_ct.php";
         }

         break;
      case 'xoa_dh':
         if (isset ($_GET['id']) && $_GET['id']) {
            $id = $_GET['id'];
            delete_donhang_ct($id);
            delete_donhang($id);
            $donhang = loadall_donhang();
            include "order/order.php";
         }

         break;
      default:
         include "home.php";
         break;
   }
} else {
   include "home.php";
}
include "footer.php";
