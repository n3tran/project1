<main>
    <div class="order">
        <div class="order_items">
            <div class="content-product">

                <div style="width: 20%;" class="product-title">Tên sản Phẩm</div>
                <div style="width: 15%;" class="product-title">sản Phẩm</div>
                <div style="width: 10%;" class="product-title">Số Lượng</div>
                <div style="width: 15%;" class="product-title">Đơn Giá</div>
                <div style="width: 15%;" class="product-title">Giá Phải Trả </div>
                <div style="width: 10%;" class="product-title">Size</div>
                <div style="width: 15%;" class="product-title">Loại</div>
            </div>


            <?php
            foreach ($dh_ct as $list) {
                // echo "<pre>";
                // print_r($list);
                // echo "</pre>";
                $hinhpath = '<img src="img/' . $list['11'] . '" alt="" style="width: 100px;">';

                if (!$list['11'] == "") {
                    $hinh = $hinhpath;
                } else if ($list['11'] == "") {
                    $hinh = 'no photo';
                }
                $sum = $list['5'] * $list['3'];

                ?>
                <div class="content-product" style="background-color: white; height: 150px;">
                    <div style="width: 20%;" class="order-title">
                        <?= $list['8'] ?>
                    </div>
                    <div style="width: 15%; height: 100px;" class="order-title">
                        <?= $hinh ?>
                    </div>
                    <div style="width: 10%;" class="order-title">
                        <?= $list['5'] ?>
                    </div>
                    <div style="width: 15%;" class="order-title">
                        <?= number_format($list['3'], 0, '.', '.') ?> VND
                    </div>
                    <div style="width: 15%;" class="order-title">
                        <?= number_format($sum, 0, '.', '.') ?>VND
                    </div>
                    <div style="width: 10%;" class="order-title">
                        <?= $list['4'] ?>
                    </div>
                    <div style="width: 15%;" class="order-title">
                        <?= $list['19'] ?>
                    </div>

                </div>



                <?php
            }

            ?>
            <?php

            foreach ($tt_dh as $list_dh) {

                if ($list['1'] == $list_dh['0']) {


                    ?>
                    <!-- <div class=" btn_other_products" style="justify-content: flex-end;">
                        <button>Tổng:
                            <?= number_format($list_dh['6'] - 30000, 0, '.', '.') ?> VN
                            D
                        </button>
                    </div>
                    <div class=" btn_other_products" style="justify-content: flex-end;margin-top: 20px;">
                        <button>Ship :
                            <?= number_format(30000, 0, '.', '.') ?> VN
                            D
                        </button>
                    </div> -->
                    <div class=" btn_other_products" style="justify-content: flex-end;margin-top: 20px;">
                        <button>Tổng :
                            <?= number_format($list_dh['6'], 0, '.', '.') ?> VND
                        </button>
                    </div>
                    <?php
                }
            }
            ?>
            <!--  -->
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