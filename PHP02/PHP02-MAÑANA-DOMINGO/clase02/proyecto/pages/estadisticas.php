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

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>



		<script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Navegadores Web'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Porcentaje %',
        colorByPoint: true,
        data: [
        
        <?php
          include'../autoload.php';
         $alumnos  =  new Alumnos();
         foreach ($alumnos->estadisticas() as $key => $value): ?>
        {
            name: '<?php echo $value["nombre"]; ?>',
            y: <?php echo $value['valor']; ?>
        }, 
        <?php endforeach ?>
       
        ]
    }]
});
		</script>
	</body>
</html>
