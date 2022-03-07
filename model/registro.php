<?php

include('fns_db.php');
$cn = db_connect();

$nombres = trim(strtoupper($_POST["nombres"]));
$apellidos = trim(strtoupper($_POST["apellidos"]));
$dni = trim($_POST["dni"]);
$celular = trim($_POST["celular"]);
$correo = trim($_POST["correo"]);
$carrera = $_POST["carrera"];
$sede = $_POST["sede"];
$talla = $_POST["talla"];

$sql = "SELECT dni FROM chaquetas_matriculados_022022 WHERE dni = '".$dni."'";
$rs = mysqli_query($cn,$sql);

if($rs)
{

	$filas = mysqli_num_rows($rs);
	if($filas > 0)
	{

		$sql = "SELECT dni FROM chaquetas_inscritos WHERE dni = '".$dni."'";
		$rs = mysqli_query($cn,$sql);

		if(mysqli_num_rows($rs) > 0)
		{// ya se registró
			echo "existe";
		}else
		{//nuevo inscrito, no existe su registro

			$sql = "INSERT INTO chaquetas_inscritos (nombres,apellidos,dni,celular,correo,sede,carrera,talla,fecregistro) VALUES('$nombres','$apellidos','$dni','$celular','$correo','$sede','$carrera','$talla',NOW())";
			if(mysqli_query($cn,$sql))
			{
				echo "true";
			}else
			{
				echo "error";
			}
		}		
	}else
	{
		echo "false";
	}
}else
{
	echo "error";
}

mysqli_free_result($rs);