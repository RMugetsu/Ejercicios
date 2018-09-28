<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="calendario.css">
</head>
<body>
	<table>
	<?	
		$fila = 7;
		$pos = 0;
		$cuenta= 1;
		$dia = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
		for ($i=0; $i < $fila; $i++) { 
			if ($cuenta>31) {
				continue;
			}else{
				?><tr><?
				for ($j=0; $j < 7; $j++) {
					if ($i==0) {
						?><td><?=$dia[$j]?></td><?
					}else{
						if ($pos == 3) {
							if ($cuenta<=31) {
								?><td><?=$cuenta?></td><?
								$cuenta++;
							}else{
								?><td></td><?
							}							
						}else{
							?><td></td><?
							$pos++;
						}
					}
					
				}?></tr><?
			}
			
		}
	  	?>
	</table>
</body>
</html>
