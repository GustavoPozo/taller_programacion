<?php 
//Podemos escribir fuera de las etiquetas html
#print "hola<br>"; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mezclar HTML y PHP</title>
	<?php 
	/*****************
	comentario de bloque
	cualquier cosa...
	print "hola desde head<br>"; 
	*******************/?>
</head>
<body>
<?php print "hola desde body<br>";
print "adios"; ?>
<input type="text" value="<?php print 'hola, cara de bola'; ?>">
</body>
</html>