<!--Autor 
Eduardo Saes
C.I. V-18.308.112
Correo: eduardosaes@hotmail.com
-->

<?php 
$mensaje=0;
extract($_GET) 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SUBIR NOMINA</title>
</head>
<body>
	<center>
	<h1>Cargar nomina a la base de datos</h1>
		<form action="prueva.php" method="post">
			<input type="hidden" name="opcion" value="1">
			
				<?php if ($mensaje==1 or $mensaje==2) {
					echo"<input type='submit' value='Subir nomina' disabled>";
				}else{
					echo "<input type='submit' value='Subir nomina'>";
					} ?>
				
		</form>
		<br>
		<form action="prueva2.php" method="post">
		<input type="hidden" name="opcion" value="2">
		<?php if ($mensaje==2 or $mensaje==0) {
					echo"<input type='submit' value='Marcar inacttivos' disabled>";
				}else{
					echo "<input type='submit' value='Marcar inacttivos'>";
					} ?>
			
		</form>
		<br>
		<?php if ($mensaje==2) {
			echo "<strong>Nomina cargada exitosamente</strong>";
		} ?>
	</center>
	
</body>
</html>