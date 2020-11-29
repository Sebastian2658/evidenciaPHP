<?php
echo '<html>
        <body style="font-family: \'Courier New\', Courier, monospace;"';
$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];
echo "<p><b> los datos registrados son los siguientes </b></p>";
echo "<br><b>Código: </b>" .$codigo;
echo "<br><b>Nombre: </b>" .$nombre;
echo "<br><b>Apellido: </b>" .$apellido;
echo "<br><b>Correo: </b>" .$correo;
echo "<br><b>Edad: </b>" .$edad;
echo "  <body>
    </html>";
?>