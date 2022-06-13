<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos de Graficos com JS e PHP</title>
</head>
<body>
    <div id="curve_chart" style="width: 1800px; height: 1000px"></div>

    <?php
    $dados = [12,34,43,23,56,86,71,69,34,89,50,78];
    $mes = ['jan','fev','mar','abr','mai','jun','jul','ago','set','out','nov','dez'];
    $tam = count($dados);
    ?>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
            ['Year', 'Sales'],
                <?php 
                    for($i=0;$i<$tam;$i++){
                        ?>
                            ['<?=  $mes[$i]; ?>',<?=  $dados[$i]; ?>],                    
                        <?php

                    }
                ?>
            ]);

            var options = {
            title: 'Company Performance',
            curveType: 'function',
            legend: { position: 'bottom' }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
    </script>
</body>
</html>