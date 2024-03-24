<div class="container">

    <main class="main_total">
        <div class="product_left">
            <img id="slider" src="img/<?php echo $one_sp["hinh_sp"] ?>" alt="">
            <div class="img_items">
                <img id="slider_productdetails" class="active_boder_pi" onclick="nb_1()" src="img/<?php echo $one_sp["hinh_sp"] ?>" alt="">
                <?php
                $a = 1;
                $i1 = 2;
                foreach ($thuvien as $anh) {
                    extract($anh);
                    if ($i1 < 5) {

                        echo '<img id="slider_productdetails' . $a . '" onclick="nb_' . $i1 . '()" src="img/' . $anh . '" alt="">';
                    }
                    $i1 += 1;
                    $a += 1;
                };
                ?>
            </div>

        </div>
        <div class="product_right">

            <form action="index.php?btn=addtocart" method="post">
                <p class="notification_order">
                    <?php

                    if (isset($thong_bao)) {
                        echo $thong_bao;
                    } ?>
                </p>
                <h3>
                    <?php echo $one_sp['ten_sp'] ?>
                </h3>

                <p>Danh mục: <a href="#">
                        <?php echo $dm['ten_loai'] ?>
                    </a></p>
                <p>Giá sản phẩm: <span>
                        <?php echo number_format($one_sp['gia_sp'], "0", ".", ".") ?> VND
                    </span></p>
                <p class="size_add">Size:
                    <?php
                    foreach ($size as $sizes) {
                        $i = 0;
                        extract($sizes);
                    ?>
                        <label class="add_size">
                            <?= $sizes['size'] ?>
                            <input type="radio" name="size" checked value="<?= $sizes['size'] ?>">
                            <span class="checkmark"></span>
                        </label>
                    <?php
                        $i++;
                    }
                    ?>


                </p>
                <p>Số lượng: </p>
                <div class="buttons_added">
                    <input class="minus is-form" type="button" value="-">
                    <input aria-label="quantity" class="input-qty" max="<?= $sizes['soluong'] ?>" min="1" name="so_luong" type="number" value="1">
                    <input class="plus is-form" type="button" value="+">
                </div>
                <br>
                <input type="hidden" name="ma_sp" value="<?= $one_sp['ma_sp'] ?>">
                <input type="hidden" name="hinh_sp" value="<?= $one_sp['hinh_sp'] ?>">
                <input type="hidden" name="ten_sp" value="<?= $one_sp['ten_sp'] ?>">
                <input type="hidden" name="gia_sp" value="<?= $one_sp['gia_sp'] ?>">
                <!-- <button type="submit" class="product_cart" name="add_cart">g</button> -->
                <?php
                if (isset($_SESSION['user'])) {
                ?>
                    <div class="product_add_cart">
                        <i class="fa-solid fa-cart-shopping"></i> <input type="submit" value="Thêm vào giỏ hàng" name="add_cart">
                    </div>
                    <input type="submit" class="product_buynow" name="mua_ngay" value="Mua ngay">
                <?php
                } else {
                ?>
                    <p class="error" style="margin: 20px 0;">Vui Lòng Đăng Nhập/Đăng Ký Để Đặt Hàng</p>
                <?php
                }
                ?>

            </form>
            <button class=" product_selectsize" onclick="alert('Hướng dẫn chọn size giày phù hợp !')">+ Hướng dẫn
                chọn
                size</button>

        </div>
    </main>
    <div class="mc_right mg_bottomall">
        <button class="items_detail">Mô tả</button>
        <p class="detail_bold" style="margin-bottom: 20px;">
            <?php echo $dm['ten_loai'];
            echo ':' ?> <span>
                <?php echo $one_sp['ten_sp'] ?>
            </span>
        </p>
        <p class="mc_productdetails" style="margin-bottom: 20px;">*Thông tin sản phẩm</p>
        <p class="detail_pi" style="margin-bottom: 20px;">
            <?php echo $one_sp['mo_ta'] ?>
        </p>
    </div>
    <div class="evaluate_right">
        <button class="er_detail">Đánh giá</button>
        <div class="er_comment">
            <?php
            if (!empty($bl) && $bl > 0) {
            ?>
                <?php
                foreach ($bl as $bl_sp) {
                ?>
                    <div class="content_comment">
                        <span class="img_comment">
                            <img src="img/z4581962167986_e28c5b4691007c2c7b59dd3e11523e3b.jpg" alt="" style="width: 50px;">
                        </span>
                        <div class="info_comment">
                            <h4><?= $bl_sp['ho_ten'] ?><span> <?= $bl_sp['ngay_bl'] ?></span></h4>
                            <p> <?= $bl_sp['noi_dung'] ?></p>
                        </div>
                    </div>
                <?php

                }
                ?>

            <?php
            } else {
            ?>
                <p class="mg_topall mg_leftall">Chưa có đánh giá sản phẩm nào.</p>
            <?php
            }
            ?>
            <?php

            if (isset($_SESSION['user']) && $_SESSION['user']) {
            ?>
                <form action="index.php?btn=add_bl" method="post">

                    <div class="er_usercomment">
                        <textarea class="er_usercomment_items" name="noi_dung" id="" cols="70" rows="1" placeholder="Nhập nội dung"></textarea>
                        <?php
                        if (isset($errors['nd_bl'])) {
                            echo $errors['nd_bl'];
                        }
                        ?>
                    </div>

                    <div class="er_signin_success">
                        <input type="submit" class="er_dangnhap" name="add_bl" value="Gửi ">
                    </div>
                    <input type="hidden" name="ma_sp" value="<?= $one_sp['ma_sp'] ?>">
                    <input type="hidden" name="ma_tk" value="<?= $_SESSION['user']['ma_tk'] ?>">
                </form>
            <?php
            } else {
            ?>

                <h4 class="mg_topall error">Đăng nhập để bình luận</h4>

            <?php
            }
            ?>

        </div>

    </div>
