<?php
include("conexion.php");
//////////////

/////////////////
if(isset($_POST['loguin']))
{	
	$correo=$_POST['correo'];
	$clave=$_POST['clave'];
	
	$SQL="SELECT * FROM usuarios where correo = '".$correo."' and contraseña = '".$clave."'";
	$loguin=mysqli_query($conexionsql,$SQL);
    $nr=mysqli_num_rows($loguin);
	
	
	if($nr == 1)
	{
		
		//header("location: pagina.php");
        echo "<script>
            alert('Loguin exitoso');
            
            </script>";
            echo "holaa ".$correo;
	}
	else if ($nr == 0)
	{
		echo "<script>alert('Usuario no existe');window.location= '../loguin.html' </script>";
	}
	
}

?>