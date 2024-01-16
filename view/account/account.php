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
                $city = name_province($province_id);
                $huyen = name_district($district_id);
                $xa = name_wards($wards_id);
                // $address = $dia_chi.', '.$xa['name'].', '.$huyen['name'].', '.$city['name'];
            
            }
            ?>
            <form action="index.php?btn=edit_acount" method="post" class="form_sign_up">
                <div class="items_sign_up">
                    <div class="input-group">
                        <input required="" type="text" name="email" autocomplete="off" class="input-items"
                            value="<?= $email ?>">
                        <label class="user-label">Email</label>
                    </div>
                    <div class="input-group">
                        <input required="" type="text" name="name_tk" autocomplete="off" class="input-items"
                            value="<?= $ho_ten ?>">
                        <label class="user-label">Họ tên</label>
                    </div>
                </div>
                <div class="items_sign_up">
                    <div class="input-group">
                        <input required="" type="text" name="phone" autocomplete="off" class="input-items"
                            value="<?= $sdt ?>">
                        <label class="user-label">Số điện thoại</label>
                    </div>
                    <div class="input-group">
                        <input required="" type="password" name="pass_word" autocomplete="off" class="input-items"
                            value="<?= $mat_khau ?>" disabled>
                        <label class="user-label">Pass word</label>
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
                            <?php
                            while ($list = mysqli_fetch_assoc($result)) {
                                ?>
                                <option value="<?php echo $list['province_id'] ?> " <?php if ($province_id == $list['province_id']) {
                                        echo 'selected';
                                    } ?>><?php echo $list['name'] ?>
                                </option>
                                <?php
                            }
                            ?>
                        </select>

                    </div>
                    <div class="input-group">
                        <!-- <input type="text" name="district" class="input-items" id="district">
                        <label class="user-label">Quận/Huyện</label> -->
                        <?php
                        $id = $_SESSION['user']['province_id'];
                        $sql = "SELECT * FROM `district` where `province_id` = '$id' ";
                        $result = mysqli_query($conn, $sql);
                        ?>
                        <select class="address" id="district" aria-label=".form-select-sm" name="district">
                            <option value="<?php
                            echo $district_id;

                            ?>" selected><?= $huyen['name'] ?></option>
                            <?php
                            while ($list = mysqli_fetch_assoc($result)) {
                                ?>
                                <option value="<?php echo $list['district_id'] ?>"><?php echo $list['name'] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input-group">
                        <!-- <input type="text" name="ward" class="input-items" id="ward">
                        <label class="user-label">Xã/Phường</label> -->
                        <?php
                        $id = $_SESSION['user']['district_id'];
                        $sql = "SELECT * FROM `wards` where `district_id` = '$id' and `wards_id` != '$wards_id' ";
                        $result = mysqli_query($conn, $sql);
                        ?>
                        <select class="address" id="wards" aria-label=".form-select-sm" name="wards">
                            <option value="<?php
                            echo $wards_id;
                            ?>" selected><?= $xa['name'] ?></option>
                            <?php
                            while ($list = mysqli_fetch_assoc($result)) {
                                ?>
                                <option value="<?php echo $list['wards_id'] ?>"><?php echo $list['name'] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="input-group">
                    <input required="" type="text" name="address" autocomplete="off" class="input-items"
                        style="width: 690px; margin-top: 0;" value="<?= $dia_chi ?>">
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