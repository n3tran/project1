<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.3.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Project_1</title>
</head>

<body>
    <header class="wrapper-nav">
        <div class="fixed">
            <div class="container">
                <nav class="account-shop">
                    <div class="greeting">
                        <p>
                            Welcome to our website
                        </p>
                    </div>
                    <div class="seach_shop">
                        <form action="index.php?btn=product" method="post" class="search">
                            <input class="inputBox" id="inputBox" type="text" placeholder="Tìm sản phẩm..."
                                name="keyword" value="">
                            <i class="fa-solid fa-magnifying-glass"><input type="submit" name="search" value=""> </i>

                        </form>
                    </div>
                    <div class="account_items">
                        <a href="index.php?btn=order_sp">
                            <input type="submit" value="Đơn Hàng">
                        </a>
                        <?php
                        if (isset ($_SESSION['user'])) {
                            echo '
                                <a href="index.php?btn=edit_acount">
                                    <img src="img/icon-header-1.png" alt="">
                                    <input class="items_nameuser" type="submit" value="' . $_SESSION['user']['ho_ten'] . '">
                                </a>
                                
                             
                            ';
                        } else {
                            echo '
                                <a href="index.php?btn=sign_in">
                                    <input type="submit" value="Đăng Nhập">
                                </a>
                                <a href="index.php?btn=sign_up">
                                    <input type="submit" value="Đăng Ký">
                                </a>
                            ';
                        }

                        ?>

                        <a class="shopping" href="index.php?btn=shopping"><i class="fa-solid fa-cart-shopping"></i></a>
                    </div>
                </nav>
            </div>
            <hr>
            <div class="container">
                <nav class="category_shop">
                    <div class="logo">
                        <h1>
                            <a href="index.php?btn=home">
                                <img src="img/image(1269)_preview_rev_1 (1).png" alt="">
                            </a>
                        </h1>
                    </div>
                    <div class="menu">

                        <ul>
                            <li><a href="index.php">Trang chủ</a></li>
                            <li><a href="index.php?btn=product">Sản phẩm</a></li>
                            <li><a href="index.php?btn=contact">Liên Hệ</a></li>
                            <li><a href="index.php?btn=contact">Giới thiệu</a></li>
                            <li>
                                <?php
                                if (isset ($_SESSION['user'])) {

                                    if ($_SESSION['user']['vai_tro'] == 1) {
                                        echo '
                                <a href="admin/index.php">
                                Quản trị
                            </a>
                                ';
                                    }

                                } ?>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

    </header>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop()) {
                    $('.account-shop').addClass('scroll')
                } else {
                    $('.account-shop').removeClass('scroll')
                }
            })
        });
    </script>