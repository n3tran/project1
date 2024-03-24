<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>

<body>
    <div class="page">
        <header class="wrapper-nav">
            <div class="account">
                <img src="../img/Avatar-Profile-Vector-PNG-Clipart.png" alt="">
                <h2>
                    <?php
                    if(isset($_SESSION['user'])){
                        echo $_SESSION['user']['ho_ten'];
                    }
                    ?>
                </h2>

            </div>
            <div class="category_admin">
                <ul>
                    <li><a href="index.php?btn=list_dm"><i class="fa-solid fa-bars"></i> Danh Mục</a></li>
                    <li><a href="index.php?btn=list_sp"><i class="fa-brands fa-product-hunt"></i> Sản Phẩm</a></li>
                    <li><a href="index.php?btn=page_kh"><i class="fa-solid fa-users"></i> Khách Hàng </a></li>
                    <li><a href="index.php?btn=page_bl"><i class="fa-solid fa-comment"></i> Bình Luận</a></li>
                    <li><a href="index.php?btn=page_tk"><i class="fa-solid fa-chart-simple"></i> Thống Kê</a></li>
                    <li><a href="index.php?btn=page_dh"><i class="fa-solid fa-cart-arrow-down"></i>Đơn Hàng</a></li>
                    <li> <a href="../index.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Quay Lại Shop</a></li>
                </ul>
            </div>
            <div class="icon_share">
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-google"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-square-instagram"></i>
            </div>
        </header>