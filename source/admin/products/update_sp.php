<?php
if (is_array($list_sp)) {
    extract($list_sp);
}
$hinhpath = "../img/" . $hinh_sp;
if (!$hinh_sp == "") {
    $hinh = '<img src="' . $hinhpath . '" alt="" style="width: 100px;">';
} else if ($hinh_sp == "") {
    $hinh = 'no photo';
}
?>
<main>
    <div class="logo">
    
        <img src="../img/image(1269)_preview_rev_1 (1).png" alt="">
    </div>
    <div class="content">
        <div class="product_title">
            <h1>
                Cập Nhật Sản Phẩm
            </h1>
        </div>
        <div class="product_items">
            <form action="index.php?btn=update_sp" method="post" enctype="multipart/form-data">
                <div class="content_items">
                    <div class="">
                        <div hidden class="input-group" style="margin-left: 60px;">
                            <input required="" type="text" name="ma_sp" autocomplete="off" class="items_input" value="<?= $ma_sp ?>">
                            <label class="user-label">Mã Sản Phẩm</label>
                            <!-- <p class="error">Bạn không để trống ô này &#9888;</p> -->
                        </div>

                        <div class="input-group" style="margin-left: 60px;">
                            <input required="" type="text" name="ten_sp" autocomplete="off" class="items_input" value="<?= $ten_sp ?>">
                            <label class="user-label">Tên Sản Phẩm</label>
                        </div>

                        <div class="input-group" style="margin-left: 60px;">
                            <input required="" type="text" name="gia_sp" autocomplete="off" class="items_input" value="<?= $gia_sp ?>">
                            <label class="user-label">Giá Sản Phẩm</label>
                        </div>
                        <div class="input-group" style="margin:0 60px;">
                            <p>Mô tả Sản Phẩm</p>
                            <textarea name="mo_ta" id="" cols="65" rows="10"><?= $mo_ta ?></textarea>
                        </div>
                    </div>
                    <div class="" style="margin-left: 60px;">

                        <div class="input-group">
                            <p>Chọn Loại</p>
                            <select name="id_loai" id="">
                                <?php

                                foreach ($list_dm as $dm) {
                                    extract($dm);
                                    if ($ma_loai == $list_sp['ma_loai']) {
                                        $selected = "selected";
                                    } else {
                                        $selected = "";
                                    }
                                    echo '<option  value="' . $ma_loai . '" ' . $selected . '>' . $ten_loai . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="variant">
                            <div class="variant_title">
                                <p>Size</p>
                                <p style="margin-left: 25px;">Số Lượng</p>
                            </div>
                            <?php
                            for ($i = 38; $i < 43; $i++) {
                                echo '<div class="variant_items">
                                <input type="checkbox" name= "size[]" value="' . $i . '" class="size">' . $i . '
                                <input type="number" name="so_luong_size[]" id="" style="margin-left: 20px;">
                            </div>';
                            }
                            ?>


                        </div>

                        <div class="input-group">
                            <p>Hình ảnh Sản Phẩm</p>
                            <div class="">
                                <img src="<?php echo $hinhpath ?>" id="img" height="30px">

                                <input type="file" name="img[]" id="file_img" multiple>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="" style="margin-left: 60px; margin-top: 20px;">
                    <input type="submit" name="update_new" value="Cập nhật" class="btn_submit" style="border: none;">
                    <input type="reset" value="Nhập Lại" class="btn_submit">
                    <a href="index.php?btn=list_sp"><input type="button" name="list_dm" value="Danh Sách" class="btn_submit" style="border: none;"></a>
                </div>
            </form>
        </div>
    </div>
    </div>
    <script>
        let img = document.getElementById('img');
        let fifile_imgle = document.getElementById('file_img');
        file_img.onchange = (e) => {
            if (file_img.files[0])
                img.src = URL.createObjectURL(file_img.files[0])
        }
    </script>
</main>
</div>