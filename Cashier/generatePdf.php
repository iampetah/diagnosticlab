<?php
require ('./fpdf186/fpdf.php');
include 'connection/conn.php';

// Create a PDF object
$pdf = new FPDF('P', 'mm', 'Letter');

$query = "SELECT * FROM request_form";

$result = $conn->query($query);
$pdf->AddPage();

// Set font
$pdf->SetFont('Arial', 'B', 16);

// Title


// Invoice details
$pdf->Image('assets/img/logo01.png', 1,10,28,28,'PNG' );
$pdf->Image('assets/img/logo02.png', 180,10,33,33,'PNG' );

$pdf->SetFont('Arial', 'B', 25);
$pdf->SetTextColor(255, 0, 0);

$pdf->Cell(193, 10, 'PANABO CITY DIAGNOSTIC CENTER', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 15);
$pdf->SetTextColor(0, 0, 0);

$pdf->Cell(190, 10, 'PARTNERSHIP, COMMITMENT, DEVOTION, AND CARE', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFont('Arial', 'B', 15);
$pdf->Cell(190, 10, 'Statement of Account', 0, 1, 'C', $pdf->SetTextColor(0, 0, 0));

$pdf->Ln(5);

// Table header
while ($row = $result->fetch_assoc()) {
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(30, 10, 'Name:', 1);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(48, 10, $row['request_lastname'] , 1);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(30, 10, 'Billing Date:', 1);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(30, 10, $row['request_date'], 1);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(30, 10, 'Age:', 1);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(30, 10, $row['request_age'], 1);
$pdf->Ln(10);

// Table rows
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(30, 10, 'Address:', 1);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(78, 10, $row['request_city'], 1);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(30, 10, 'Patient No.', 1);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(20, 10, $row['request_ID'], 1);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(20, 10, 'Gender.', 1);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(20, 10, $row['request_gender'], 1);
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 12,);
$pdf->Cell(128  , 10, 'Laboratory Examination', 1);
$pdf->Cell(70, 10, 'Amount', 1);
$pdf->Ln(10);
$pdf->Cell(128  , 10, $row['request_test'], 1);
$pdf->Cell(70, 10, $row['request_amount'], 1);
$pdf->Ln(10);
$pdf->Cell(128  , 10, '', 1);
$pdf->Cell(70, 10, '', 1);
$pdf->Ln(10);
$pdf->Cell(128  , 10, '', 1);
$pdf->Cell(70, 10, '', 1);
$pdf->Ln(10);
$pdf->Cell(128  , 10, 'Total Amount', 1);
$pdf->Cell(70, 10,  $row['request_amount'], 1);
// Total
}

// Output the PDF
$pdf->Output('invoice.pdf', 'I');
?>

