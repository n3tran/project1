<main>
    <div class="order">

        <div class="order_seach">

            <form action="index.php?btn=order_dt" method="post" class="search">
                <input class="inputBox" id="inputBox" type="text" placeholder="Nhập mã đơn hàng" name="ma_dh"
                    style="width: 200px; height: 30px;">
                <input type="submit" class="dt" name="search_dh" value="Xem đơn hàng">
            </form>
        </div>
        <?php
        if (isset ($tt_dh) && is_array($tt_dh) && $tt_dh !== []) {
            ?>
            <div class="order_items">
                <div class="content-product">
                    <div style="width: 10%;" class="product-title">Mã Đơn </div>
                    <div style="width: 15%;" class="product-title">Người Nhận</div>
                    <div style="width: 15%;" class="product-title">Tổng</div>
                    <div style="width: 25%;" class="product-title">Trạng Thái Đơn Hàng</div>
                    <div style="width: 10%;" class="product-title">Ngày Đặt</div>
                    <div style="width: 10%;" class="product-title"> </div>
                </div>
                <div class="content-product" style="background-color: white;">
                    <div style="width: 10%;" class="order-title">
                        <?= $tt_dh['ma_order'] ?>
                    </div>
                    <div style="width: 15%;" class="order-title">
                        <?= $tt_dh['ho_ten'] ?>
                    </div>
                    <div style="width: 15%;" class="order-title">
                        <?= number_format($tt_dh['don_gia'], 0, '.', '.') ?> VND
                    </div>
                    <div style="width: 25%;" class="order-title">
                        <?= trangthai_donhang($tt_dh['trang_thai']) ?>
                    </div>
                    <div style="width: 10%;" class="order-title">
                        <?= $tt_dh['ngay_dat'] ?>
                    </div>
                    <div style="width: 10%;" class="order-title">
                        <a href="index.php?btn=order_dt&id=<?= $tt_dh['ma_order'] ?>">Xem chi tiết</a>
                    </div>
                </div>
            </div>

            <?php
            return;
        } elseif (isset ($_GET['id']) && isset ($dh)) {
            ?>
            <div class="order_items">
                <div class="content-product">
                    <div style="width: 25%;" class="product-title">Tên sản phẩm </div>
                    <div style="width: 15%;" class="product-title">Ảnh</div>
                    <div style="width: 15%;" class="product-title">Giá tiền</div>
                    <div style="width: 10%;" class="product-title">Số lượng</div>
                    <div style="width: 15%;" class="product-title">Thành tiền</div>
                </div>
                <?php foreach ($dh as $data) {
                    ?>
                    <div class="content-product" style="background-color: white; margin-bottom:100px;">
                        <div style="width: 25%;" class="order-title">
                            <?= $data['ten_sp'] ?>
                        </div>
                        <div style="width: 15%;" class="order-title">
                            <img src="/img/<?= $data['hinh_sp'] ?>" width="200" height="150" alt="">
                        </div>
                        <div style="width: 15%;" class="order-title">
                            <?= number_format($data['gia_sp'], 0, '.', '.') ?> VND
                        </div>
                        <div style="width: 10%;" class="order-title">
                            <?= $data['soluong'] ?>
                        </div>
                        <div style="width: 15%;" class="order-title">
                            <?= number_format($data['thanhtien'], 0, '.', '.') ?> VND
                        </div>


                    </div>

                    <?php
                }
                ?>

                <form action="index.php?btn=order_dt" method="post" class="ml-5">
                    <input class="inputBox" id="inputBox" type="text" hidden value="<?= $dh[0]['ma_order'] ?>" name="ma_dh"
                        style="width: 200px; height: 30px;">
                    <input type="submit" class="dt btn btn-success" name="search_dh" value="Quay lại">
                </form>

                <?php
        } elseif (isset ($_POST['search_dh'])) {
            echo "<script>
        alert('Đơn hàng không tồn tại!!')
    </script>";
            return;
        }

        ?>
        </div>

        <!--<div class="order-product">
                <div style="width: 10%;" class="order-title">Mã Đơn Hàng</div>
                <div style="width: 15%;" class="order-title">Người Nhận</div>
                <div style="width: 25%;" class="order-title">Sản Phẩm</div>
                <div style="width: 15%;" class="order-title">Tổng</div>
                <div style="width: 25%;" class="order-title">Trạng Thái Đơn Hàng</div>
                <div style="width: 10%;" class="order-title">Ngày Đặt</div>
            </div>
          <div class="order-product">
                <div style="width: 20%;" class="order-title">PH30176</div>
                <div style="width: 15%;" class="order-title">06/08/2023</div>
                <div style="width: 25%;" class="order-title">Giày</div>
                <div style="width: 15%;" class="order-title">10.000 VND</div>
                <div style="width: 25%;" class="order-title">Đang Chuẩn Bị Hàng</div>
            </div>
            <div class="order-product">
                <div style="width: 20%;" class="order-title">PH30176</div>
                <div style="width: 15%;" class="order-title">06/08/2023</div>
                <div style="width: 25%;" class="order-title">Giày</div>
                <div style="width: 15%;" class="order-title">10.000 VND</div>
                <div style="width: 25%;" class="order-title">Đang Chuẩn Bị Hàng</div>
            </div> -->
    </div>
</main>