<html>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">

  <?php $title = "PHP title";
  include_once('data.php');


  $pieData = array(
      array('source', 'Number'),
      array('lån', 30000),
      array('Betaling fra tilstands raport', 13000),
      array('Salær - 20000 + Moms', 20000),
      array('Skat', 4000),
      array('Opsparing', 3134)
  );

  $jsonTable = json_encode($pieData);

  ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {

            var data = google.visualization.arrayToDataTable(
                <?php  echo $jsonTable; ?>
               );

            var options = {

                title: '<?php echo $title; ?>',
                pieHole: 0.4,
                legend: 'left',
                width: '100%',
                height: '100%',
                colors: ['#0598d8', '#f97263'],
                chartArea: {
                    left: "3%",
                    top: "3%",
                    height: "80%",
                    width: "80%"
                }

            };

            var chart = new google.visualization.PieChart(document.getElementById('chart'));

            chart.draw(data, options);
        }
    </script>
</head>
<body>


<div id="chart_wrap"><div id="chart"></div></div>
<p id="canvas_size"></p>

</body>
</html>


<?php

echo "hello";

?>

