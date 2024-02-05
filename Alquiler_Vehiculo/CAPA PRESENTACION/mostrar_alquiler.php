<?php
include '../Negocio/negocio.php';

$alquileres = obtenerAlquileres();

if (!empty($alquileres)) {
    echo "<h2>Listado de Alquileres</h2>";
    foreach ($alquileres as $datos) {
        echo "<div style='border: 1px solid #000; padding: 10px; margin-bottom: 10px;'>";
        foreach ($datos as $dato) {
            echo "<p style='margin: 0;'>" . $dato . "</p>";
        }
        echo "</div>";
    }
} else {
    echo "No hay alquileres registrados.";
}
?>
