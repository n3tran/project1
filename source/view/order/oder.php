<main class="container 
 ">
    <div class="order_here">
        <div class="buy_address"  style="margin: 0;">
            <h4>Thông tin khách hàng:</h4>
            <form action="index.php?btn=success" method="post" class="user_information">
                <?php
                if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
                ?>
                    <input name="ho_ten" type="text" value="<?= $_SESSION['user']['ho_ten'] ?>"> <br>
                    <input name="email" type="text" value="<?= $_SESSION['user']['email'] ?>" placeholder="Email"> <br>
                    <input name="sdt" type="numbers" value="<?= $_SESSION['user']['sdt'] ?>" placeholder="Số điện thoại"> <br>
                    <input name="dia_chi" type="text" value="<?= $_SESSION['user']['dia_chi'] ?>"> <br>
                    <textarea name="ghi_chu" id="" cols="23" rows="1" placeholder="Ghi chú"></textarea>
                <?php
                } else {
                ?>
                    <input name="ho_ten" type="text" value="<?php
                                                            if (!empty($ho_ten)) {
                                                                echo $ho_ten;
                                                            }
                                                            ?>" placeholder="Tên người nhận">
                    <?php
                    if (!empty($errors['name_tk'])) {
                        echo '<p class="error">' . $errors['name_tk'] . '</p>';
                    }
                    ?>
                    <input name="email" type="text" value="<?php
                                                            if (!empty($email)) {
                                                                echo $email;
                                                            }
                                                            ?>" placeholder="Email">
                    <?php
                    if (!empty($errors['email'])) {
                        echo '<p class="error">' . $errors['email'] . '</p>';
                    }
                    ?>
                    <input name="sdt" type="numbers" value="<?php
                                                            if (!empty($sdt)) {
                                                                echo $sdt;
                                                            }
                                                            ?>" placeholder="Số điện thoại">
                    <?php
                    if (!empty($errors['phone'])) {
                        echo '<p class="error">' . $errors['phone'] . '</p>';
                    }
                    ?>
                    <input name="dia_chi" type="text" value="<?php
                                                                if (!empty($dia_chi)) {
                                                                    echo $dia_chi;
                                                                }
                                                                ?>" placeholder="Địa chỉ">
                    <?php
                    if (!empty($errors['address'])) {
                        echo '<p class="error">' . $errors['address'] . '</p>';
                    }
                    ?>
                    <textarea name="ghi_chu" id="" cols="25" rows="5" placeholder="Ghi chú"><?php
                                                                                            if (!empty($ghi_chu)) {
                                                                                                echo $ghi_chu;
                                                                                            }
                                                                                            ?></textarea>
                <?php
                }
                ?>
                <div class="product_pay">
                    <h4>Thanh Toán:</h4>
                    <br>
                    <div class="box_pay">
                        <input class="bp_checkclick" checked="checked" type="radio" name="radio"> Thanh toán khi nhận hàng (COD)
                    </div>
                </div>
        </div>

        <div class="product_order" style="margin: 0;">
            <h4>Đơn hàng:</h4>
            <div class="reciept">
                <?php
                if (isset($_SESSION['cart']) && (is_array($_SESSION['cart']))) {
                    if (sizeof($_SESSION['cart']) > 0) {
                        $ship = 30000;
                        $tong = 0;
                        for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                            $tt = $_SESSION['cart'][$i][3] * $_SESSION['cart'][$i][4];
                            $tong += $tt;
                ?>
                            <div class="reciept_product">
                                <img src="img/<?= $_SESSION['cart'][$i][0] ?>" alt="" style="width: 100px;">
                                <div class="name_product">
                                    <p class="name_recipet" > <?= $_SESSION['cart'][$i][1] ?> </p>
                                    <p class="quantity">Số lượng : <span> <?= $_SESSION['cart'][$i][4] ?> </span></p>
                                    <p class="size">Size : <span> <?= $_SESSION['cart'][$i][2] ?></span></p>
                                </div>
                            </div>

                        <?php
                        } ?>


                        <div class="reciept_price">
                            <div class="content_price">
                                <p>Tổng Tiền Hàng : <span> <?= number_format($tong, 0, ".", ".") ?> VND</span> </p>
                            </div>
                            <div class="content_price">
                                <p>Phí Vận Chuyện : <span> <?= number_format($ship, 0, ".", ".") ?> VND</span> </p>
                            </div>
                            <div class="content_price price_p">
                                <p>Tổng : <span> <?= number_format($tong + $ship, 0, ".", ".") ?> VND</span> </p>
                            </div>
                            <div class="allmoney_buyorder">
                                <input type="submit" value="Đặt hàng" name="order">
                            </div>

                        </div>
            </div>
            <input type="hidden" name="trang_thai" value="1">
            <input type="hidden" name="don_gia" value="<?= ($tong + $ship) ?>">
    <?php
                    }
                }
    ?>
    </form>
        </div>
    </div>
</main>