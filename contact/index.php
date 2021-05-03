<!DOCTYPE html>
<html lang="es">

<head>

<link rel="shortcut icon" href="../img/zc-ico.ico">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!--boostrap--------------------------------------------------------------------------------->
    <!-- JavaScript Bundle with Popper -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZCpublicidad - Contacto</title>
    <link rel="stylesheet" href="css/app.css">
</head>

<body oncontextmenu="return false;">
    <div>

        <form action="enviar.php" method="post" onsubmit="return checkSubmit();">
            <h1>Contacto</h1>
            <input type="text" name="nombre" placeholder="Nombre" required id="campo">
            <input type="email" name="correo" placeholder="Correo" required id="campo">
            <input type="number" name="telefono" placeholder="Teléfono" required id="campo">

            <textarea name="mensaje" placeholder="Escriba su mensaje" required id="campo"></textarea>
            <input type="submit" value="Enviar" id="boton">

        </form>

    </div>


    <script src="js/send.js">

    </script>
    <script src="https://maxcdn.bootstrapcdn.com/boostrap/3.3.6/js/boostrap.min.js"></script>

    <script src="https://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>
