<main>
    <div class="my_account">
        <div class="category_account">
            <ul class="li"><a href="index.php?btn=edit_acount">Thông Tin Cá Nhân</a></ul>
            <ul class="li"><a href="index.php?btn=edit_password">Đổi Mật Khẩu</a></ul>
            <ul class="li"><a href="index.php?btn=exit">Đăng Xuất</a></ul>
        </div>
        <div class="content_account">
            <form action="index.php?btn=update_pass" method="post">

                <div class="input-group">
                    <input type="password" name="pass_word_old" autocomplete="off" class="input-items" value="">
                    <label class="user-label">Mật Khẩu Cũ</label>
                    <?php
                    if (!empty($errors['pass_word_cu'])) {
                        echo '<p class="error">' . $errors['pass_word_cu'] . '</p>';
                    }
                    
                    ?>
                </div>
                <div class="input-group">
                    <input type="password" name="new_pass_word" autocomplete="off" class="input-items" value="">
                    <label class="user-label">Mật Khẩu Mới</label>
                    <?php
                    if (!empty($errors['pass_word_moi'])) {
                        echo '<p class="error">' . $errors['pass_word_moi'] . '</p>';
                    }
                    ?>
                </div>
                <div class="input-group">
                    <input type="password" name="pass_word" autocomplete="off" class="input-items" value="">
                    <label class="user-label">Nhập Lại Mật Khẩu</label>
                    <?php
                    if (!empty($errors['pass_word_moi'])) {
                        echo '<p class="error">' . $errors['pass_word_moi'] . '</p>';
                    };
                    ?>
                </div>

                <div class="account_sign">
                    <a href="" class="sign_in">
                        <input type="submit" value="Cập Nhật" name="update_pw">
                    </a>
                    <?php
                    if (isset($thong_bao) && ($thong_bao != "")) {
                        echo $thong_bao;
                    }
                    ?>
                </div>

            </form>
        </div>
    </div>
</main>