<?php
require('fpdf186\fpdf.php');

$pdf = new FPDF();//creamos un objeto.
$pdf->AddPage();//insertamos pagina.
$pdf->SetFont('Arial','B',16);//configuracion tipografia.

$pdf->SetTextColor(20,50,100);
$pdf->SetFillColor(20,100,210);
$pdf->SetLineWidth(1);
$pdf->SetDrawColor(210,100,210);
$pdf->MultiCell(0,20,'Centro de Estudios Tecnologicos Industriales y de Servicios No.084',1,1,'c',true);//Escribe mensaje.

$pdf->SetFont('Courier','I',12);
$pdf->MultiCell(0,10,'Desarrolla Aplicaciones Con Conexion A Base De Datos',0,1);//Escribe mensaje.

$pdf->SetFont('Times','',12);
$pdf->MultiCell(0,10,'Valeria Montserrat Valdivia Vela',0,1,'c',true);//Escribe mensaje.
$pdf->Output();// cierro el PDF y lo abro.
?>