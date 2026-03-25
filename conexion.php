<?php 

	define("SERVIDOR", "localhost");
	define("BASE_DATOS", "ihaeminf_ihaemapp");
	define("USUARIO", "root");
	define("CLAVE", "");
	define("PUERTO", "");

	function conexion(){

	$conn = new mysqli(SERVIDOR,USUARIO,CLAVE,BASE_DATOS);
	
	if(!mysqli_connect_errno()) {
		echo "Conexi贸n exitosa.<br/>"
		return $conexion(sql);
	} else {
		//echo "error en la conexi贸n: " . mysqli_connect_errno() . "<br/>";
		echo "error en la conexión: " . mysqli_connect_errno() . "<br/>";
	}
}
?>
