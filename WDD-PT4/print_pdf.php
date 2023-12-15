<?php
include('connect.php');
include('fpdf/fpdf.php');


$pdf = new FPDF();

$pdf->AddPage();
//Set the base font & size
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(200, 5, "Lyceum of the Philippines University", 0, 0, 'C');
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(200, 5, "Makiling, Calamba City", 0, 0, 'C');
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(200, 5, "Student Registration List", 0, 0, 'C');
$pdf->Ln();
$pdf->Cell(350, 5, "--------------------------------------------------------------------------------------------------------------------------------------");
//Creating new line
$pdf->Ln();
$width_cell = array(30, 50, 50, 60, 50);
$pdf->SetFont('Arial', 'B', 11);

//header back color
$pdf->SetFillColor(193, 229, 252);
$pdf->Cell($width_cell[0], 10, 'ID', 0, 0, 'C', true);
$pdf->Cell($width_cell[1], 10, 'First Name', 0, 0, 'A', true);
$pdf->Cell($width_cell[2], 10, 'Last Name', 0, 0, 'A', true);
$pdf->Cell($width_cell[3], 10, 'Email Address', 0, 0, 'A', true);

//$pdf->SetFont('Arial','B',11);
//$pdf->Cell(10,5,"ID");
//$pdf->Cell(30,5,"First Name");
// $pdf->Cell(30,5,"Last Name");
// $pdf->Cell(30,5,"Email Address");

$pdf->Ln();

$fill = false;
$pdf->SetFillColor(235, 236, 236);

// Fetch data from table
$result = mysqli_query($con, "select * from users_tbl");

while ($row = mysqli_fetch_array($result)) {
    $pdf->Cell($width_cell[0], 5, "{$row['id']}", 0, 0, 'C', $fill);
    $pdf->Cell($width_cell[1], 5, "{$row['firstname']}", 0, 0, 'A', $fill);
    $pdf->Cell($width_cell[2], 5, "{$row['lastname']}", 0, 0, 'A', $fill);
    $pdf->Cell($width_cell[3], 5, "{$row['email']}", 0, 1, 'A', $fill);
    $fill = !$fill;
}

$pdf->Output();
