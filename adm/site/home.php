<?php

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body>
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="index.html"><i class="fa fa-home"></i>Management</a>
                        <span>Home</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <hr>
    </section>
    <div class="row"></div>
    <div id="myChart" style="width:100%; max-width:600px; height:500px;" class="col-6"></div>
    <div id="Chart" style="width:100%; max-width:600px; height:500px;" class="col-6"></div>

    <script>
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(Chart);
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            const data = google.visualization.arrayToDataTable([
                ['Categories', 'Mhl'],
                ['Shirt/Skirt', <?= $a[0][0] ?>],
                ['Bag/Backpack', <?= $b[0][0] ?>],
                ['Jeans/Pants', <?= $c[0][0] ?>],
                ['Shoes', <?= $e[0][0] ?>],
                ['Accessory', <?= $d[0][0] ?>]
            ]);

            const options = {
                title: 'Rate products of each Categories',
                is3D: true
            };

            const chart = new google.visualization.PieChart(document.getElementById('myChart'));
            chart.draw(data, options);
        }
      
        function Chart() {
            const data = google.visualization.arrayToDataTable([
               
                ['Categories', 'Mhl'],
                ['100.000VND - 300.000VND', <?= $h[0][0] ?>],
                ['300.000VND - 500.000VND', <?= $i[0][0] ?>],
                ['500.000VND - 1000.000VND', <?= $j[0][0] ?>],
                // ['Accessory', < ?= $d[0][0] ?>]
               
            ]);

            const options = {
                title: 'Products price',
               
            };

            const chart = new google.visualization.BarChart(document.getElementById('Chart'));
            chart.draw(data, options);
        } 
    </script>

</body>

</html>

