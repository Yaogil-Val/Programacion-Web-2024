<?php
require('fpdf186/fpdf.php');

// Conexión a la base de datos
$host = "localhost";
$user = "root";
$password = "";
$db = "tienda_web";

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta a la base de datos
$sql = "SELECT id, nombre_producto, precio, stock FROM productos";
$result = $conn->query($sql);

// Crear PDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);

// Encabezado de la tabla
$pdf->Cell(20, 10, 'id', 1, 0, 'C');
$pdf->Cell(70, 10, 'nombre_producto', 1, 0, 'C');
$pdf->Cell(30, 10, 'precio', 1, 0, 'C');
$pdf->Cell(30, 10, 'stock', 1, 1, 'C');

// Datos de la tabla
$pdf->SetFont('Arial', '', 12);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell(20, 10, $row['id'], 1, 0, 'C');
        $pdf->Cell(70, 10, $row['nombre_producto'], 1, 0, 'C');
        $pdf->Cell(30, 10, $row['precio'], 1, 0, 'C');
        $pdf->Cell(30, 10, $row['stock'], 1, 1, 'C');
    }
} else {
    $pdf->Cell(0, 10, 'No hay datos disponibles', 1, 1, 'C');
}

// Salida del PDF
$pdf->Output();
?>