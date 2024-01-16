<!-- Start Footer -->
<footer>
    <div class="container footer_all">
        <div class="ft_category">
            <a href="#">
                <img src="img/image(1269)_preview_rev_1 (1).png" alt="">
            </a>
            <p>
                Thái Hòa, Triệu Sơn, Thanh Hóa
            </p>
            <p>
                Hienttph30200@fpt.edu.vn
            </p>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-google"></i>
            <i class="fa-brands fa-youtube"></i>
            <i class="fa-brands fa-square-instagram"></i>
        </div>
        <div class="ft_category">
            <h4>
                Danh Mục Nổi Bật
            </h4>
            <?php
            $dsdm = loadall_danhmuc();
            foreach ($dsdm as $dm) {
                extract($dm);
                ?>
                <a href="index.php?btn=product&iddm=<?= $dm['ma_loai'] ?>"><?= $dm['ten_loai'] ?></a>
                <!-- <p>Giày Nike</p>
                <p>Giày Jordan</p>
                <p>Giày Vans</p>
                <p>Giày MLB</p> -->
                <?php
            } ?>
        </div>
        <div class="ft_category">
            <h4>
                Chính sách công ty
            </h4>
            <p>Vận chuyển và giao hàng</p>
            <p>Chính sách bán hàng</p>
            <p>Liên Hệ với Hiền</p>
        </div>
        <div class="ft_category">
            <h4>
                Địa Chỉ Shop
            </h4>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14588.674990605203!2d105.606681!3d19.7667925!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3136fb182dad8681%3A0x9a3e26e542573e8!2zSMOyYSBZw6puLCBUaMOhaSBIw7JhLCBUcmnhu4d1IFPGoW4sIFRoYW5oIEhvw6E!5e1!3m2!1svi!2s!4v1688375583040!5m2!1svi!2s"
                width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</footer>
<!-- End Footer -->
</body>

</html>