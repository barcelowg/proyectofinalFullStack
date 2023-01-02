
<?php
// Datos para la conexion a la base de datos
$servername = "localhost";
$username = "c2081732_climasl";
$password = "12345678";
$dbname = "c2081732_climasl";

// Crea conexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Chequea conexion
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// Cargar los registros
$stmt = $conn->prepare("INSERT INTO resumendia (Fecha, TempMax, TempMin, HumMax, HumMin, PresMax, PresMin, DirVientoMax, DirVientoMin, VientoMax, VientoMin, DirVieProm, Rafagas, LluvHoy, LluvAyer, LluvMes, LluvA)  
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssssssssssss",$Fecha, $TempMax, $TempMin, $HumMax, $HumMin, $PresMax, $PresMin, $DirVientoMax, $DirVientoMin, $VientoMax, $VientoMin, $DirVieProm, $Rafagas, $LluvHoy, $LluvAyer, $LluvMes, $LluvA);

// Seteo de parametros Meteobridge a cargar
$Fecha = "2023-01-01";
$TempMax = "23.5";
$TempMin = "14.0";
$HumMax = "99";
$HumMin = "37";
$PresMax = "994.30";
$PresMin = "989.90";
$DirVientoMax = "NW";
$DirVientoMin = "N";
$VientoMax = "19.4";
$VientoMin = "0.0";
$DirVieProm = "WSW";
$Rafagas = "39.2";
$LluvHoy = "11.00";
$LluvAyer = "0.0";
$LluvMes = "11.0";
$LluvA = "11.0";

$stmt->execute();

echo "Registro cargado correctamente";

$stmt->close();
$conn->close();
?>