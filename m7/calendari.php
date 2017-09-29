<?php

	$month=date("n");

	$year=date("Y");

	$diaActual=date("j");

	$diaSemana=date("w",mktime(0,0,0,$month,1,$year))+7;

	$ultimoDiaMes=date("d",(mktime(0,0,0,$month+1,1,$year)-1));

	$meses=array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",

	"Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

?>

<!DOCTYPE html>

<html lang="es">

	<head>

		<title>Ejemplo de un simple calendario en PHP</title>

		<meta charset="utf-8">

		<link rel="stylesheet" type="text/css" href="calendari.css">

	</head>


	<body>

		<h1>Calendario</h1>

		<table id="calendar">

			<caption><?php echo $meses[$month]." ".$year?></caption>

			<tr>

				<th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th>

				<th>Vie</th><th>Sab</th><th>Dom</th>

			</tr>

			<tr bgcolor="silver">

				<?php

				?>

			</tr>

		</table>

	</body>

</html>
