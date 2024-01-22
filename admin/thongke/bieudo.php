<div class="row">
    <div class="row formtitle">
        <h1>Biểu Đồ</h1>
    </div>
    <div class="row formtitle">
        <div id="piechart" style="width: 900px; height: 500px;"></div>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                var data = google.visualization.arrayToDataTable([
                    ['Danh muc', 'Số Lượng'],
                    <?php
                    foreach($dsthongke as $thongke){
                        extract($thongke);
                        echo "['$name',$soluong],";
                    }
                    ?>
                    // ['Work', 11],
                    // ['Eat', 2],
                    // ['Commute', 2],
                    // ['Watch TV', 2],
                    // ['Sleep', 7]
                ]);

                var options = {
                    title: 'Biểu đồ sản phẩm số lượng trong danh mục'
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                chart.draw(data, options);
            }
        </script>
    </div>
</div>