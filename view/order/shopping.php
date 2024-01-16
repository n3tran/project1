<main class="container cart_list">
    <p class="notification_order">
        <?php
        if (isset($thong_bao)) {
            echo $thong_bao;
        } ?>
    </p>
    <div class="title_cart">
        <p>Sản phẩm</p>
        <p>Thông tin sản phẩm</p>
        <p>Đơn giá</p>
        <p>Số lượng</p>
        <p>Thành tiền</p>
        <button type="submit">Xoá</button>
    </div>
    <?php
    if (isset($_SESSION['cart']) && (is_array($_SESSION['cart']))) {
        if (sizeof($_SESSION['cart']) > 0) {
            $tong = 0;

            for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                $tt = $_SESSION['cart'][$i][3] * $_SESSION['cart'][$i][4];
                $tong += $tt;
                ?>
                <form action="index.php?btn=update_dh" method="post">

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
                            <input class="minus is-form" type="button" value="-" name="giam">
                            <input aria-label="quantity" class="input-qty" max="100" min="1" name="so_luong[]" type="number"
                                value="<?= $_SESSION['cart'][$i][4] ?>">
                            <input class="plus is-form" type="button" value="+" name="tang">

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
                    <input type="submit" class="willpay_button" value="Cập nhật giỏ hàng" name="update">
                    <a href="index.php?btn=oder" class="willpay_button" type="submit">Mua ngay</a>
                    <a href="index.php" class="willpay_buyproduct" type="submit">Tiếp tục mua hàng</a>
                </div>
            </form>
            <?php

        }
    }
    ?>
    <script>
        $('input.input-qty').each(function () {
            var $this = $(this),
                qty = $this.parent().find('.is-form'),
                min = Number($this.attr('min')),
                max = Number($this.attr('max'))
            if (min == 0) {
                var d = 0
            } else d = min
            $(qty).on('click', function () {
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
</main>