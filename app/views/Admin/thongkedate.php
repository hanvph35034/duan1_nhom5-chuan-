
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Thống kê</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?act=home">Home</a></li>
                        <li class="breadcrumb-item active">Thống kê</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                top
                            </th>
                            <th style="width: 20%">
                                Ngày
                            </th>
                            <th style="width: 10%">
                                Tổng tiền
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i=1;
                        foreach ($load_thongke_order_date as $tk) {
                            extract($tk);
                        ?>
                            <tr>
                                <td>
                                    <?= $i++?>
                                </td>
                                <td>
                                    <?= $ngay_dat ?>
                                </td>
                                <td>
                                    <?= number_format($tongtien) ?> đ
                                </td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>

                </table>
            </div>
            <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                const data = google.visualization.arrayToDataTable([
                    ['Danh mục', 'Doanh thu'],
                    <?php
                    foreach ($load_thongke_order_date as $thongke) {
                        extract($thongke);
                        echo "['$ngay_dat', $tongtien],";
                    }
                    ?>
                ]);
                // Set Options
                const options = {
                    title: 'BIỂU ĐỒ DOANH THU THEO NGÀY',
                    is3D: true
                };
                // Draw
                const chart = new google.visualization.LineChart(document.getElementById('piechart_3d'));
                chart.draw(data, options);
            }
        </script>
        </div>
    </div>
</div>