<?php 

include'../autoload.php';
include'../session.php';
$assets  =  new Assets();
$html    =  new Html();
$assets ->principal('Estadisticas');
$html->header();
 ?>
<script src="../librerias/highcharts/code/highcharts.js"></script>
<script src="../librerias/highcharts/code/modules/exporting.js"></script>

<div class="row">
<div class="col-md-12">
<?php include'../vistas/nav.php'; ?>
</div>
</div>

<div class="row">
<div class="col-md-4">
<div id="grafico_pie"></div>
</div>
<div class="col-md-4">
<div id="grafico_pie_2"></div>
</div>
<div class="col-md-4">
<div id="grafico_pie_3"></div>
</div>
</div>






<script type="text/javascript">

Highcharts.chart('grafico_pie', {
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

<script type="text/javascript">

Highcharts.chart('grafico_pie_2', {
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
<script type="text/javascript">

Highcharts.chart('grafico_pie_3', {
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
<?php 

$html->footer('PerúTec Academy');

 ?>