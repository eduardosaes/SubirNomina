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


			//selecciona los que estan en la tabla_1 y no estan en la tabla_2 los marca como no activo
			$sql = "SELECT * FROM cj_trabajadores t1 WHERE NOT EXISTS (SELECT * FROM cj_trabajadores_aux t2 WHERE t1.trb_cedula=t2.trb_cedula)";
			$query = mysql_query($sql);
			while ($res = mysql_fetch_array($query)) {
				
				$sql1 = "UPDATE `cj_trabajadores` set `activo`= 0 where trb_cedula = '$res[1]'";
				$query1 = mysql_query($sql1);
			}

			header("location:index.php?mensaje=2");

?>