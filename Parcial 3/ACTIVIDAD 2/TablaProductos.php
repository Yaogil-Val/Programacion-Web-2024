<?php
require('fpdf186/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

// Texto de título del catálogo
$pdf->SetTextColor(20, 50, 100);
$pdf->SetFillColor(20, 100, 210);
$pdf->SetLineWidth(1);
$pdf->SetDrawColor(210, 100, 210);
$pdf->Cell(0, 20, 'Catálogo de productos', 1, 1, 'C', true); // Cambié el texto aquí

// Encabezados de la tabla
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetFillColor(200, 220, 255);
$pdf->Cell(60, 10, 'Nombre', 1, 0, 'C', true);
$pdf->Cell(40, 10, 'Precio', 1, 0, 'C', true);
$pdf->Cell(40, 10, 'Existencias', 1, 1, 'C', true);

// Productos de ejemplo
$pdf->SetFont('Arial', '', 12);
$productos = [
    ['Producto 1', '$10.00', '50'],
    ['Producto 2', '$15.00', '30'],
    ['Producto 3', '$20.00', '40'],
    ['Producto 4', '$25.00', '60'],
    ['Producto 5', '$30.00', '20'],
    ['Producto 6', '$35.00', '15'],
    ['Producto 7', '$40.00', '10'],
    ['Producto 8', '$45.00', '25'],
    ['Producto 9', '$50.00', '35'],
    ['Producto 10', '$55.00', '45']
];

// Llenado de la tabla con los productos
foreach ($productos as $producto) {
    $pdf->Cell(60, 10, $producto[0], 1, 0, 'C');
    $pdf->Cell(40, 10, $producto[1], 1, 0, 'C');
    $pdf->Cell(40, 10, $producto[2], 1, 1, 'C');
}

$pdf->Output();
?>
