<?php
define("RUTA_ABS", dirname(__FILE__));

include (RUTA_ABS."/controlador/conexion.php");
$pass1 = '"' . trim($_POST["passinput1"]) . '"';
$pass2 = '"' . trim($_POST["passinput2"]) . '"';

$pass3 = '"' . trim($_POST["passinput3"]) . '"';
$pass4 = '"' . trim($_POST["passinput4"]) . '"';
$tipopass = trim($_POST["tipopass"]);

$conexion = conectar_bd();

if ($tipopass == "1") {
    if ($pass1 == $pass2) {
        $sql_update_pass = "UPDATE admin SET clave = $pass1  WHERE idadmin = 1";
        mysql_query($sql_update_pass);
        $msg = "La contraseña del Administrador ha cambiado.";
        $style = "success";
    } else {
        $msg = "Las contraseñas no coinciden. <a href='main.php?iu=config_view.php&mdir=vistas'>Volver</a>";
        $style = "error";
    }
} else {
    if ($pass3 == $pass4) {
        $sql_update_pass = "UPDATE admin SET clave = $pass3 WHERE idadmin = 2";
        mysql_query($sql_update_pass);
        $msg = "La contraseña del Empleado ha cambiado.";
        $style = "success";
    } else {
        $msg = "Las contraseñas no coinciden. <a href='main.php?iu=config_view.php&mdir=vistas'>Volver</a>";
        $style = "error";
    }
}
?>

<div class="alert alert-<?php echo $style ?>" style="margin-right:15px;">

    <strong>¡Atención!</strong> <?php echo $msg; ?>

</div>
