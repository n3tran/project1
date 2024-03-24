<main class="container cart_list">
    <p class="notification_order">
        <?php
        if (isset($thong_bao)) {
            echo $thong_bao;
        } ?>
    </p>
    <?php
    if (isset($_SESSION['cart']) && (is_array($_SESSION['cart']))) {
        ?>
        <div class="title_cart">
            <p>Sản phẩm</p>
            <p>Thông tin sản phẩm</p>
            <p>Đơn giá</p>
            <p>Số lượng</p>
            <p>Thành tiền</p>
            <button type="submit">Xoá</button>
        </div>

        <?php
        if (sizeof($_SESSION['cart']) > 0) {
            $tong = 0;

            for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                $tt = $_SESSION['cart'][$i][3] * $_SESSION['cart'][$i][4];
                $tong += $tt;
                ?>
                <div class="product_willpay">
                    <img src="img/<?= $_SESSION['cart'][$i][0] ?>" alt="">
                    <p>
                        <?= $_SESSION['cart'][$i][1] ?> <br> Size:
                        <?= $_SESSION['cart'][$i][2] ?>
                    </p>
                    <p>
                        <?= number_format($_SESSION['cart'][$i][3], 0, ".", ".") ?> VND
                    </p>
                    <p>
                        <?= $_SESSION['cart'][$i][4] ?>
                    </p>
                    <p>
                        <?= number_format($tt, 0, ".", ".") ?> VND
                    </p>
                    <button><a href="index.php?btn=delcart&id=<?= $i ?>"
                            onclick="return confirm('Bạn có thưc sự muốn xóa sản phẩm khỏi giỏ hàng');">Xóa</a></button>
                </div>
            <?php } ?>


            <!-- <div class="product_willpay">
        <img src="img/adidas_product_1.jpg" alt="">
        <p>Giày Nike Air Jordan 1 Mid Black Chile Red White - 40</p>
        <p>4.500.000₫</p>
        <p>1</p>
        <p>4.500.000₫</p>
        <button type="submit">Xoá</button>
    </div> -->
            <div class="allmoney_total">
                <p>Tổng tiền: <span>
                        <?= number_format($tong, 0, ".", ".") ?> VND
                    </span></p>
            </div>

            <div class="allmoney_button">
                <a href="index.php?btn=oder" class="willpay_button" type="submit">Mua ngay</a>
                <a href="index.php" class="willpay_buyproduct" type="submit">Tiếp tục mua hàng</a>
            </div>
            <?php

        }
    } else {
        echo "<p class='notification_order'>Giỏ hàng trống</p>"
        ;
    }
    ?>
</main>