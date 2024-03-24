<main>
    <div class="sign_in">
        <div class="sign-items">
            <div class="sign-title">
                <h2>
                    Đăng Nhập
                </h2>
            </div>
            <div class="strikethrough"></div>

            <form action="index.php?btn=sign_in" method="post" class="sign_form">
                <div class="input-group">
                    <input type="email" name="email" autocomplete="off" class="input-items">
                    <label class="user-label">Email</label>
                    <?php
                    if (!empty($errors['email'])) {
                        echo '<p class="error">' . $errors['email'] . '</p>';
                    }

                    ?>
                </div>

                <div class="input-group" style="margin-bottom: 0;">
                    <input type="password" name="password" autocomplete="off" class="input-items" id="show_pass">
                    <label class="user-label">Pass Word</label>
                    <?php
                    if (!empty($errors['pass_word'])) {
                        echo '<p class="error">' . $errors['pass_word'] . '</p>';
                    }
                    ?>
                </div>


                <div class="forgot">
                    <div class="show">
                        <input type="checkbox" onclick="ShowPassword()"> Show Pass Word
                    </div>

                    <div class="forgot_items">
                        <a href="index.php?btn=forgot_password">
                            <p>Quên Mật Khẩu ???</p>
                        </a>
                    </div>

                </div>
                <p class="error">
                    <?php
                    if (isset($thong_bao) && ($thong_bao != "")) {
                        echo $thong_bao;
                    }
                    ?>
                </p>
                <div class="account_sign">
                    <a href="" class="sign_in">
                        <input type="submit" value="Đăng Nhập" name="signin">
                    </a>
                    <a href="index.php?btn=sign_up" class="sign_up">
                        <input type="button" value="Tạo Tài Khoản Mới">
                    </a>
                </div>
            </form>
        </div>
    </div>
    <script>
        function ShowPassword() {
            let show = document.getElementById("show_pass");
            if (show.type == "password") {
                show.type = "text";
            } else {
                show.type = "password";
            }
        }
    </script>
</main>