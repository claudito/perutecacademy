<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<style type="text/css">

		</style>
	</head>
	<body>
<script src="../librerias/highcharts/code/highcharts.js"></script>
<script src="../librerias/highcharts/code/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>



		<script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Historic World Population by Region'
    },
    subtitle: {
        text: 'Source: <a href="https://en.wikipedia.org/wiki/World_population">Wikipedia.org</a>'
    },
    xAxis: {

        categories: [

         <?php
          include'../autoload.php';
          $alumnos  =  new Alumnos();
          foreach ($alumnos->estadisticas() as $key => $value): ?>
           '<?php echo $value['nombre']; ?>',
         <?php endforeach ?>

        ],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Population (millions)',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' millones'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [

    {   
        name: 'Año 2017',
        data: [
        <?php
          
          $alumnos  =  new Alumnos();
          foreach ($alumnos->estadisticas() as $key => $value): ?>
           <?php echo $value['valor']; ?>,
         <?php endforeach ?>

        ]
    }, 
     {   
        name: 'Año 2017',
        data: [
        <?php
          
          $alumnos  =  new Alumnos();
          foreach ($alumnos->estadisticas() as $key => $value): ?>
           <?php echo $value['valor']*2; ?>,
         <?php endforeach ?>

        ]
    },

    ]

});
		</script>
	</body>
</html>
