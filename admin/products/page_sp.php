<main>
    <div class="logo">
 
        <img src="../img/image(1269)_preview_rev_1 (1).png" alt="">
    </div>
    <div class="content">
        <div class="product_title">
            <h1>
                Thêm Sản Phẩm
            </h1>
        </div>
        <?php
        if(isset($thong_bao)){
            echo '  <h4 class="notification">'.$thong_bao.'</h4>';
        }
        ?>
      
        <div class="product_items">
            <form action="index.php?btn=add_sp" method="post" enctype="multipart/form-data">
                <div class="content_items">
                    <div class="">
                        <div style="margin-left: 60px;">

                          
                           
                        </div>

                        <div class="input-group" style="margin-left: 60px;">
                            <input  type="text" name="ten_sp" autocomplete="off" class="items_input">
                            <label class="user-label">Tên Sản Phẩm</label>
                            <?php
                            if(!empty($errors)){
                                echo '<h4 class="error">'.$errors.' </h4>';
                            }
                            ?>
                        </div>

                        <div class="input-group" style="margin-left: 60px;">
                            <input  type="text" name="gia_sp" autocomplete="off" class="items_input">
                            <label class="user-label">Giá Sản Phẩm</label>
                            <?php
                            if(!empty($errors)){
                                echo '<h4 class="error">'.$errors.' </h4>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="" style="margin-left: 60px;">
                    <label class="user-label">Loại</label>
                        <div class="input-group">
                        <p>Loại</p>
                        <select name="id_loai" id="">
                            <option value="">---Chọn---</option>
                                <?php
                                foreach ($list_dm as $dm) {
                                    extract($dm);
                                    echo '<option value="' . $ma_loai . '">' . $ten_loai . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="input-group">
                            <p>Hình ảnh Sản Phẩm</p>
                            <div class="">
                                <img src="" id="img" height="30px">
                            </div>
                            <input type="file" name="img" id="file_img " multiple>
                            <?php
                            if(!empty($errors)){
                                echo '<h4 class="error">'.$errors.' </h4>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="input-group" style="margin:0 60px;">
                    <p>Mô tả Sản Phẩm</p>
                    <textarea name="mo_ta" id="" cols="65" rows="10"></textarea>
                    <?php
                            if(!empty($errors)){
                                echo '<h4 class="error">'.$errors.' </h4>';
                            }
                            ?>
                </div>
                <div class="" style="margin-left: 60px; margin-top: 20px;">
                    <input type="submit" name="add_new" value="Thêm Sản Phẩm" class="btn_submit" style="border: none;">
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