<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Factorial</title>

	<style>

		*{
			padding:0px;
			margin:0px;
		}
		.headbg{
			background-color:black;
			color:white;
		}

		.par{
			background-color:#d1d1d1;
		}

		.text-center{
			text-align: center;
		}

		.text-left{
			text-align:left;
		}

		.text-right{
			text-align:right;
		}
	</style>
</head>
<body>
		<div style="margin:auto; width:80%;margin-top:30px">
			<form action="factorial.php" method="get" style="display: inline-block; margin:auto; margin-left:25%;">
			<input type="number" name="numero" placeholder="ingresa un numero">
			<button type="submit">Aceptar</button>
		</form>

			<a href="factorial.php" style="display:inline-block;" ><button>Limpiar pantalla</button></a>
			<br><br>
		</div>

		<div style="margin:auto; width:50%;margin-top:30px">
		<table style="margin:auto;width:80%;">
			<thead>
				<th class="headbg">Iteracion</th>
				<th class="headbg">Operacion</th>
				<th class="headbg">Resultado</th>		
			</thead>
			<tbody>
				<?php


					function background($cont){
						if($cont%2 == 0)
							return 'par';
						else 
							return 'impar';
					}
				if (isset($_GET['numero'])) {
					$numero = $_GET['numero'];
					$factorial= 1;
					$cont = 1;
					for ($i=1; $i<=$numero ; $i++) { 
						$factorial*=$cont;
						$cont++;
						//echo "Iteracion" . $i ." factorial " .$factorial. "<br>";
						echo '
								<tr class="'.background($cont).'">
									<td class="text-center">'.$i.'</td>
									<td class="text-left">'.$i.'*'.$i.'</td>
									<td class="text-right">'.$factorial.'</td>
								</tr>
							';
		
						}	
					}

				
		?>
			</tbody>
		</table>
		</div>

  

</body>
</html>