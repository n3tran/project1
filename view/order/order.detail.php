<main>
    <div class="order">
        <div class="order_items">
            <div class="content-product">
                <div style="width: 10%;" class="product-title">Mã Đơn </div>
                <div style="width: 15%;" class="product-title">Người Nhận</div>
                <div style="width: 15%;" class="product-title">Số Lượng</div>
                <div style="width: 15%;" class="product-title">Tổng</div>
                <div style="width: 10%;" class="product-title">Ngày Đặt</div>
                <div style="width: 15%;" class="product-title">Trạng Thái</div>
                <div style="width: 20%;" class="product-title">Chi Tiết</div>
            </div>


            <?php
        //    echo "<pre>";
        //    print_r($_SESSION['buynow'][0][5]);
        //    echo "</pre>";
            foreach ($tt_dh as $dh) {
                $sl = so_luong_sp($dh['ma_order'] );
                $ma_order =  "index.php?btn=order_dt&ma_order=".$dh['ma_order'];
               
            ?>
                <div class="content-product" style="background-color: white;">
                    <div style="width: 10%;" class="order-title"><?= $dh['ma_order'] ?></div>
                    <div style="width: 15%;" class="order-title"><?= $dh['ho_ten'] ?></div>
                    <div style="width: 15%;" class="order-title"><?= $sl['tong'] ?></div>
                    <div style="width: 15%;" class="order-title"><?= number_format($dh['don_gia'], 0, '.', '.') ?> VND </div>
                    <div style="width: 10%;" class="order-title"><?= $dh['ngay_dat'] ?></div>
                    <div style="width: 15%;" class="order-title"><?= trangthai_donhang($dh['trang_thai']) ?></div>
                    <div style="width: 20%; padding: 0; " class="order-title btn_other_products " ><a href="<?=$ma_order ?>"><button>Chi Tiết</button></a></div>

                </div>
              
                     
            <?php
            }
            ?>
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
    </div>
</main>