<!--Autor 
Eduardo Saes
C.I. V-18.308.112
Correo: eduardosaes@hotmail.com
-->
<?php  

	header("Content-Type:text/html;charset=utf-8");
	$h="localhost";
	$u="root";
	$p="infor1234";
	$con=mysql_connect($h,$u,$p) or die (mysql_error());
	mysql_select_db("cj_pv",$con) or die (mysql_error());
	mysql_query("SET NAMES 'utf8'");


			//selecciona los que estan en la tabla_2 y no estan en la tabla_1 y los inserta en la tabla_1
			$sql = "SELECT * FROM cj_trabajadores_aux t1 WHERE NOT EXISTS (SELECT * FROM cj_trabajadores t2 WHERE t1.trb_cedula=t2.trb_cedula)";
			$query = mysql_query($sql);
			while ($res = mysql_fetch_array($query)) {
				
				$sql1 = "INSERT INTO cj_trabajadores(`trb_codigo`, `trb_cedula`, `trb_apellidos`, `trb_nombres`, `trb_cargo`, `trb_dependencia`, `trb_telefono`, `trb_direccionh`, `trb_correo`, `activo`) VALUES ('$res[0]','$res[1]','$res[2]','$res[3]','$res[4]','$res[5]','$res[6]','$res[7]','$res[8]','$res[9]')";
				mysql_query($sql1);
			}	
			header("location:index.php?mensaje=1");

?>