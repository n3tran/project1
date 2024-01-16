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
        <h3 style="color: #12d275; margin-left: 70px">
            <?php if (isset($thongbao)) {
                echo $thongbao;
            }
            ?>
        </h3>

        <div class="product_items">
            <form action="index.php?btn=add_dm" method="post">

                <div class="content_items" style="margin: 10px 70px;">
                    <div class="input-group">
                        <input required="" type="text" name="id_dm" autocomplete="off" class="items_input" disabled>
                        <label class="user-label">Mã Danh Mục</label>
                    </div>

                    <div class="input-group" style="margin-left: 60px;">
                        <input  type="text" name="tenloai" autocomplete="off" class="items_input">
                        <label class="user-label">Tên Danh Mục</label>
                             <p class="error">
                    <?php if (isset($error)) {
                        echo $error;
                    }
                    ?>
                </p>
                    </div>

                </div>

                <div class="" style="margin-left: 70px; margin-top: 40px;">
                    <input type="submit" name="add_new" value="Thêm Danh Mục" class="btn_submit" style="border: none;">
                    <input type="reset" value="Nhập Lại" class="btn_submit">
                    <a href="index.php?btn=list_dm"><input type="button" name="list_dm" value="Danh Sách" class="btn_submit" style="border: none;"></a>
                </div>

           
            </form>
        </div>
    </div>
</main>
</div>