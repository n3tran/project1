<main>
    <div class="logo">
        <img src="../img/image(1269)_preview_rev_1 (1).png" alt="">
    </div>

    <div class="content">
        <p class="notification">
            <?php
            if (isset($thong_bao)) {
                echo $thong_bao;
            }
            ?>
        </p>
        <div class="content-product">
            <div style="width: 5%;" class="product-title">STT</div>
            <div style="width: 15%;" class="product-title">Tên khách hàng</div>
            <div style="width: 30%;" class="product-title">Nội Dung</div>
            <div style="width: 20%;" class="product-title">Mã sản phẩm</div>
            <div style="width: 15%;" class="product-title">Ngày Bình Luận</div>
            <div style="width: 15%;" class="product-title">Thao Tác</div>
        </div>

        <?php
        $i = 1;
        // echo "<pre>";
        // print_r($tk_bl);
        // echo "</pre>";
        foreach ($tk_bl as $bl) {
        ?>
            <div class="content-product">
                <div style="width: 5%;" class="product-items">
                    <?= $i ?>
                </div>
                <div style="width: 15%;" class="product-items">
                    <?= $bl['ho_ten'] ?>
                </div>
                <div style="width: 30%;" class="product-items">
                    <?= $bl['noi_dung'] ?>
                </div>
                <div style="width: 20%;" class="product-items">
                    <?= $bl['ma_sp'] ?>
                </div>
                <div style="width: 15%;" class="product-items">
                    <?= $bl['ngay_bl'] ?>
                </div>
                <div style="width: 15%;" class="product-items">
                    <a onclick="return confirm('Bạn có thực sự muốn xóa');" href="index.php?btn=del_bl&id=<?= $bl['ma_bl'] ?>">
                        <input type="button" value="Delete" class="operation"></a>
                </div>
            </div>
        <?php
            $i++;
        }
        ?>

    </div>
    <?php
    // if (isset($_GET['page_bl']) && ($_GET['page_bl'] > 0)) {
    //     $sp_page = 10;
    //     $page = $_GET['page_bl'];
    //     $offset = ($page - 1) * $sp_page;
    //     $conn = mysqli_connect('localhost', 'root', '', 'project_duan1');
    //     $sum = mysqli_query($conn, "SELECT * FROM `binh_luan` ");
    //     $sum = $sum->num_rows;
    //     $sum_page = ceil($sum / $sp_page);
    //     $tk_bl = loadall_binhluan(0, $sp_page, $offset);
    // } else {
    //     $sp_page = 10;
    //     $page = 1;
    //     $offset = ($page - 1) * $sp_page;
    //     $conn = mysqli_connect('localhost', 'root', '', 'project_duan1');
    //     $sum = mysqli_query($conn, "SELECT * FROM `binh_luan` ");
    //     $sum = $sum->num_rows;
    //     $sum_page = ceil($sum / $sp_page);
    //     $tk_bl = loadall_binhluan(0, $sp_page, $offset);
    // }
    ?>
    <div class="paging_items">
        <!-- <a class="paging_left" href=""><i class="fa-solid fa-chevron-right fa-rotate-180"></i></a>
        <a class="paging_page" onclick="changePage(1)" href="">1</a>
        <a class="paging_page" onclick="changePage(1)" href="">2</a>
        <a class="paging_page" onclick="changePage(1)" href="">3</a>
        <a class="paging_right" href=""><i class="fa-solid fa-chevron-right"></i></a> -->
        <?php
            // if($page > 1){
            //     $prev_page = $page-1;
            //    echo' <a class="paging_left" href="index.php?btn=per_page&page_bl=' . $prev_page. '" ><i class="fa-solid fa-chevron-right fa-rotate-180"></i></a>';
            // }
            // for ($sum = 1; $sum <= $sum_page; $sum++) {
            //     if ($sum != $page) {
            //         if($sum > $page-2 && $sum < $page+3){
            //             echo '
            //             <a class="paging_page" onclick="changePage(1)" href="index.php?btn=per_page&page_bl=' . $sum . '">' . $sum . '</a>
            //           ';
            //         }
            //     } else {
            //         echo '<a class="active_items " >' . $sum . '</a>';
            //     }
            // }
            // if($page < $sum_page - 0){
            //    $next_page = $page + 1 ;
            //    echo' <a class="paging_right" href="index.php?btn=per_page&page_bl=' . $next_page. '" ><i class="fa-solid fa-chevron-right"></i></a>';
            // }
            ?>
    </div>

</main>
</div>