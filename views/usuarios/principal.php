<?php
@session_start();
include '../../models/conexion.php';
include '../../controllers/controllersFunciones.php';
$conn = conectar_db();

$sql = "SELECT * FROM usuarios";

$result = $conn->query($sql);

echo $_SESSION['usuario'];
include './views/principal.php';
?>

<!-- Diseño de la vista -->
