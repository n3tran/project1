<main>
    <div class="logo">

        <img src="../img/image(1269)_preview_rev_1 (1).png" alt="">
    </div>
    <div class="page_sign_up">
        <div class="sign_up">
            <div class="sign-title">
                <h2>
                    Cập Nhật Tài Khoản
                </h2>
            </div>
            <?php
            if (is_array($user) && isset($user)) {
                extract($user);
                // echo "<pre>";
                // print_r($user['province_id']);
                // echo "</pre>";
                $city = name_province($user['province_id']);
                $huyen = name_district( $user['district_id']);
                $xa = name_wards($user['wards_id']);
                $address = $dia_chi.', '.$xa['name'].', '.$huyen['name'].', '.$city['name'];
            }
            ?>
            <form action="index.php?btn=update_user" method="post" class="form_sign_up">
                <div class="items_sign_up">
                    <div class="input-group">
                        <input required="" type="text" name="email" autocomplete="off" class="input-items" value="<?= $email ?>">
                        <label class="user-label">Email</label>
                        <!-- <p class="error">Email của bạn nhập không đúng &#9888 </p> -->
                    </div>
                    <div class="input-group">
                        <input required="" type="text" name="name_tk" autocomplete="off" class="input-items" value="<?= $ho_ten ?>">
                        <label class="user-label">Họ tên</label>
                        <!-- <p class="error">Email của bạn nhập không đúng &#9888 </p> -->
                    </div>
                </div>
                <div class="items_sign_up">
                    <div class="input-group">
                        <input required="" type="text" name="phone" autocomplete="off" class="input-items" value="<?= $sdt ?>">
                        <label class="user-label">Số điện thoại</label>
                        <!-- <p class="error">Email của bạn nhập không đúng &#9888 </p> -->
                    </div>
                    <div class="input-group">
                        <input required="" type="password" name="pass_word" autocomplete="off" class="input-items" value="<?= $mat_khau ?>">
                        <label class="user-label">Pass word</label>
                        <!-- <p class="error">Email của bạn nhập không đúng &#9888 </p> -->
                    </div>
                </div>
                <div >
               
                        <input type="hidden" name="province"  value="<?=$province_id ?>">

                  
                        <input type="hidden" name="district" value=<?=$district_id?>>

                        <input type="hidden" name="ward" value="<?=$wards_id?>">

                
                </div>
                <div class="items_sign_up">
                    <div class="input-group">
                        <input required="" type="text" name="address" autocomplete="off" class="input-items" style="width: 490px; margin-top: 0;" value="<?= $address ?>">
                        <label class="user-label">Địa Chỉ</label>
                        <!-- <p class="error">Email của bạn nhập không đúng &#9888 </p> -->
                    </div>
                    <div class="input-group ">
                        <p>Vai trò</p>
                        <input type="number" name="vai_tro" class="role" value="<?= $vai_tro ?>" max="1" min="0">
                        <?php
                        if (isset($errors)) {
                            echo $errors;
                        }
                        ?>
                    </div>
                </div>
                <?php
                if (isset($thong_bao)) {
                    echo  $thong_bao;
                }
                ?>
                <div class="account_sign">
                    <input required="" type="hidden" name="ma_tk" value="<?= $ma_tk ?>" class="input-items">
                    <a href="" class="sign_in">
                        <input type="submit" value="Cập Nhật" name="update_tk">
                    </a>
                    <a href="index.php?btn=exit" class="sign_in">
                        <input type="button" value="Đăng Xuất">
                    </a>
                </div>
            </form>
        </div>
    </div>
</main>