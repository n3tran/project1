<main>
    <div class="logo">

        <img src="../img/image(1269)_preview_rev_1 (1).png" alt="">
    </div>
    <div class="content">
        <div class="content-product">
            <div style="width: 15%;" class="product-title">STT</div>
            <div style="width: 25%;" class="product-title">MÃ Danh Mục</div>
            <div style="width: 35%;" class="product-title">Tên Danh Mục</div>
            <div style="width: 25%;" class="product-title">Thao Tác</div>
        </div>
        <?php
        $confilm = "return confirm('Bạn có chắc chắn muốn xóa')";
        $film_edit = "return confirm('Bạn có chắc chắn muốn sửa')";
        $sum = 1;
        foreach ($list_dm as $list_one) {
            extract($list_one);
            $edit = "index.php?btn=edit&ma_loai=" . $ma_loai;
            $delet = "index.php?btn=delet_dm&ma_loai=" . $ma_loai;
            echo '
            <div class="content-product">
            <div style="width: 15%;" class="product-items">'.$sum++.'</div>
            <div style="width: 25%;" class="product-items">' . $ma_loai . '</div>
            <div style="width: 35%;" class="product-items">' . $ten_loai . '</div>
            <div style="width: 25%;" class="product-items"> <a href="' . $edit . '"><input type="button" value="Edit" class="operation" onclick="' . $film_edit . '" ></a> | <a href="' . $delet . '"><input type="button" value="Delete" class="operation"  onclick="' . $confilm . '" ></a></div>
            </div>
                 ';

        }
        ?>



        <div class="" style="margin-left: 70px; margin-bottom: 40px;">
            <a href="index.php?btn=add_dm"><input type="submit" name="add_new" value="Thêm Danh Mục" class="btn_submit" style="border: none;"></a>

        </div>
    </div>

</main>
</div>