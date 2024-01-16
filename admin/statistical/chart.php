
<main>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <div class="logo">
        <img src="../img/image(1269)_preview_rev_1 (1).png" alt="">
    </div>

    <div id="myChart" style="width:100%; max-width:600px; height:500px;">
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
</main>
</div>