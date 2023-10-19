<?php 
error_reporting(0);

  if(isset($_GET["fechaInicial"])){



      $fechaInicial = $_GET["fechaInicial"];
      $fechaFinal = $_GET["fechaFinal"];

    }else{

      $fechaInicial = null;
      $fechaFinal = null;

    }

   $respuesta = ControladorVentas::ctrRangoFechasVentas($fechaInicial, $fechaFinal);

   $arrayFechas = array();
   $arrayVentas = array();
   $sumaPagosMes = array();

   foreach ($respuesta as $key => $value) {

	#capturamos solo el año y  el mes

	$fecha = substr($value["fecha"],0,7);

	#introducir las fechas en arrayFechas

	array_push($arrayFechas, $fecha);

	#capturamos las ventas
	$arrayVentas = array($fecha => $value["total"]);

	#sumamos los pagos que ocurrieron el mismo mes
	foreach ($arrayVentas as $key => $value) {
		
		$sumaPagosMes[$key] += $value;

	}

   }


   $noRepetirFechas = array_unique($arrayFechas);
   	


?>
<!-- =============================================
GRAFICO DE VENTA
=============================================-->

<div class="box box-solid bg-teal-gradient">

	<div class="box-header">
		
		<i class="fa fa-th"></i>

		<h3 class="box-title">Grafico de Ventas</h3>

	</div>	

	<div class="box-body border-radius-none nuevoGraficoVentas">
		
		<div class="chart" id="line-chart-ventas" style="height: 250px;"></div>

	</div>

</div>

<script>
	
	var line=new Morris.Line({
		element:'line-chart-ventas',
		resize:true,
		data:[

		<?php 

		if($noRepetirFechas != null){

		foreach ($noRepetirFechas as $key) {
			
			echo "{y:'".$key."',ventas: ".$sumaPagosMes[$key]."},";
		}

			echo "{y:'".$key."',ventas:".$sumaPagosMes[$key]."}";

		}else{

			echo "{ y: '0', ventas: '0'}";

		}

		?>

			],

			xkey:'y',
			ykeys:['ventas'],
			labels:['ventas'],
			lineColors:['#efefef'],
			lineWidth:2,
			hideHover:'auto',
			gridTextColor:'#fff',
			gridStrokeWidth:0.4,
			pointSize:4,
			pointStrokeColors:['#efefef'],
			gridLineColor:'#efefef',
			gridTextFamily:'Open Sans',
			preUnits : 'Q. ',
			gridTextSize:10
		});

</script>