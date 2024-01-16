<main>
    <div class="logo">       <img src="../img/image(1269)_preview_rev_1 (1).png" alt="">
    </div>
    <div class="content">

        <div class="content-product">
            <div style="width: 5%;" class="product-title">STT</div>
            <div style="width: 10%;" class="product-title">Mã Danh Mục</div>
            <div style="width: 20%;" class="product-title">Tên Danh Mục</div>
            <div style="width: 20%;" class="product-title">Số Lượng</div>
            <div style="width: 15%;" class="product-title">Giá Thấp Nhất</div>
            <div style="width: 15%;" class="product-title">Giá Cao Nhất</div>
            <div style="width: 15%;" class="product-title">Giá Trung Bình</div>

        </div>
        <?php
        $sum = 1;
        foreach ($statistics as $list) {
        //    echo "<pre>";
        //    print_r($list);
        //    echo "</pre>";
            echo '
            <div class="content-product">
            <div style="width: 5%;" class="product-items">' . $sum . '</div>
            <div style="width: 10%;" class="product-items">' . $list['0'] . '</div>
            <div style="width: 20%;" class="product-items">' . $list['1'] . '</div>
            <div style="width: 20%;" class="product-items">' . $list['2'] . '</div>
            <div style="width: 15%;" class="product-items">' . number_format($list['3'],0,'.','.') . ' VND</div>
            <div style="width: 15%;" class="product-items">' . number_format($list['4'],0,'.','.') . ' VND</div>
            <div style="width: 15%;" class="product-items">' . number_format($list['5'],0,'.','.') . ' VND</div>
        </div>
            ';
            $sum++;
        }
        ?>
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
                    if ($i == $tongdm) $dauphay = "";
                    else $dauphay = ",";
                    echo "['" . $tk['name_loai'] . "', " . $tk['count_sp'] . " ]" . $dauphay;
                    $i += 1;
                }
                ?>
            ]);

            const options = {
                title: 'World Wide Wine Production'
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