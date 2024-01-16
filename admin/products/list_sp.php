<main>
    <a href="/DuAn1-main/img/"></a>
    <div class="logo">

        <img src="../img/image(1269)_preview_rev_1 (1).png" alt="">
    </div>
    <form class="form_seach" action="index.php?btn=list_sp" method="post">
        <div class="seach">
            <i class=" seach_icon fa-sharp fa-solid fa-magnifying-glass"></i>
            <input type="text" name="kyw" placeholder="Tìm sản phẩm"
                onkeydown="if (event.keyCode == 13) { this.form.submit(); }">
        </div>
        <select name="chon_dm" id="" onchange="this.form.submit()">
            <option value="0">Chọn</option>
            <?php
            foreach ($list_dm as $dm) {
                extract($dm);
                echo '<option value="' . $ma_loai . '">' . $ten_loai . '</option>';
            }
            ?>
        </select>

    </form>
    <?php

    ?>
    <div class="content">
        <div class="content-product">
            <div style="width: 5%;" class="product-title">STT</div>
            <div style="width: 10%;" class="product-title">Tên Loại</div>
            <div style="width: 20%;" class="product-title">Tên Sản Phẩm</div>
            <div style="width: 10%;" class="product-title">Giá</div>
            <div style="width: 10%;" class="product-title">Size</div>
            <div style="width: 20%;" class="product-title">Hình Ảnh</div>
            <div style="width: 5%;" class="product-title">Số Lượng</div>
            <div style="width: 20%;" class="product-title">Thao Tác</div>
        </div>
        <?php
        $confilm = "return confirm('Bạn có chắc chắn muốn xóa')";
        $film_edit = "return confirm('Bạn có chắc chắn muốn sửa')";
        $i = 1;
        foreach ($list_sp as $sp) {
            extract($sp);
            $size = loadone_sizesp($sp['ma_sp']);
            $hinhpath = '<img src="../img/' . $hinh_sp . '" alt="" style="width: 100px;">';
            if (!$hinh_sp == "") {
                $hinh = $hinhpath;
            } else if ($hinh_sp == "") {
                $hinh = 'no photo';
            }
            ?>
            <div class="content-product">
                <div style="width: 5%;" class="product-items">
                    <?= $i ?>
                </div>
                <div style="width: 10%;" class="product-items">
                    <?php echo $sp['ten_loai'];
                    //  if (isset($dm) && $dm != "") {
                    //     echo $dm[1];
                    // } else {
                    //     $sp['ten_loai'];
                    // } ?>
                </div>

                <div style="width: 20%;" class="product-items">
                    <?= $sp['ten_sp'] ?>
                </div>
                <div style="width: 10%;" class="product-items">
                    <?= number_format($sp['gia_sp'], "0", ".", ".") ?> VND
                </div>

                <div style="width: 10%;" class="product-items">
                    <?php
                    foreach ($size as $sizes) {
                        echo $sizes[2] . " ";
                    }
                    ?>
                </div>
                <div style="width: 20%;" class="product-items">
                    <?= $hinh ?>
                </div>
                <?php $sl = sum($sp['ma_sp']) ?>
                <div style="width: 5%;" class="product-items">
                    <?php if (!empty($sl['sl'])) {
                        echo $sl['sl'];
                    } else {
                        echo '<p> Chưa có số lượng </p>';
                    }

                    ?>
                </div>
                <div style="width: 20%;" class="product-items">
                    <a href="index.php?btn=edit_sp&id=<?= $sp['ma_sp'] ?>">
                        <input type="button" value="Edit" class="operation" onclick="<?= $film_edit ?>">
                    </a> |
                    <a href="index.php?btn=del_sp&id=<?= $sp['ma_sp'] ?>">
                        <input type="button" value="Delete" class="operation" onclick="<?= $confilm ?>">
                    </a>
                </div>
            </div>
            <?php
            $i += 1;
        }
        ?>

    </div>

    <div style="display: flex; justify-content: space-between;">
        <div class="" style="margin-left: 60px; margin-bottom: 20px;">
            <a href="index.php?btn=add_sp"><input type="submit" name="add_new" value="Thêm Sản Phẩm" class="btn_submit"
                    style="border: none;"></a>

        </div>
        <?php
        $per_page = 9;
        if (isset($_GET['page']) && ($_GET['page'] > 0)) {
            $sp_page = 9;
            $page = $_GET['page'];
            $offset = ($page - 1) * $sp_page;
            $conn = mysqli_connect('localhost', 'root', '', 'project_duan1');
            $sum = mysqli_query($conn, "SELECT * FROM `san_pham` WHERE `ma_loai`");
            $sum = $sum->num_rows;
            $sum_page = ceil($sum / $sp_page);
            $list_sp = loadAll_spadmin($sp_page, $offset);
        } else {
            $sp_page = 9;
            $page = 1;
            $offset = ($page - 1) * $sp_page;
            $conn = mysqli_connect('localhost', 'root', '', 'project_duan1');
            $sum = mysqli_query($conn, "SELECT * FROM `san_pham` WHERE `ma_loai`");
            $sum = $sum->num_rows;
            $sum_page = ceil($sum / $sp_page);
            $list_sp = loadAll_spadmin($sp_page, $offset);
        }
        ?>
        <div class="paging_items">

            <?php
            if ($page > 1) {
                $prev_page = $page - 1;
                echo ' <a class="paging_left" href="index.php?btn=per_page&page=' . $prev_page . '" ><i class="fa-solid fa-chevron-right fa-rotate-180"></i></a>';
            }
            for ($sum = 1; $sum <= $sum_page; $sum++) {
                if ($sum != $page) {
                    if ($sum > $page - 2 && $sum < $page + 2) {
                        echo '
                        <a class="paging_page" onclick="changePage(1)" href="index.php?btn=per_page&page=' . $sum . '">' . $sum . '</a>
                      ';
                    }
                } else {
                    echo '<a class="active_items " >' . $sum . '</a>';
                }
            }
            if ($page < $sum_page - 1) {
                $next_page = $page + 1;
                echo ' <a class="paging_right" href="index.php?btn=per_page&page=' . $next_page . '" ><i class="fa-solid fa-chevron-right"></i></a>';
            }
            ?>

        </div>
    </div>






    </div>

</main>
</div>