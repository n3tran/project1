<main>
    <div class="page_sign_up">
        <div class="sign_up">
            <div class="sign-title">
                <h2>
                    Đăng Ký
                </h2>
            </div>
            <p class="notification">
                <?php

                if (isset($thong_bao) && ($thong_bao != "")) {
                    echo $thong_bao;
                }
                ?>

            </p>
            <form action=" index.php?btn=sign_up " method="post" class="form_sign_up">
                <div class="items_sign_up">
                    <div class="input-group">
                        <input type="text" name="email" class="input-items" style="height: 50px;">
                        <label class="user-label">Email</label>
                        <?php
                        if (!empty($errors['email'])) {
                            echo '<p class="error">' . $errors['email'] . '</p>';
                        }

                        ?>
                    </div>
                    <div class="input-group">
                        <input type="text" name="name_tk" class="input-items" style="height: 50px;">
                        <label class="user-label">Họ tên</label>
                        <?php
                        if (!empty($errors['name_tk'])) {
                            echo '<p class="error">' . $errors['name_tk'] . '</p>';
                        }
                        ?>
                    </div>
                </div>
                <div class="items_sign_up">
                    <div class="input-group">
                        <input type="text" name="phone" class="input-items" style="height: 50px;">
                        <label class="user-label">Số điện thoại</label>
                        <?php
                        if (!empty($errors['phone'])) {
                            echo '<p class="error">' . $errors['phone'] . '</p>';
                        }
                        ?>
                    </div>
                    <div class="input-group">
                        <input type="text" name="pass_word" class="input-items" style="height: 50px;">
                        <label class="user-label">Pass word</label>
                        <?php
                        if (!empty($errors['pass_word'])) {
                            echo '<p class="error">' . $errors['pass_word'] . '</p>';
                        }
                        ?>
                    </div>
                </div>
                <div style="display: flex;">
                    <div class="input-group">
                        <?php
                        $conn = mysqli_connect('localhost', 'root', '', 'project_duan1');
                        $sql = "SELECT * FROM `province`";
                        $result = mysqli_query($conn, $sql);

                        ?>
                        <!-- <input type="text" name="city" class="input-items" id="city">
                        <label class="user-label">Thành Phố</label> -->
                        <select class="address" id="province" aria-label=".form-select-sm" name="province">
                            <option value="" selected>Chọn tỉnh thành</option>
                            <?php
                            while ($list = mysqli_fetch_assoc($result)) {
                            ?>
                                <option value="<?php echo $list['province_id'] ?> "><?php echo $list['name'] ?></option>
                            <?php
                            }
                            ?>
                        </select>

                    </div>
                    <div class="input-group">
                        <!-- <input type="text" name="district" class="input-items" id="district">
                        <label class="user-label">Quận/Huyện</label> -->

                        <select class="address" id="district" aria-label=".form-select-sm" name="district">
                            <option value="" selected>Chọn quận huyện</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <!-- <input type="text" name="ward" class="input-items" id="ward">
                        <label class="user-label">Xã/Phường</label> -->

                        <select class="address" id="wards" aria-label=".form-select-sm" name="ward">
                            <option value="" selected>Chọn phường xã</option>
                        </select>
                    </div>
                </div>

                <div class="input-group" style="margin-top: 20px;">
                    <input type="text" name="address" class="input-items" style="width: 690px; margin-top: 0;height: 50px;">
                    <label class="user-label">Địa Chỉ</label>
                </div>
                <div class="account_sign">
                    <a href="" class="sign_in">
                        <input type="submit" value="Đăng Ký" name="add_tk">
                    </a>

                </div>
            </form>
        </div>
    </div>
    <div>


</main>