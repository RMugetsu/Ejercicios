<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?
		foreach ($_REQUEST as $key => $value) {
			if (gettype($value) == "array") {
				foreach ($value as $v) {
					echo "$key :"." $v</br>";
				}
			}else{
				echo "$key :"." $value</br>";
			}
		}
	?>
</body>
</html>