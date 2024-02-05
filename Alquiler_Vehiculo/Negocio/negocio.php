<?php
include '../Datos/datos.php';

function validarDatos($nombreCliente, $fechaAlquiler, $fechaDevolucion, $estadoAlquiler, $placaCamioneta) {
    // Validar que las fechas sean válidas
    if (strtotime($fechaAlquiler) === false || strtotime($fechaDevolucion) === false) {
        return false; // Una o ambas fechas no son válidas
    }

    // Validar el formato de la placa del vehiculo (ejemplo: ABC123)
    if (!preg_match('/^[A-Z]{3}\d{3}$/', $placaCamioneta)) {
        return false; // Formato de placa no válido
    }

    // Validar que el estado del alquiler sea uno de los valores permitidos
    $estadosPermitidos = ['Pendiente', 'En curso', 'Completado'];
    if (!in_array($estadoAlquiler, $estadosPermitidos)) {
        return false; // Estado de alquiler no válido
    }

    // Otras validaciones según sea necesario

    return true;
}

function procesarAlquiler($nombreCliente, $fechaAlquiler, $fechaDevolucion, $estadoAlquiler, $placaCamioneta) {
    if (validarDatos($nombreCliente, $fechaAlquiler, $fechaDevolucion, $estadoAlquiler, $placaCamioneta)) {
        guardarAlquiler($nombreCliente, $fechaAlquiler, $fechaDevolucion, $estadoAlquiler, $placaCamioneta);
        return "El alquiler se ha guardado correctamente.";
    } else {
        return "Error en los datos. Por favor, verifica la información.";
    }
}
?>
