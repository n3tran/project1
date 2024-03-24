<main>
    <div class="my_account">
        <div class="category_account">
            <ul class="li"><a href="index.php?btn=edit_acount">Thông Tin Cá Nhân</a></ul>
            <ul class="li"><a href="index.php?btn=edit_password">Đổi Mật Khẩu</a></ul>
            <ul class="li"><a href="index.php?btn=exit">Đăng Xuất</a></ul>
        </div>
        <div class="content_account">
            <?php
            if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
                extract($_SESSION['user']);
            }
            ?>
            <form action="index.php?btn=edit_acount" method="post" class="form_sign_up">
                <div class="items_sign_up">
                    <div class="input-group">
                        <input required="" type="text" name="email" autocomplete="off" class="input-items" value="<?= $email ?>">
                        <label class="user-label">Email</label>
                    </div>
                    <div class="input-group">
                        <input required="" type="text" name="name_tk" autocomplete="off" class="input-items" value="<?= $ho_ten ?>">
                        <label class="user-label">Họ tên</label>
                    </div>
                </div>
                <div class="items_sign_up">
                    <div class="input-group">
                        <input required="" type="text" name="phone" autocomplete="off" class="input-items" value="<?= $sdt ?>">
                        <label class="user-label">Số điện thoại</label>
                    </div>
                    <div class="input-group">
                        <input required="" type="password" name="pass_word" autocomplete="off" class="input-items" value="<?= $mat_khau ?>">
                        <label class="user-label">Pass word</label>
                    </div>
                </div>
                <div class="input-group">
                    <input required="" type="text" name="address" autocomplete="off" class="input-items" style="width: 690px; margin-top: 0;" value="<?= $dia_chi ?>">
                    <label class="user-label">Địa Chỉ</label>
                    <input type="hidden" name="vai_tro" value="<?= $vai_tro ?>">
                </div>
                <p>


                </p>
                <div class="account_sign">
                    <input required="" type="hidden" name="ma_tk" value="<?= $ma_tk ?>" class="input-items">
                    <a href="" class="sign_in">
                        <input type="submit" value="Cập Nhật" name="update_tk">
                    </a>
                </div>
            </form>
        </div>
    </div>
    </div>
</main>