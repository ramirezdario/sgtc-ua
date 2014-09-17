<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1><?=$titulo?></h1>
	 <!-- ejemplo feo -->
	 
<?php echo "Aprendiendo <strong>$language</strong>";?>

	<!--  EJEMPLO CORRECTO --> 
	<!-- UTILIZAR EL INTERPRETE PHP SOLO DONDE SEA NECESARIO -->
	  Aprendiendo <strong><?= $language;?></strong>

	  <p><a href="contactos.php">Contactanos</a></p>
	  
	
</body>
</html>
<!-- ejemplo de falta de encapsulamiento <?= $confidencial ?> -->
 