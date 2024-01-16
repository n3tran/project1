<?php
$checkboxes = array();

?>
<main>
    <div class="container detail_product  mg_bottomall">
        <div class="box_leftproduct">
        <div class="select_price">
                <form action="index.php?btn=product" method="post">
                    <select name="filter_price" id="" onchange="this.form.submit()">
                        <option value="0" <?php if (isset($_POST['filter_price']) && $_POST['filter_price'] == 0) {
                                                if ($_POST['filter_price'] == 0) {
                                                    echo "selected";
                                                }
                                            } ?>>Toàn bộ sản phẩm</option>
                        <option value="1" <?php if (isset($_POST['filter_price']) && $_POST['filter_price'] == 1) {
                                                if ($_POST['filter_price'] == 1) {
                                                    echo "selected";
                                                }
                                            } ?>>Giá tăng dần</option>
                        <option value="2" <?php if (isset($_POST['filter_price']) && $_POST['filter_price'] == 2) {
                                                echo "selected";
                                            }
                                            ?>>Giá giảm dần</option>
                </form>
                </select>
                <?php

                ?>
            </div>
            <div class="box_listdm">
                <div class="box_tendanhmuc">
                    <h4>Danh mục sản phẩm</h4>
                </div>
                <?php
                foreach ($list_dm as $dm) {
                    extract($dm);
                    echo '<a href="index.php?btn=product&iddm=' . $ma_loai . '" class="size_dm">' . $ten_loai . '</a><br>';
                }
                ?>
                </script>


            </div>
            <div class="box_listdm">
                <div class="box_tendanhmuc">
                    <h4>Kích thước</h4>
                </div>

                <?php
                for ($i = 38; $i < 43; $i++) {

                    echo '  <a href="index.php?btn=product&&size=' . $i . '" class="size_dm"> Size: ' . $i . '</a><br>';
                }
                ?>


            </div>
            
        </div>
        <div class="box_rightproduct">

            <?php
            if (isset($_GET['iddm']) && $_GET['iddm'] != 0) {
            ?>
                <h4>Danh mục sản phẩm:
                    <span>
                        <?=
                        $laydm['ten_loai'];
                        ?>
                    </span>
                </h4>
                <?php
            } elseif (isset($_POST['search'])) {
                if (isset($thongbao_search)) {
                ?>
                    <h4>
                        <span>
                            <?=
                            $thongbao_search;
                            ?>
                        </span>
                    </h4>

                <?php
                } else {
                ?>
                    <h4>
                        Từ khóa tìm kiếm:
                        <span>
                            <?php
                            if (isset($keyword)) {
                                echo $keyword;
                            } else {
                                echo "Không có từ khóa";
                            }
                            ?>
                        </span>
                    </h4>
                <?php
                }
                ?>
            <?php
            } elseif (isset($_GET['size']) && $_GET['size']) {
            ?>
                <h4>Size tìm kiếm:
                    <span>
                        <?=
                        $_GET['size'];
                        ?>
                    </span>
                </h4>
            <?php
            } else {
            ?>
                <h4>
                    <span>
                        Toàn bộ sản phẩm
                    </span>
                </h4>
            <?php
            }
            ?>


        
            <div class="product mg_topall">
                <div class="box-products" style="  grid-row-gap: 30px;grid-column-gap:40px ; grid-template-columns: auto auto auto ;">
                    <?php
                    foreach ($list_sp as $sp) {
                        extract($sp);
                        $numbers = number_format($gia_sp, "0", ".", ".");
                        echo '<div class="items-product">
                                <a href="index.php?btn=sp_detail&id=' . $ma_sp . '"> <img src="img/' . $hinh_sp . '" alt=""></a>
                                <div class="text">
                                    <p>' . $ten_sp . '</p>
                                    <span>' . $numbers . ' VND</span>
                                </div>
                                 <a class="view" href="index.php?btn=sp_detail&id=' . $ma_sp . '"><i class="fa-solid fa-eye"> View</i></a>
                            </div>';
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</main>