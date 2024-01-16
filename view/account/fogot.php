<main>
    <div class="forgot_password">
        <form action="index.php?btn=forgot_password" method="post" class="forgot_pw">
            <p class="error">
                <?php

                if (isset($thong_bao) && ($thong_bao != "")) {
                    echo $thong_bao;
                }
                ?>
            </p>
            <div class="forgot_password_items">
                <div class="input-group">
                    <input required type="email" name="email" autocomplete="off" class="input-items">
                    <label class="user-label">Email</label>
                    <?php 
                        if(isset($errors['email'])){
                            echo $errors['email'];
                        }
                    ?>
                    <!-- <p class="error">Email của bạn nhập không đúng &#9888  </p> -->
                </div>


            </div>
            <div class="btn_send" style="margin: 20px auto;">
                <!-- <button > -->
                <input class="send_items" type="submit" name="send" value="Gửi">
                <!-- </button> -->
            </div>
        </form>
    </div>

    </div>
</main>