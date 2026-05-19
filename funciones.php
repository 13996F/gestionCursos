<?php 
function mostrarCurso($curso) {
    switch ($curso) {
        case "PHP":
            return "<p class='alerta-bienvenida'><strong>Bienvenido al curso de PHP Backend.</strong></p>";
        case "JavaScript":
            return "<p class='alerta-bienvenida'><strong>Bienvenido al curso de JavaScript.</strong></p>";
        default:
            return "<p class='alerta-bienvenida'><strong>Bienvenido al curso de MySQL.</strong></p>";
    }
}   
?>
