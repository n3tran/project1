<main>
    <div class="logo"> <img src="../img/image(1269)_preview_rev_1 (1).png" alt="">
    </div>
    <div class="content">
        <h1 class="text-center">Thống kê daonh thụ theo danh mục</h1>
        <div class="content-product">
            <div style="width: 5%;" class="product-title">STT</div>
            <div style="width: 20%;" class="product-title">Tên Danh Mục</div>
            <div style="width: 20%;" class="product-title">Số Lượng sản phẩm bán ra</div>
            <div style="width: 15%;" class="product-title">Giá Thấp Nhất</div>
            <div style="width: 15%;" class="product-title">Giá Cao Nhất</div>
            <div style="width: 15%;" class="product-title">Doanh thu theo danh mục</div>

        </div>
        <?php
        $sum = 1;
        // echo"<pre>";
        // print_r($statistics);
        // echo"</pre>";

        foreach ($statistics as $list) {
            //    echo "<pre>";
            //    print_r($list);
            //    echo "</pre>";
            echo '
            <div class="content-product">
            <div style="width: 5%;" class="product-items">' . $sum . '</div>
            <div style="width: 20%;" class="product-items">' . $list['1'] . '</div>
            <div style="width: 20%;" class="product-items">' . $list['sl'] . '</div>
            <div style="width: 15%;" class="product-items">' . number_format($list['min_sp'], 0, '.', '.') . ' VND</div>
            <div style="width: 15%;" class="product-items">' . number_format($list['max_sp'], 0, '.', '.') . ' VND</div>
            <div style="width: 15%;" class="product-items">' . number_format($list['tongtien'], 0, '.', '.') . ' VND</div>
        </div>
            ';
            $sum++;
        }
        
        ?>
        <div class=" text-left ml-2"  >
                <h2>Tổng doanh thu: <span>
                        <?= number_format($doanhthu[0]['doanhthu'], 0, ".", ".") ?> VND
                    </span></h2>
            </div>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


        <div id="myChart" style="width:900px; max-width:600px; height:500px;">
        </div>

        <script>
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                const data = google.visualization.arrayToDataTable([
                    ['Contry', 'Mhl'],
                    <?php
                    $tongdm = count($statistics);
                    $i = 1;
                    foreach ($statistics as $tk) {
                        extract($tk);
                        if ($i == $tongdm)
                            $dauphay = "";
                        else
                            $dauphay = ",";
                        echo "['" . $tk['name_loai'] . "', " . $tk['count_sp'] . " ]" . $dauphay;
                        $i += 1;
                    }
                    ?>
                ]);

                const options = {
                    title: 'Biểu đồ số lượng sản phẩm theo loại'
                };

                const chart = new google.visualization.PieChart(document.getElementById('myChart'));
                chart.draw(data, options);
            }
        </script>
        <!-- <div class="content-product">
            <div style="width: 5%;" class="product-items">STT</div>
            <div style="width: 10%;" class="product-items">Mã Danh Mục</div>
            <div style="width: 20%;" class="product-items">Tên Danh Mục</div>
            <div style="width: 20%;" class="product-items">Số Lượng</div>
            <div style="width: 15%;" class="product-items">Gía Cao Nhất</div>
            <div style="width: 15%;" class="product-items">Giá Thấp Nhất</div>
            <div style="width: 15%;" class="product-items">Giá Trung Bình</div>
        </div> -->
        <!-- <a href="index.php?btn=chart" style="border: none;"><input type="submit" value="Biểu Đồ" class="charts" style="border: none;"> </a> -->
    </div>
</main>
</div>