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
$pdf->Cell(200, 5, "Registered Resident List", 0, 0, 'C');
$pdf->Ln();
$pdf->Cell(350, 5, "--------------------------------------------------------------------------------------------------------------------------------------");
//Creating new line
$pdf->Ln();
$width_cell = array(10, 20, 20, 30, 20, 25, 35, 30);
$pdf->SetFont('Arial', '', 10);

//header back color
$pdf->SetFillColor(136, 185, 167);
$pdf->Cell($width_cell[0], 10, 'ID', 0, 0, 'C', true);
$pdf->Cell($width_cell[1], 10, 'First Name', 0, 0, 'A', true);
$pdf->Cell($width_cell[2], 10, 'Last Name', 0, 0, 'A', true);
$pdf->Cell($width_cell[3], 10, 'Phone No.', 0, 0, 'A', true);
$pdf->Cell($width_cell[4], 10, 'House No.', 0, 0, 'A', true);
$pdf->Cell($width_cell[5], 10, 'Street/Purok', 0, 0, 'A', true);
$pdf->Cell($width_cell[6], 10, 'Email Address', 0, 0, 'A', true);
$pdf->Cell($width_cell[7], 10, 'Date Registered', 0, 0, 'A', true);

//$pdf->SetFont('Arial','B',11);
//$pdf->Cell(10,5,"ID");
//$pdf->Cell(30,5,"First Name");
// $pdf->Cell(30,5,"Last Name");
// $pdf->Cell(30,5,"Email Address");

$pdf->Ln();

$fill = false;
$pdf->SetFillColor(235, 236, 236);

// Fetch data from table
$result = mysqli_query($con, "select * from register_tbl");

while ($row = mysqli_fetch_array($result)) {
    $pdf->Cell($width_cell[0], 5, "{$row['registerId']}", 0, 0, 'C', $fill);
    $pdf->Cell($width_cell[1], 5, "{$row['firstname']}", 0, 0, 'A', $fill);
    $pdf->Cell($width_cell[2], 5, "{$row['lastname']}", 0, 0, 'A', $fill);
    $pdf->Cell($width_cell[3], 5, "{$row['phonenum']}", 0, 0, 'A', $fill);
    $pdf->Cell($width_cell[4], 5, "{$row['housenum']}", 0, 0, 'C', $fill);
    $pdf->Cell($width_cell[5], 5, "{$row['streetPurok']}", 0, 0, 'A', $fill);
    $pdf->Cell($width_cell[6], 5, "{$row['email']}", 0, 0, 'A', $fill);
    $pdf->Cell($width_cell[7], 5, "{$row['regs_date']}", 0, 1, 'A', $fill);
    $fill = !$fill;
}

$pdf->Output();
