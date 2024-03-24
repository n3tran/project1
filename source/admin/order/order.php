<main>
    <div class="logo">
        <img src="../img/image(1269)_preview_rev_1 (1).png" alt="">
    </div>
    <div class="mt-3">
        <a name="" id="" class="btn btn-primary" href="index.php?btn=dh_ht" role="button">Xem đơn hàng đã hoàn thành</a>
        <a name="" id="" class="btn btn-success" href="index.php?btn=page_dh" role="button">Xem tất cả đơn hàng</a>
    </div>

    <p class="notification">
        <?php
        if (isset ($thong_bao)) {
            echo $thong_bao;
        }
        ?>
    </p>


    <div class="content">
        <div class="content-product">
            <div style="width: 10%;" class="product-title">STT</div>
            <div style="width: 10%;" class="product-title">Mã Đơn Hàng</div>
            <div style="width: 20%;" class="product-title">Khách Hàng</div>
            <div style="width: 10%;" class="product-title">Số Lượng Hàng</div>
            <div style="width: 10%;" class="product-title">Tổng Giá Trị</div>
            <div style="width: 10%;" class="product-title">Tình Trạng</div>
            <div style="width: 10%;" class="product-title">Ngày Đặt</div>
            <div style="width: 10%;" class="product-title">Xem chi tiết</div>
            <div style="width: 10%;" class="product-title">Xóa đơn hàng</div>

        </div>
        <?php
        $i = 1;
        $ship = 30000;
        // echo "<pre>";
        // print_r($donhang);
        // echo "</pre>";
        foreach ($donhang as $list) {
            $id = $list['ma_order'];
            $sl = so_luong_sp($id);
            ?>
            <div class="content-product">
                <div style="width: 10%;" class="product-items">
                    <?php if (isset ($list['ma_order'])) {
                        echo $i;
                    } ?>
                </div>
                <div style="width: 10%;" class="product-items">
                    <?= $list['ma_order'] ?>
                </div>
                <div style="width: 20%;" class="product-items">
                    <?= $list['ho_ten'] ?>
                </div>
                <div style="width: 10%;" class="product-items">
                    <?= $sl['tong'] ?>
                </div>
                <div style="width: 10%;" class="product-items">
                    <?php if (isset ($list['ma_order'])) {
                        echo number_format($list['don_gia'] - $ship, "0", ".", ".") . " VND";
                    } ?>
                </div>
                <div style="width: 10%;" class="product-items">
                    <?= trangthai_donhang($list['trang_thai']) ?>
                </div>
                <div style="width: 10%;" class="product-items">
                    <?= $list['ngay_dat'] ?>
                </div>

                <div style="width: 10%;" class="product-items">
                    <?php if (isset ($list['ma_order'])) {
                        ?>
                        <a href="index.php?btn=chitiet_dh&idct=<?= $list['ma_order'] ?>"><input type="submit" name="add_new"
                                value="Chi tiết" class="btn_submit" style="border: none;"></a>
                        <?php
                    } ?>

                </div>
                <div style="width: 10%;" class="product-items">
                    <?php if (isset ($list['ma_order'])) {
                        ?>
                        <a href="index.php?btn=xoa_dh&id=<?= $list['ma_order'] ?>"
                            onclick="return confirm('Bạn có thực sụ muốn xóa đơn hàng') "><input type="submit" name="add_new"
                                value="Xóa" class="btn_submit" style="border: none;"></a>
                        <?php
                    } ?>

                </div>

            </div>
            <?php
            $i++;
        }

        ?>
        <?php if (isset ($list['ma_order'])) {
            ?>
            <div class="" style="margin-left: 60px; margin-bottom: 20px;">
                <a href="index.php?btn=trangthai_dh">
                    <input type="submit" name="add_new" value="Cập nhật đơn hàng" class="btn_submit"
                        style="border: none;"></a>
            </div>
            <?php
        } ?>
</main>
</div>