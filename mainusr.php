<?php
define("RUTA_ABS", dirname(__FILE__));
include_once (RUTA_ABS . "/controlador/redirect.php");
include_once (RUTA_ABS . "/controlador/controladorvista.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Panaderia</title>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/toggle_nav.js"></script>
        <link href="css/factura.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/factura.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <link rel="shortcut icon" href="img/bakery_icon.png">
        <script type="text/javascript" src="js/albaran.js"></script>
        <script type="text/javascript" src="js/facturasimple.js"></script>


    </head>
    <body onload="fecha()">
        <?php include 'bars/navbarusr.php'; ?>
        <div class="container-fluid">

            <div class="row-fluid">
                <div class="span2">
                    <!--Sidebar content-->

                    <?php
                    include (RUTA_ABS . "/bars/sidebar_mainusr.php");
                    ?>
                </div>
                <div class="span10">
                    <!--Body content-->
                    <div class="well" style=" margin-top: 15px; width: auto;  padding: 8px 0;">
                        <?php
                        if ($iuflag == false) {
                            include ($vistas_dir . $vista);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>