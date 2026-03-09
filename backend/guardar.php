<?php
$conn = new mysqli("postgresql://root:lRiVcodA9HuuAZJX7fTI2RajV300GnOv@dpg-d6nh5ghaae7s73avs7dg-a.oregon-postgres.render.com/oceano_sostenible");
// Extraer componentes de la URL
$url = parse_url($db_url);

$host = $url["host"];
$port = $url["port"];
$user = $url["user"];
$pass = $url["pass"];
$dbname = ltrim($url["path"], "/");

$dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
$pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    
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
