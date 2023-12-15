<?php
include('connect.php');
include('fpdf/fpdf.php');


$pdf = new FPDF();

$pdf->AddPage();
//Set the base font & size
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(200, 5, "Republic of the Philippines", 0, 0, 'C');
$pdf->Ln();
$pdf->Cell(200, 5, "Province of Laguna", 0, 0, 'C');
$pdf->Ln();
$pdf->Cell(200, 5, "City of Calamba", 0, 0, 'C');
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(200, 5, "BARANGAY MAKILING", 0, 0, 'C');
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(200, 5, "Barangay Issuance Request Record", 0, 0, 'C');
$pdf->Ln();
$pdf->Cell(350, 5, "--------------------------------------------------------------------------------------------------------------------------------------");
//Creating new line
$pdf->Ln();
$width_cell = array(10, 35, 40, 25, 30, 30, 20);
$pdf->SetFont('Arial', '', 10);

//header back color
$pdf->SetFillColor(136, 185, 167);
$pdf->Cell($width_cell[0], 10, 'ID', 0, 0, 'C', true);
$pdf->Cell($width_cell[1], 10, 'Full Name', 0, 0, 'A', true);
$pdf->Cell($width_cell[2], 10, 'Certificate Type', 0, 0, 'A', true);
$pdf->Cell($width_cell[3], 10, 'Purpose', 0, 0, 'A', true);
$pdf->Cell($width_cell[4], 10, 'Request Date', 0, 0, 'A', true);
$pdf->Cell($width_cell[5], 10, 'Requester', 0, 0, 'A', true);
$pdf->Cell($width_cell[6], 10, 'Status', 0, 0, 'A', true);


//$pdf->SetFont('Arial','B',11);
//$pdf->Cell(10,5,"ID");
//$pdf->Cell(30,5,"First Name");
// $pdf->Cell(30,5,"Last Name");
// $pdf->Cell(30,5,"Email Address");

$pdf->Ln();

$fill = false;
$pdf->SetFillColor(235, 236, 236);

// Fetch data from table
$result = mysqli_query($con, "select * from request_tbl");

while ($row = mysqli_fetch_array($result)) {
    $pdf->Cell($width_cell[0], 5, "{$row['requestId']}", 0, 0, 'C', $fill);
    $pdf->Cell($width_cell[1], 5, "{$row['fullname']}", 0, 0, 'A', $fill);
    $pdf->Cell($width_cell[2], 5, "{$row['certType']}", 0, 0, 'A', $fill);
    $pdf->Cell($width_cell[3], 5, "{$row['purpose']}", 0, 0, 'A', $fill);
    $pdf->Cell($width_cell[4], 5, "{$row['requestDate']}", 0, 0, 'A', $fill);
    $pdf->Cell($width_cell[5], 5, "{$row['requester']}", 0, 0, 'A', $fill);
    $pdf->Cell($width_cell[6], 5, "{$row['status']}", 0, 1, 'A', $fill);
    $fill = !$fill;
}

$pdf->Output();
