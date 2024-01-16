<main>
    <div class="logo">
   
        <img src="../img/image(1269)_preview_rev_1 (1).png" alt="">
    </div>
    <div class="content">
        <div class="content-product">
            <div style="width: 5%;" class="product-title">STT</div>
            <div style="width: 10%;" class="product-title">Mã Đơn Hàng</div>
            <div style="width: 20%;" class="product-title">Khách Hàng</div>
            <div style="width: 20%;" class="product-title">Số Lượng Hàng</div>
            <div style="width: 10%;" class="product-title">Tổng Giá Trị</div>
            <div style="width: 20%;" class="product-title">Tình Trạng</div>
            <div style="width: 10%;" class="product-title">Ngày Đặt</div>

        </div>
        <?php
        $i = 1;
        foreach ($donhang as $list) {
            $id = $list['ma_order'];
            $sl = so_luong_sp($id);
            ?>
            <form action="index.php?btn=trangthai_dh" method="post">
                <div class="content-product">
                    <div style="width: 5%;" class="product-items">
                        <?= $i ?>
                    </div>
                    <div style="width: 10%;" class="product-items">
                        <?= $list['ma_order'] ?>
                    </div>
                    <div style="width: 20%;" class="product-items">
                        <?= $list['ho_ten'] ?>
                    </div>
                    <div style="width: 20%;" class="product-items">
                        <?= $sl['tong'] ?>
                    </div>
                    <div style="width: 10%;" class="product-items">
                        <?= number_format($list['don_gia'],"0",".",".") ?>
                    </div>
                    <div style="width: 20%;" class="product-items">
                        <select name="trangthai[]" id="" >
                            <option value="<?=$list['trang_thai'] ?>">
                                <?= trangthai_donhang($list['trang_thai']) ?>
                            </option>
                            <option value="1">Chờ xác nhận</option>
                            <option value="2">Đã xác nhận</option>
                            <option value="3">Đang giao hàng </option>
                            <option value="4">Hoàn thành</option>
                        </select>
                    </div>
                    <div style="width: 10%;" class="product-items">
                        <?= $list['ngay_dat'] ?>
                    </div>
                    <input type="hidden" name="ma_dh[]"  value="<?=$list['ma_order']?>" id="">

                </div>
                <?php
                $i++;
        }
        ?>
            <div class="" style="margin-left: 60px; margin-bottom: 20px;">
                <a href=""><input type="submit" name="edit_dh" value="Cập nhật đơn hàng" class="btn_submit"
                        style="border: none;"></a>
            </div>
        </form>

</main>
</div>