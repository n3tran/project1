<main>
    <div id="banner" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#banner" data-slide-to="0" class="active"></li>`
            <li data-target="#banner" data-slide-to="1"></li>
            <li data-target="#banner" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/banner1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/banner-3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/banner3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#banner" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#banner" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
    <div class="container">
        <div class="category">
            <div class="box_category">
                <img src="img/nhung-hinh-anh-va-hinh-nen-air-jordan-1-dep-nhat-3-1.jpeg" alt="">
                <div class="title_box_category">
                    <h3>
                        GIÀY JORDAN
                    </h3>
                    <p>
                        XEM THÊM
                    </p>
                </div>
            </div>
            <div class="box_category">
                <img src="img/mlb-1.webp" alt="">
                <div class="title_box_category">
                    <h3>
                        GIÀY MLB
                    </h3>
                    <p>
                        XEM THÊM
                    </p>
                </div>
            </div>
            <div class="box_category">
                <img src="img/7810d198d188d891308c8e0654cda1fa.jpg" alt="">
                <div class="title_box_category">
                    <h3>
                        GIÀY ADIDAS
                    </h3>
                    <p>
                        XEM THÊM
                    </p>
                </div>
            </div>
            <div class="box_category">
                <img src="img/nike-tung-hinh-quang-cao-dep-me-hon-5.jpg" alt="">
                <div class="title_box_category">
                    <h3>
                        GIÀY NIKE
                    </h3>
                    <p>
                        XEM THÊM
                    </p>
                </div>
            </div>
        </div>

        <div class="product" id="gaquatroi">
            <div class="product_title">
                <h1>
                    <hr class="before" width="250px" align="left" color="black" size="4px">
                    <span>Top 10 Sản Phẩm </span>
                    <hr class="after" width="250px" align="right" color="black" size="4px">
                </h1>
                <h5>
                    <i> Khuyến Mãi Cuối Tuần</i>
                </h5>
            </div>
            <div class="container">
                <div class="box-products">
                    <?php
                    foreach ($sptop10 as $top10) {
                        extract($top10);
                        $hinh = 'img/' . $hinh_sp;
                        echo '<div class="items-product">
                        <a href="index.php?btn=sp_detail&id=' . $ma_sp . '"> <img src="' . $hinh . '" alt=""></a>
                        <div class="text">
                            <p>' . $ten_sp . '</p>
                            <span>' . number_format($gia_sp, 0, ".", ".") . ' VND</span>
                        </div>
                        <a class="view" href="index.php?btn=sp_detail&id=' . $ma_sp . '"><i class="fa-solid fa-eye"> View</i></a>    
                        </div>';
                    }
                    ?>

                </div>
            </div>
        </div>

        <div class="other_products">
            <div class="product_title">
                <h1>
                    <hr class="before" width="250px" align="left" color="black" size="4px">
                    <span>Sản Phẩm Nổi Bật</span>
                    <hr class="after" width="250px" align="right" color="black" size="4px">
                </h1>
                <h5>
                    <i> Khuyến Mãi Cuối Tuần</i>
                </h5>
            </div>

            <div class="btn_other_products">
                <?php
                foreach ($dsdm as $dm) {
                    extract($dm);
                    echo '<a href="index.php?btn=product&iddm=' . $ma_loai . '" style=" margin: 0 10px ;"><button>
                    ' . $ten_loai . '
                    </button></a>';
                }

                ?>
            </div>
            <div class="box-products">
                <?php
                foreach ($spnew as $sp) {
                    extract($sp);
                    $numbers = number_format($gia_sp, "0", ".", ".");
                    $hinh = 'img/' . $hinh_sp;
                    echo '<div class="items-product">
                        <a href="index.php?btn=sp_detail&id=' . $ma_sp . '"> <img src="' . $hinh . '" alt=""></a>
                        <div class="text">
                            <p>' . $ten_sp . '</p>
                            <span>' .  $numbers . ' VND</span>
                        </div>
                            <a class="view" href="index.php?btn=sp_detail&id=' . $ma_sp . '""><i class="fa-solid fa-eye"> View</i></a>
                        </div>';
                }
                ?>

            </div>






        </div>
    </div>
</main>