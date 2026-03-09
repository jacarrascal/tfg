<?php
$conn = new mysqli("postgresql://root:lRiVcodA9HuuAZJX7fTI2RajV300GnOv@dpg-d6nh5ghaae7s73avs7dg-a.oregon-postgres.render.com/oceano_sostenible");

$id_ub = $_POST['id_ubicacion'];
$temp = $_POST['temp'];
$ph = $_POST['ph'];
$plas = $_POST['plasticos'];

$sql = "INSERT INTO Mediciones (id_ubicacion, temperatura_agua, nivel_ph, concentracion_microplasticos) 
        VALUES ('$id_ub', '$temp', '$ph', '$plas')";

if ($conn->query($sql)) {
    echo "Datos registrados correctamente.";
} else {
    echo "Error: " . $conn->error;
}
?>
