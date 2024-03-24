
<main>
    <div class="logo">
        <img src="../img/image(1269)_preview_rev_1 (1).png" alt="">
    </div>
    <div class="content">
        <div class="product_title">
            <h1>
                Thêm Danh Mục Sản Phẩm
            </h1>
        </div>
        <?php

        if(is_array($dm) && isset($dm)){
            extract($dm);
        }
        
        ?>
        <div class="product_items">
            <form action="index.php?btn=update" method="post">
                <div class="content_items" style="margin: 10px 70px;">
                    <div class="input-group">
                    <input type="hidden" name="ma_loai" value="<?php
                        if(isset( $ma_loai) &&  ($ma_loai > 0)){
                            echo  $ma_loai;
                        }
                        ?>">
                        <input  type="text"  autocomplete="off" class="items_input" readonly  >
                        <label class="user-label">Mã Danh Mục</label>
                    </div>

                    <div class="input-group" style="margin-left: 60px;">
                        <input required="" type="text" name="name_dm" autocomplete="off" class="items_input" value="<?php
                        if(isset($ten_loai) && ($ten_loai != "")){
                            echo $ten_loai;
                        }
                        ?>">
                        <label class="user-label">Tên Danh Mục</label>
                    </div>
                </div>
                <p>
                    <?php
                    if(isset($thong_bao)){
                        echo  $thong_bao;
                    }
                    ?>
                </p>
                <div class="" style="margin-left: 70px; margin-top: 40px;">
          
                    <input type="submit" name="update_new" value="Cập Nhật" class="btn_submit" style="border: none;">
                    <input type="reset" value="Nhập Lại" class="btn_submit">
                    <a href="index.php?btn=list_dm"><input type="button" name="list_dm" value="Danh Sách" class="btn_submit" style="border: none;"></a>
                </div>
            </form>
        </div>
    </div>
</main>
</div>