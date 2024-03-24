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
                        <input type="text" name="city" class="input-items" id="city">
                        <label class="user-label">Thành Phố</label>
                        <?php
                        if (!empty(  $errors['city'])) {
                            echo '<p class="error">' .   $errors['city'] . '</p>';
                        }
                        ?>
                    </div>
                    <div class="input-group">
                        <input type="text" name="district" class="input-items" id="district">
                        <label class="user-label">Quận/Huyện</label>
                        <?php
                        if (!empty( $errors['district'])) {
                            echo '<p class="error">' .  $errors['district'] . '</p>';
                        }
                        ?>
                    </div>
                    <div class="input-group">
                        <input type="text" name="ward" class="input-items" id="ward">
                        <label class="user-label">Xã/Phường</label>
                        <?php
                        if (!empty($errors['ward'])) {
                            echo '<p class="error">' . $errors['ward'] . '</p>';
                        }
                        ?>
                    </div>
                </div>
                <div class="input-group" style="margin-top: 20px;">
                    <input type="text" name="address" class="input-items" style="width: 690px; margin-top: 0;height: 50px;">
                    <label class="user-label">Địa Chỉ</label>
                    <?php
                    if (!empty($errors['address'])) {
                        echo '<p class="error">' . $errors['address'] . '</p>';
                    }
                    ?>
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
        <!-- <select class="form-select form-select-sm mb-3" id="city" aria-label=".form-select-sm" name="city">
            <option value="" selected>Chọn tỉnh thành</option>
        </select>

        <select class="form-select form-select-sm mb-3" id="district" aria-label=".form-select-sm" name="district">
            <option value="" selected>Chọn quận huyện</option>
        </select>

        <select class="form-select form-select-sm" id="ward" aria-label=".form-select-sm" name="ward">
            <option value="" selected>Chọn phường xã</option>
        </select>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script>
        var citis = document.getElementById("city");
        var districts = document.getElementById("district");
        var wards = document.getElementById("ward");
        var Parameter = {
            url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
            method: "GET",
            responseType: "application/json",
        };
        var promise = axios(Parameter);
        promise.then(function(result) {
            renderCity(result.data);
        });

        function renderCity(data) {
            for (const x of data) {
                citis.options[citis.options.length] = new Option(x.Name, x.Id);
            }
            citis.onchange = function() {
                district.length = 1;
                ward.length = 1;
                if (this.value != "") {
                    const result = data.filter(n => n.Id === this.value);

                    for (const k of result[0].Districts) {
                        district.options[district.options.length] = new Option(k.Name, k.Id);
                    }
                }
            };
            district.onchange = function() {
                ward.length = 1;
                const dataCity = data.filter((n) => n.Id === citis.value);
                if (this.value != "") {
                    const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

                    for (const w of dataWards) {
                        wards.options[wards.options.length] = new Option(w.Name, w.Id);
                    }
                }
            };
        }
    </script> -->


</main>