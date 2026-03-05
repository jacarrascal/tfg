<?php
// Ejecuta el script de R y captura la salida
$output = shell_exec("Rscript analisis_oceanico.R");
header('Content-Type: application/json');
echo $output;
?>