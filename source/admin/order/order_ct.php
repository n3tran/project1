<main>
    <div class="logo">

        <img src="../img/image(1269)_preview_rev_1 (1).png" alt="">
    </div>

    <div class="content">
        <div class="content-product">
            <div style="width: 5%;" class="product-title">STT</div>
            <div style="width: 10%;" class="product-title">Tên loại</div>
            <div style="width: 20%;" class="product-title">Tên sản phẩm</div>
            <div style="width: 15%;" class="product-title">Ảnh</div>
            <div style="width: 15%;" class="product-title">Giá</div>
            <div style="width: 10%;" class="product-title">Số lượng</div>
            <div style="width: 10%;" class="product-title">Tổng tiền</div>
            <div style="width: 10%;" class="product-title">Mã đơn hàng</div>

        </div>
        <?php
        $i = 1;
        foreach ($dh as $key => $list) {
            $hinhpath = '<img src="../img/' . $list['hinh_sp'] . '" alt="" style="width: 100px;">';
            if (!$list['hinh_sp'] == "") {
                $hinh = $hinhpath;
            } else if ($hinh_sp == "") {
                $hinh = 'no photo';
            }
            $size = size_sp($list['ma_order_ct']);

            ?>
            <div class="content-product">
                <div style="width: 5%;" class="product-items">
                    <?= $i ?>
                </div>
                <div style="width: 10%;" class="product-items">
                    <?= $list['ten_loai'] ?>
                </div>
                <div style="width: 20%;" class="product-items">
                    <?= $list['ten_sp'] ?> <br>
                    size:
                    <?= $size['size'] ?>
                </div>
                <div style="width: 15%;" class="product-items">
                    <?= $hinh ?>
                </div>
                <div style="width: 15%;" class="product-items">
                    <?= number_format($list['gia_sp'], "0", ".", ".") ?> VND
                </div>
                <div style="width: 10%;" class="product-items">
                    <?= $list['soluong'] ?>
                </div>
                <div style="width: 10%;" class="product-items">
                    <?= number_format($list['thanhtien'], "0", ".", ".") ?> VND
                </div>
                <div style="width: 10%;" class="product-items">
                    <?= $list['ma_order'] ?>
                </div>

            </div>
            <?php
            $i++;
        }
        ?>
        <div class="" style="margin-left: 60px; margin-bottom: 20px;">
            <a href="index.php?btn=page_dh"><input type="submit" name="add_new" value="List order" class="btn_submit"
                    style="border: none;"></a>
        </div>

</main>
</div>