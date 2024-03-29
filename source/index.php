<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include "model/pdo.php";
include "model/loai.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/thongke.php";
include "model/binhluan.php";
include "model/thuvienanh.php";
include "model/bienthe.php";
include "model/donhang.php";
include "view/header.php";
$spnew = loadAll_sanpham();
$dsdm = loadall_danhmuc();
$sptop10 = loadAll_sanpham_top10();
if (isset ($_GET['btn']) && ($_GET['btn'] != "")) {
    $btn = $_GET['btn'];
    switch ($btn) {
        case 'home':
            include "view/home.php";
            break;
        //SEACH 

        //Acount
        case 'my_account':
            include "view/account/account.php";
            break;
        case 'edit_password':
            include "view/account/edit_password.php";
            break;
        case 'update_pass':
            if (isset ($_POST['update_pw']) && ($_POST['update_pw'])) {
                $id = $_SESSION['user']['ma_tk'];
                $mk = loadone_taikhoan($id);
                $mk_cu = $_POST['pass_word_old'];
                $mk_moi = $_POST['new_pass_word'];
                $mk_nl = $_POST['pass_word'];
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $errors = [];
                    if (empty ($mk_cu)) {
                        $errors['pass_word_cu'] = "Không được để trống";
                    } elseif ($mk_cu != $mk['mat_khau']) {
                        $errors['pass_word_cu'] = "Sai mật khẩu";
                    }
                    if (empty ($mk_moi) && empty ($mk_nl)) {
                        $errors['pass_word_moi'] = "Không được để trống";
                    }
                    if ($mk_nl !== $mk_moi) {
                        $errors['pass_word_moi'] = "Mật Khẩu Bạn Nhâp Không Khớp";
                    }
                }
                if (empty ($errors)) {
                    update_mk($id, $mk_moi);
                    $thong_bao = "<script>alert('Đổi mật khẩu Thành Công 😆😆😆');</script>";
                    $_SESSION['user']['mat_khau'] = $mk_moi;
                }
            }
            include "view/account/edit_password.php";
            break;
        case 'sign_up':
            if (isset ($_POST['add_tk']) && ($_POST['add_tk'])) {
                $email = $_POST['email'];
                $name = $_POST['name_tk'];
                $phone = $_POST['phone'];
                $pass = $_POST['pass_word'];
                $city = $_POST['city'];
                $ward = $_POST['ward'];
                $district = $_POST['district'];
                $neighborhood = $_POST['address'];
                $address = $neighborhood . ',' . $ward . ',' . $district . ',' . $city;
                $tk = check_email($email);
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $errors = [];
                    if (empty (trim($email))) {
                        $errors['email'] = "Không được để trống ⚠";
                    } else {
                        if (!filter_var(trim($email), FILTER_VALIDATE_EMAIL)) {
                            $errors['email'] = "Email không hợp lệ ⚠";
                        } else if (isset ($tk) && $tk != "") {
                            $errors['email'] = "Email đã tồn tại  ⚠";
                        }
                    }

                    if (empty (trim($name))) {
                        $errors['name_tk'] = "Không được để trống ⚠";
                    }
                    if (empty ($phone)) {
                        $errors['phone'] = "Không được để trống ⚠";
                    } else {
                        if (!preg_match('/^[0-9]{10}+$/', $phone)) {
                            $errors['phone'] = "Số điện thoại không đúng";
                        }
                    }
                    if (empty ($pass)) {
                        $errors['pass_word'] = "Không được để trống ⚠ ";
                    }

                    if (empty ($city)) {
                        $errors['address'] = "Không được để trống ⚠ ";
                    }
                    if (empty ($district)) {
                        $errors['address'] = "Không được để trống ⚠ ";
                    }
                    if (empty ($ward)) {
                        $errors['address'] = "Không được để trống ⚠ ";
                    }
                    if (empty ($neighborhood)) {
                        $errors['address'] = "Không được để trống ⚠ ";
                    }

                    if (empty ($errors)) {
                        insert_taikhoan($name, $email, $pass, $phone, $address);
                        $thong_bao = "Bạn Đã Đăng Ký Thành Công 😆😆😆";
                    }
                }
            }
            include "view/account/sign_up.php";
            break;
        case 'sign_in':
            if (isset ($_POST['signin']) && ($_POST['signin'])) {
                $email = $_POST['email'];
                $pass = $_POST['password'];
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $errors = [];
                    if (empty (trim($email))) {
                        $errors['email'] = "Không được để trống ⚠";
                    } else {
                        if (!filter_var(trim($email), FILTER_VALIDATE_EMAIL)) {
                            $errors['email'] = "Email không hợp lệ ⚠";
                        }
                    }
                    if (empty ($pass)) {
                        $errors['pass_word'] = "Không được để trống ⚠ ";
                    }
                }
                $check_acount = check_acount($email, $pass);
                if (empty ($errors)) {
                    if (is_array($check_acount)) {
                        $_SESSION['user'] = $check_acount;
                        header('Location:index.php');
                    } else {
                        $thong_bao = "Tài khoản không tồn tại !!!";
                    }
                }
            }
            include "view/account/sign_in.php";
            break;
        case 'forgot_password':
            if (isset ($_POST['send']) && ($_POST['send'])) {
                $email = $_POST['email'];
                $errors = [];
                if (empty (trim($email))) {
                    $errors['email'] = "<p class='error'>Không được để trống ⚠</p>";
                } else {
                    if (!filter_var(trim($email), FILTER_VALIDATE_EMAIL)) {
                        $errors['email'] = "<p class='error'>Email không hợp lệ ⚠</p>";
                    } else {
                        $check_email = check_email($email);
                        if (is_array($check_email) && $check_email != "") {
                            require 'mail/PHPMailer/src/Exception.php';
                            require 'mail/PHPMailer/src/PHPMailer.php';
                            require 'mail/PHPMailer/src/SMTP.php';
                            // Instantiation and passing `true` enables exceptions
                            $mail = new PHPMailer(true);
                            //Server settings
                            // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
                            $mail->isSMTP(); // gửi mail SMTP
                            $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
                            $mail->SMTPAuth = true; // Enable SMTP authentication
                            $mail->Username = 'truongan2k2tb@gmail.com'; // SMTP username
                            $mail->Password = 'ynfxtxppdskpkpic'; // SMTP password
                            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
                            $mail->Port = 587; // TCP port to connect to
                            //Recipients
                            $mail->setFrom('truongan2k2tb@gmail.com', 'Shop Sneakers');
                            $mail->addAddress($email, $check_email['ho_ten']); // Add a recipient
                            // Content
                            $mail->isHTML(true); // Set email format to HTML
                            $mail->Subject = 'Forgot password';
                            $mail->Body = ' Xin chào ' . $check_email['ho_ten'] . '.<br>
                            Mật khẩu đăng nhập của bạn là: <b>' . $check_email['mat_khau'] . ' </b>';
                            $mail->send();
                            $thong_bao = "<p class='fg_pass'>Chúng tôi đã gửi mật khẩu của bạn đến $email.</p>";
                        } else {
                            $thong_bao = "<p class='error'>Email này không tồn tại !</p>";
                        }
                    }
                }

                include "view/account/fogot.php";
            } else {
                include "view/account/fogot.php";
            }
            break;
        case 'edit_acount':
            if (isset ($_POST['update_tk']) && ($_POST['update_tk'])) {
                $email = $_POST['email'];
                $name = $_POST['name_tk'];
                $phone = $_POST['phone'];
                $pass = $_POST['pass_word'];
                $address = $_POST['address'];
                $vai_tro = $_POST['vai_tro'];
                $ma_tk = $_POST['ma_tk'];
                update_taikhoan($ma_tk, $name, $pass, $email, $phone, $address, $vai_tro);
                $_SESSION['user'] = check_acount($email, $pass);
                header("Location: index.php?btn=edit_acount");
            }

            include "view/account/account.php";
            break;
        case 'exit':
            session_unset();
            header('Location:index.php');
        //product
        case 'product':
            $list_dm = loadall_danhmuc();
            $list_sp = loadAll_spadmin();

            if (isset ($_GET['iddm']) && ($_GET['iddm']) > 0) {
                $list_sp = loadAll_sanpham_dm($_GET['iddm']);
                $laydm = loadone_danhmuc($_GET['iddm']);
            }
            if (isset ($_GET['size']) && ($_GET['size']) > 0) {
                if (isset ($_GET['iddm']) && ($_GET['iddm']) > 0) {
                    $list_sp = loadSanpham_size($_GET['size'], $_GET['iddm']);
                } else {
                    $list_sp = loadSanpham_size($_GET['size'], 0);
                }
            }
            if (isset ($_POST['search'])) {
                if (isset ($_POST['keyword']) && ($_POST['keyword'] != "")) {
                    $keyword = $_POST['keyword'];
                    $sp = filter_sp_key($keyword);
                    if ($sp[0] == "") {
                        $thongbao_search = "Không tìm thấy: " . $keyword;
                        $list_sp = loadAll_spadmin();
                    } else {
                        $list_sp = $sp;

                    }
                }
            }
            if (isset ($_POST["filter"])) {
                if ($_POST["filter"] == 1) {
                    $list_sp = giaSp_tangdan();

                } else {
                    $list_sp = giaSp_giamdan();

                }
            }
            include "view/product/product.php";
            break;


        case 'sp_detail':
            if (isset ($_GET['id']) && ($_GET['id']) > 0) {
                $id = $_GET['id'];
                $one_sp = loadOne_sanpham($id);
                $spdm = $one_sp['ma_loai'];
                $dm = loadone_danhmuc($spdm);
                $sp_dm = loadAll_sanpham_dm_dt($spdm, $id);
                $size = loadone_sizesp($id);
                $thuvien = loadAnh_thuvien($id);
                $bl = loadall_binhluan($id);
                update_slx($id);
                include "view/product/product_details.php";
            } else {
                include "view/product/product_details.php";
            }

            break;
        //Giỏ hàng
        case 'addtocart':
            if (isset ($_POST['add_cart']) && $_POST['add_cart']) {
                $ma_sp = $_POST['ma_sp'];
                $hinh_sp = $_POST['hinh_sp'];
                $ten_sp = $_POST['ten_sp'];
                $size = $_POST['size'];
                $so_luong = $_POST['so_luong'];
                $gia_sp = $_POST['gia_sp'];
                $cc = 0;
                if (isset ($_SESSION['cart']) && $_SESSION['cart']) {
                    for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                        if ($_SESSION['cart'][$i][1] == $ten_sp && $_SESSION['cart'][$i][2] == $size) {
                            $cc = 1;
                            $soluongnew = $so_luong + $_SESSION['cart'][$i][4];
                            $_SESSION['cart'][$i][4] = $soluongnew;
                            break;
                        }
                    }
                }

                if (empty ($error)) {
                    if ($cc == 0) {
                        $sp = [$hinh_sp, $ten_sp, $size, $gia_sp, $so_luong, $ma_sp];
                        $_SESSION['cart'][] = $sp;
                    }
                }
                $one_sp = loadOne_sanpham($ma_sp);
                $spdm = $one_sp['ma_loai'];
                $dm = loadone_danhmuc($spdm);
                $sp_dm = loadAll_sanpham_dm_dt($spdm, $ma_sp);
                $size = loadone_sizesp($ma_sp);
                $thuvien = loadAnh_thuvien($ma_sp);
                $bl = loadall_binhluan($ma_sp);
                $thong_bao = "Bạn đã thêm sản phẩm vào giỏ hàng";
                include "view/product/product_details.php";
                // header("location:index.php");
            }
            if (isset ($_POST['mua_ngay']) && $_POST['mua_ngay']) {
                $ma_sp = $_POST['ma_sp'];
                $hinh_sp = $_POST['hinh_sp'];
                $ten_sp = $_POST['ten_sp'];
                $size = $_POST['size'];
                $so_luong = $_POST['so_luong'];
                $gia_sp = $_POST['gia_sp'];
                $sp = [$hinh_sp, $ten_sp, $size, $gia_sp, $so_luong, $ma_sp];
                $_SESSION['cart'][] = $sp;
                include "view/order/shopping.php";
            }
            break;
        case 'delcart':
            if (isset ($_GET['id']) && ($_GET['id'] >= 0)) {
                array_splice($_SESSION['cart'], $_GET['id'], 1);
                $thong_bao = "Bạn đã xóa sản phẩm thành công";
                include "index.php?btn=shopping";
            }

        case 'shopping':
            if (isset ($_SESSION['cart']) && (sizeof($_SESSION['cart']) > 0)) {
                include "view/order/shopping.php";
            } else {
                include "view/order/shopping.php";
            }
            break;
        case 'oder':
            include "view/order/oder.php";
            break;
        case 'success':
            if (isset ($_POST['order']) && $_POST['order']) {
                $ho_ten = $_POST['ho_ten'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $dia_chi = $_POST['dia_chi'];
                $ghi_chu = $_POST['ghi_chu'];
                $trang_thai = $_POST['trang_thai'];
                $don_gia = $_POST['don_gia'];
                $date_order = date("y-m-d");
                $errors = [];
                if (empty (trim($email))) {
                    $errors['email'] = "Không được để trống ⚠";
                } else {
                    if (!filter_var(trim($email), FILTER_VALIDATE_EMAIL)) {
                        $errors['email'] = "Email không hợp lệ ⚠";
                    }
                }

                if (empty (trim($ho_ten))) {
                    $errors['name_tk'] = "Không được để trống ⚠";
                }
                if (empty ($sdt)) {
                    $errors['phone'] = "Không được để trống ⚠";
                } else {
                    if (!preg_match('/^[0-9]{10}+$/', $sdt)) {
                        $errors['phone'] = "Số điện thoại không đúng";
                    }
                }

                if (empty ($dia_chi)) {
                    $errors['address'] = "Không được để trống ⚠ ";
                }
                if (empty ($errors)) {
                    $ma_dh = insert_donhang($ho_ten, $email, $sdt, $dia_chi, $ghi_chu, $don_gia, $date_order, $trang_thai);
                    for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                        $ma_sp = $_SESSION['cart'][$i][5];
                        $gia_sp = $_SESSION['cart'][$i][3];
                        $so_luong = $_SESSION['cart'][$i][4];
                        $size = $_SESSION['cart'][$i][2];
                        $thanh_tien = $gia_sp * $so_luong;
                        insert_donhang_ct($ma_dh, $ma_sp, $gia_sp, $size, $so_luong, $thanh_tien);
                        update_sl_sp($ma_sp, $size, $so_luong);
                    }
                    ;
                    require 'mail/PHPMailer/src/Exception.php';
                    require 'mail/PHPMailer/src/PHPMailer.php';
                    require 'mail/PHPMailer/src/SMTP.php';
                    // Instantiation and passing `true` enables exceptions
                    $mail = new PHPMailer(true);
                    //Server settings
                    // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
                    $mail->isSMTP(); // gửi mail SMTP
                    $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
                    $mail->SMTPAuth = true; // Enable SMTP authentication
                    $mail->Username = 'truongan2k2tb@gmail.com'; // SMTP username
                    $mail->Password = 'ynfxtxppdskpkpic'; // SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
                    $mail->Port = 587; // TCP port to connect to
                    //Recipients
                    $mail->setFrom('truongan2k2tb@gmail.com', 'Shop Sneakers');
                    $mail->addAddress($email, $ho_ten); // Add a recipient
                    // Content
                    $mail->isHTML(true); // Set email format to HTML
                    $mail->Subject = 'Order succes';
                    $mail->Body = ' Xin chào ' . $ho_ten . '<br>
                    Cảm ơn bạn đã tin tưởng khi đặt hàng của chúng tôi.<br>
                    Mã đơn hàng của bạn là: ' . $ma_dh . ' <br>
                    Tên người nhận: ' . $ho_ten . '<br>
                    Đơn giá: ' . number_format($don_gia, 0, '.', '.') . ' VND<br>  
                    Ngày đặt: ' . date("dd-mm-yyyy");
                    $mail->send();
                    unset($_SESSION["cart"]);
                }
            }
            include "view/order/order_success.php";
            break;
        case 'order_sp':
            include "view/order/order.detail.php";
            break;
        case 'order_dt':
            if (isset ($_POST['search_dh']) && $_POST['search_dh']) {
                $ma_dh = $_POST['ma_dh'];
                $tt_dh = load_dh_dt($ma_dh);
            } elseif (isset ($_GET['id'])) {
                $dh = loadone_donhang($_GET['id']);
            }
            include "view/order/order.detail.php";
            break;
        //Comment
        case 'add_bl':
            if (isset ($_POST['add_bl']) && $_POST['add_bl']) {
                $ma_tk = $_POST['ma_tk'];
                $ma_sp = $_POST['ma_sp'];
                $noi_dung = $_POST['noi_dung'];
                $date = date('y-m-d');
                if (empty ($noi_dung)) {
                    $errors['nd_bl'] = "<p class='error'>Nội dung không được để trống</p>";
                }
                if (empty ($errors)) {
                    insert_binhluan($noi_dung, $ma_sp, $ma_tk, $date);
                    $thong_bao = "<script>alert('Thêm bình luận thành công');</script>";
                }
                $one_sp = loadOne_sanpham($ma_sp);
                $spdm = $one_sp['ma_loai'];
                $dm = loadone_danhmuc($spdm);
                $sp_dm = loadAll_sanpham_dm_dt($spdm, $ma_sp);
                $size = loadone_sizesp($ma_sp);
                $thuvien = loadAnh_thuvien($ma_sp);
                $bl = loadall_binhluan($ma_sp);
                include "view/product/product_details.php";
            } else {
                header("Location:index.php");
            }
            break;
        //CONTACT            
        case 'contact':
            include "view/contact/contact.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";