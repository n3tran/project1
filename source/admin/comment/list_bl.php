<main>
    <div class="logo">
        <img src="../img/image(1269)_preview_rev_1 (1).png" alt="">
    </div>
   
    <div class="content">
        <p class="notification">
            <?php
            if (isset($thong_bao)) {
                echo $thong_bao;
            }
            ?>
        </p>
        <div class="content-product">
            <div style="width: 5%;" class="product-title">STT</div>
            <div style="width: 15%;" class="product-title">Tên khách hàng</div>
            <div style="width: 30%;" class="product-title">Nội Dung</div>
            <div style="width: 20%;" class="product-title">Mã sản phẩm</div>
            <div style="width: 15%;" class="product-title">Ngày Bình Luận</div>
            <div style="width: 15%;" class="product-title">Thao Tác</div>
        </div>

        <?php
        $i = 1;
        // echo "<pre>";
        // print_r($tk_bl);
        // echo "</pre>";
        foreach ($tk_bl as $bl) {
            ?>
            <div class="content-product">
                <div style="width: 5%;" class="product-items">
                    <?= $i ?>
                </div>
                <div style="width: 15%;" class="product-items">
                    <?= $bl['ho_ten'] ?>
                </div>
                <div style="width: 30%;" class="product-items">
                    <?= $bl['noi_dung'] ?>
                </div>
                <div style="width: 20%;" class="product-items">
                    <?= $bl['ma_sp'] ?>
                </div>
                <div style="width: 15%;" class="product-items">
                    <?= $bl['ngay_bl'] ?>
                </div>
                <div style="width: 15%;" class="product-items">
                    <a onclick="return confirm('Bạn có thực sự muốn xóa');"
                        href="index.php?btn=del_bl&id=<?= $bl['ma_bl'] ?>">
                        <input type="button" value="Delete" class="operation"></a>
                </div>
            </div>
            <?php
            $i++;
        }
        ?>

    </div>

</main>
</div>