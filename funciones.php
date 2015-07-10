<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Tablas de multiplicar </title>
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<table id="tabla" border="1"><tr>
<?php

	switch($_POST['opciones']){
		case "for":{
			for($ciclo=1;$ciclo<=10;$ciclo++){
					echo "<td>Tabla de multiplicar del $ciclo <br>";
					
					for($ciclo2=1;$ciclo2<=10;$ciclo2++){
						$mult=$ciclo*$ciclo2;
						echo "$ciclo X $ciclo2 = $mult<br>";
					}
				}
			break;
		}

		case "while":{
			$x=1;
			while($x<=10){
				echo "<td>Tabla del $x<br>";
				$y=1;
				while($y<=10){
					$res=$x*$y;
					echo "$x X $y = $res<br>";
					$y++;
				}
				$x++;
			}
			break;
		}

		case "do-while":{
			$x=1;
			do{
				echo "<td> Tabla del $x <br/>";

			$y=1;
			do{
				$res=$x*$y;
				echo "$x*$y=$res<br/>";
				$y++;
			}
			while($y<=10);
				$x++;
			}
			while ($x<=10);
			break;
		}
	}

?>
	</tr>
	</table>
</body>
</html>