</div>
<div class="container">
    <div class="product mg_topall">
        <div class="product_title">
            <h1>
                <hr class="before mt-3" width="250px" align="left" color="black" size="4px">
                <span style="text-transform: uppercase;">sản phẩm cùng loại</span>
                <hr class="after mt-3" width="250px" align="right" color="black" size="4px">
            </h1>
        </div>
        <div class="box-products mg_bottomall">
            <?php
            foreach ($sp_dm as $sp) {
                extract($sp);
                $hinh = 'img/' . $hinh_sp;
                echo '<div class="items-product">
                        <a href="index.php?btn=sp_detail&id=' . $ma_sp . '"> <img src="' . $hinh . '" alt=""></a>
                        <div class="text">
                            <p>' . $ten_sp . '</p>
                            <span>' . number_format($gia_sp, "0", ".", ".") . 'đ</span>
                        </div>
                            <a class="view" href="#"><i class="fa-solid fa-money-bill-1-wave"> Mua Ngay </i></a>
                        </div>';
            }
            ?>
        </div>
    </div>
</div>
</body>
<script>
    $('input.input-qty').each(function() {
        var $this = $(this),
            qty = $this.parent().find('.is-form'),
            min = Number($this.attr('min')),
            max = Number($this.attr('max'))
        if (min == 0) {
            var d = 0
        } else d = min
        $(qty).on('click', function() {
            if ($(this).hasClass('minus')) {
                if (d > min) d += -1
            } else if ($(this).hasClass('plus')) {
                var x = Number($this.val()) + 1
                if (x <= max) d += 1
            }
            $this.attr('value', d).val(d)
        })
    })
</script>
<script>
    var images = [
        "img/<?php echo $one_sp["hinh_sp"] ?>",
        <?php
        $i2 = 1;
        foreach ($thuvien as $anh) {
            extract($anh);
            if ($i2 < 4) {
                if ($i2 < 3) {
                    echo '"img/' . $anh . '",';
                } else {
                    echo '"img/' . $anh . '"';
                }
                $i2++;
            }
        }
        ?>


    ];

    function nb_1() {
        slider.src = images[0];
        var addClass = document.getElementById("slider_productdetails");
        addClass.classList.add('active_boder_pi');
        var removeClass = document.getElementById("slider_productdetails1");
        removeClass.classList.remove('active_boder_pi');
        var removeClass = document.getElementById("slider_productdetails2");
        removeClass.classList.remove('active_boder_pi');
        var removeClass = document.getElementById("slider_productdetails3");
        removeClass.classList.remove('active_boder_pi');
    }

    function nb_2() {
        slider.src = images[1];
        var addClass = document.getElementById("slider_productdetails1");
        addClass.classList.add('active_boder_pi');
        var removeClass = document.getElementById("slider_productdetails");
        removeClass.classList.remove('active_boder_pi');
        var removeClass = document.getElementById("slider_productdetails2");
        removeClass.classList.remove('active_boder_pi');
        var removeClass = document.getElementById("slider_productdetails3");
        removeClass.classList.remove('active_boder_pi');
    }

    function nb_3() {
        slider.src = images[2];
        var addClass = document.getElementById("slider_productdetails2");
        addClass.classList.add('active_boder_pi');
        var removeClass = document.getElementById("slider_productdetails");
        removeClass.classList.remove('active_boder_pi');
        var removeClass = document.getElementById("slider_productdetails1");
        removeClass.classList.remove('active_boder_pi');
        var removeClass = document.getElementById("slider_productdetails3");
        removeClass.classList.remove('active_boder_pi');
    }

    function nb_4() {
        slider.src = images[3];
        var addClass = document.getElementById("slider_productdetails3");
        addClass.classList.add('active_boder_pi');
        var removeClass = document.getElementById("slider_productdetails");
        removeClass.classList.remove('active_boder_pi');
        var removeClass = document.getElementById("slider_productdetails1");
        removeClass.classList.remove('active_boder_pi');
        var removeClass = document.getElementById("slider_productdetails2");
        removeClass.classList.remove('active_boder_pi');
    }
</script>

</html>