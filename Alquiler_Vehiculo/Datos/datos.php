<?php

function guardarAlquiler($nombreCliente, $fechaAlquiler, $fechaDevolucion, $estadoAlquiler, $placaCamioneta) {
    $archivo = 'datos.txt';

    // Verificar si el archivo existe, si no, crearlo
    if (!file_exists($archivo)) {
        file_put_contents($archivo, ''); // Crear archivo vacío
    }

    // Agregar los datos al archivo
    $datos = "Nombre del cliente: $nombreCliente, Fecha de alquiler: $fechaAlquiler, Fecha de devolución: $fechaDevolucion, Estado del alquiler: $estadoAlquiler, Placa de la camioneta: $placaCamioneta\n";
    file_put_contents($archivo, $datos, FILE_APPEND);
}

function obtenerAlquileres() {
    $archivo = 'datos.txt';
    $registros = file($archivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    $alquileres = [];

    if (!empty($registros)) {
        foreach ($registros as $registro) {
            $datos = explode("\n", $registro);
            $alquileres[] = $datos;
        }
    }

    return $alquileres;
}
?>
