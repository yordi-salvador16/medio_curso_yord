<?php

include '../Negocio/negocio.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreCliente = $_POST['nombre_cliente'];
    $fechaAlquiler = $_POST['fecha_alquiler'];
    $fechaDevolucion = $_POST['fecha_devolucion'];
    $estadoAlquiler = $_POST['estado_alquiler'];
    $placaCamioneta = $_POST['placa_camioneta'];

    $mensaje = procesarAlquiler($nombreCliente, $fechaAlquiler, $fechaDevolucion, $estadoAlquiler, $placaCamioneta);

    echo $mensaje;
}
?>
