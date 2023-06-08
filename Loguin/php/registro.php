<?php
include("conexion.php");
//capturando la informacion
if (isset($_POST['registrar'])) {
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $documento = $_POST['documento'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $fechanacimiento = $_POST['fechanacimiento'];
    $email = $_POST['email'];
    $contrasena = $_POST['clave'];
    //sentencia SQL para insertar datos
    $SQL = "INSERT INTO usuarios(nombres,apellidos,numeroDoc,telefono,direccion,fechaNac,correo,contraseña)
    VALUES('" . $nombres . "','" . $apellidos . "','" . $documento . "','" . $telefono . "','" . $direccion . "','" . $fechanacimiento . "','" . $email . "','" . $contrasena . "')";
    $guardar=mysqli_query($conexionsql,$SQL);
     if ($guardar) {
            //mensaeje para registro exitoso
            echo "<script>
            alert('Registro exitoso');
            location.assign('../loguin.html');
            </script>";
        } else {
            //mensaeje para registro fallido
            echo "<script>
            alert('ERROR: Registro no exitoso');
            location.assign('../registro.html');
            </script>";
        }
        mysqli_close($conexionsql);
};
?>