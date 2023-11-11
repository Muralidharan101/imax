<?php

require('fpdf.php');

class PDF extends FPDF
{

    function Header()
    {
        $this->Ln(5);
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

$pdf = new PDF('P','mm','A4');
$pdf->AliasNbPages();

$pdf->AddPage();

$pdf->SetFont('Arial','B',15);

$y_len = $pdf->GetY();
$pdf->SetY($y_len);
$pdf->MultiCell(190,6, 'IMAX TROPHIES', 0, 'L', 0);
$pdf->Ln(3);
$pdf->SetFont('Arial','B',10);
$pdf->MultiCell(190,4, '13/5311, TRICHY ROAD, MANAPPARAI, TRICHY', 0, 'L', 0);
$pdf->MultiCell(190,4, 'GST : 33DZOPS7101A2ZJ', 0, 'L', 0);
$pdf->MultiCell(190,4, 'Phone : 9894932745', 0, 'L', 0);

$pdf->Image('imax.jpg', 164, 10 , 35);

$pdf->SetFont('Arial','B',13);
$pdf->Ln(20);
$pdf->MultiCell(190,4, 'INVOICE', 0, 'C', 0);

$row_size_1 = 95;

$pdf->Ln(3);
$pdf->SetFont('Arial','',9);
$y_len = $pdf->GetY();
$pdf->MultiCell($row_size_1,4, 'Invoice No. : 9698370385', 0, 'L', 0);
$pdf->SetXY(10+$row_size_1,$y_len);
$pdf->MultiCell($row_size_1,4, 'Date : 18-Oct-2023', 0, 'R', 0);

$pdf->Ln(3);
$y_len = $pdf->GetY();
$pdf->MultiCell($row_size_1,4, 'Billing Address', 1, 'L', 0);
$pdf->SetXY(10+$row_size_1,$y_len);
$pdf->MultiCell($row_size_1,4, 'Shipping Address', 1, 'L', 0);

$start_y = $pdf->GetY();

$pdf->Ln(3);
$y_len = $pdf->GetY();
$pdf->MultiCell($row_size_1,4, 'Mr. Office of the Dean', 0, 'L', 0);
$pdf->SetXY(10+$row_size_1,$y_len);
$pdf->MultiCell($row_size_1,4, 'Mr. Office of the Dean', 0, 'L', 0);

$y_len = $pdf->GetY();
$pdf->MultiCell($row_size_1,4, 'Anbil dharmalingam agri. college & res. instt.,, tamilnadu agricultural university', 0, 'L', 0);
$pdf->SetXY(10+$row_size_1,$y_len);
$pdf->MultiCell($row_size_1,4, 'Anbil dharmalingam agri. college & res. instt.,, tamilnadu agricultural university', 0, 'L', 0);

$y_len = $pdf->GetY();
$pdf->MultiCell($row_size_1,4, 'Triruchirappalli, Tamil Nadu - 620027', 0, 'L', 0);
$pdf->SetXY(10+$row_size_1,$y_len);
$pdf->MultiCell($row_size_1,4, 'Triruchirappalli, Tamil Nadu - 620027', 0, 'L', 0);

$y_len = $pdf->GetY();
$pdf->MultiCell($row_size_1,4, 'Phone : 9123599235', 0, 'L', 0);
$pdf->SetXY(10+$row_size_1,$y_len);
$pdf->MultiCell($row_size_1,4, 'Phone : 9123599235', 0, 'L', 0);

$pdf->Ln(3);
$end_y = $y_len = $pdf->GetY();

$height = $end_y - $start_y;

$pdf->Rect(10,$start_y,$row_size_1,$height);
$pdf->Rect($row_size_1+10,$start_y,$row_size_1,$height);

$row_1 = 8;
$row_2 = 49;
$row_3 = 15;
$row_4 = 12;
$row_5 = 12;
$row_6 = 20;
$row_7 = 20;
$row_8 = 17;
$row_9 = 17;
$row_10 = 20;

$pdf->Ln(3);
$pdf->SetFont('Arial','B',8);

$y_len = $pdf->GetY();
$pdf->MultiCell($row_1,4, '#', 1, 'L', 0);
$pdf->SetXY(10+$row_1,$y_len);
$pdf->MultiCell($row_2,4, 'Item & Description', 1, 'L', 0);
$pdf->SetXY(10+$row_1+$row_2,$y_len);
$pdf->MultiCell($row_3,4, 'HSN', 1, 'L', 0);
$pdf->SetXY(10+$row_1+$row_2+$row_3,$y_len);
$pdf->MultiCell($row_4,4, 'Qty', 1, 'L', 0);
$pdf->SetXY(10+$row_1+$row_2+$row_3+$row_4,$y_len);
$pdf->MultiCell($row_5,4, 'Unit', 1, 'L', 0);
$pdf->SetXY(10+$row_1+$row_2+$row_3+$row_4+$row_5,$y_len);
$pdf->MultiCell($row_6,4, 'Rate', 1, 'L', 0);
$pdf->SetXY(10+$row_1+$row_2+$row_3+$row_4+$row_5+$row_6,$y_len);
$pdf->MultiCell($row_7,4, 'Taxable', 1, 'L', 0);
$pdf->SetXY(10+$row_1+$row_2+$row_3+$row_4+$row_5+$row_6+$row_7,$y_len);
$pdf->MultiCell($row_8,4, 'CGST', 1, 'L', 0);
$pdf->SetXY(10+$row_1+$row_2+$row_3+$row_4+$row_5+$row_6+$row_7+$row_8,$y_len);
$pdf->MultiCell($row_9,4, 'SGST', 1, 'L', 0);
$pdf->SetXY(10+$row_1+$row_2+$row_3+$row_4+$row_5+$row_6+$row_7+$row_8+$row_9,$y_len);
$pdf->MultiCell($row_10,4, 'Amount', 1, 'L', 0);


$pdf->SetFont('Arial','',8);

$y_len = $pdf->GetY();
$pdf->MultiCell($row_1,4, '1', 0, 'R', 0);
$pdf->SetXY(10+$row_1,$y_len);
$pdf->MultiCell($row_2,4, 'Medal 2.5inches full customized with printed tag', 0, 'L', 0);
$should_start = $pdf->GetY();
$pdf->SetXY(10+$row_1+$row_2,$y_len);
$pdf->MultiCell($row_3,4, '83062920', 0, 'R', 0);
$pdf->SetXY(10+$row_1+$row_2+$row_3,$y_len);
$pdf->MultiCell($row_4,4, '250', 0, 'R', 0);
$pdf->SetXY(10+$row_1+$row_2+$row_3+$row_4,$y_len);
$pdf->MultiCell($row_5,4, 'no.s', 0, 'L', 0);
$pdf->SetXY(10+$row_1+$row_2+$row_3+$row_4+$row_5,$y_len);
$pdf->MultiCell($row_6,4, '80.00', 0, 'R', 0);
$pdf->SetXY(10+$row_1+$row_2+$row_3+$row_4+$row_5+$row_6,$y_len);
$pdf->MultiCell($row_7,4, '20,000.00', 0, 'R', 0);
$pdf->SetXY(10+$row_1+$row_2+$row_3+$row_4+$row_5+$row_6+$row_7,$y_len);
$pdf->MultiCell($row_8,4, '6.00%', 0, 'R', 0);
$pdf->SetXY(10+$row_1+$row_2+$row_3+$row_4+$row_5+$row_6+$row_7+$row_8,$y_len);
$pdf->MultiCell($row_9,4, '6.00%', 0, 'R', 0);
$pdf->SetXY(10+$row_1+$row_2+$row_3+$row_4+$row_5+$row_6+$row_7+$row_8+$row_9,$y_len);
$pdf->MultiCell($row_10,4, '22,400.00', 0, 'R', 0);

$height = $should_start - $y_len;
$pdf->Rect(10,$y_len,$row_1,$height);
$pdf->Rect(10+$row_1,$y_len,$row_2,$height);
$pdf->Rect(10+$row_1+$row_2,$y_len,$row_3,$height);
$pdf->Rect(10+$row_1+$row_2+$row_3,$y_len,$row_4,$height);
$pdf->Rect(10+$row_1+$row_2+$row_3+$row_4,$y_len,$row_5,$height);
$pdf->Rect(10+$row_1+$row_2+$row_3+$row_4+$row_5,$y_len,$row_6,$height);
$pdf->Rect(10+$row_1+$row_2+$row_3+$row_4+$row_5+$row_6,$y_len,$row_7,$height);
$pdf->Rect(10+$row_1+$row_2+$row_3+$row_4+$row_5+$row_6+$row_7,$y_len,$row_8,$height);
$pdf->Rect(10+$row_1+$row_2+$row_3+$row_4+$row_5+$row_6+$row_7+$row_8,$y_len,$row_9,$height);
$pdf->Rect(10+$row_1+$row_2+$row_3+$row_4+$row_5+$row_6+$row_7+$row_8+$row_9,$y_len,$row_10,$height);

$y_len = $should_start;


$row_1 = 57;
$row_2 = 59;
$row_3 = 54;
$row_4 = 20;

$y_len+=3;
$starting_y = $y_len;
// $pdf->Ln(3);
$pdf->SetY($starting_y);
$pdf->SetFont('Arial','B',8);
$pdf->MultiCell($row_1,4, 'Bank Details :', 0, 'L', 0);
$pdf->SetFont('Arial','',8);
$pdf->MultiCell($row_1,4, 'Bank Name : HDFC', 0, 'L', 0);
$pdf->MultiCell($row_1,4, 'Branch : MANAPPARAI', 0, 'L', 0);
$pdf->MultiCell($row_1,4, 'Bank Details :', 0, 'L', 0);
$pdf->MultiCell($row_1,4, 'Account No. : 50200073297410', 0, 'L', 0);
$pdf->MultiCell($row_1,4, 'IFSC : HDFC0005880', 0, 'L', 0);
$pdf->MultiCell($row_1,4, 'SWIFT Code : HDFCINBB', 0, 'L', 0);

$ending_y = $pdf->GetY();
$height = $ending_y - $starting_y;

$pdf->Rect(10,$starting_y,$row_1,$height);
$pdf->Rect(10+$row_1,$starting_y,$row_2,$height);

$pdf->SetXY(10+$row_1,$starting_y);
$pdf->SetFont('Arial','B',8);
$pdf->MultiCell($row_2,4, 'Total Invoice Amount in Words :', 0, 'L', 0);
$pdf->Ln(2);
$pdf->SetX(10+$row_1);
$pdf->MultiCell($row_2,4, 'Rupees One Lakh Ten Thousand Three Hundred Twenty only', 0, 'L', 0);

$pdf->SetFont('Arial','',9);

$pdf->SetXY(10+$row_1+$row_2,$starting_y);
$pdf->MultiCell($row_3,7, 'Total Amount before Tax', 1, 'R', 0);
$pdf->SetXY(10+$row_1+$row_2+$row_3,$starting_y);
$pdf->MultiCell($row_4,7, '98,500.00', 1, 'R', 0);

$temp_y = $pdf->GetY();
$pdf->SetXY(10+$row_1+$row_2,$temp_y);
$pdf->MultiCell($row_3,7, 'Add CGST', 1, 'R', 0);
$pdf->SetXY(10+$row_1+$row_2+$row_3, $temp_y);
$pdf->MultiCell($row_4,7, '5,910.00', 1, 'R', 0);

$temp_y = $pdf->GetY();
$pdf->SetXY(10+$row_1+$row_2,$temp_y);
$pdf->MultiCell($row_3,7, 'Add SGST', 1, 'R', 0);
$pdf->SetXY(10+$row_1+$row_2+$row_3, $temp_y);
$pdf->MultiCell($row_4,7, '5,910.00', 1, 'R', 0);

$pdf->SetFont('Arial','B',9);
$temp_y = $pdf->GetY();
$pdf->SetXY(10+$row_1+$row_2,$temp_y);
$pdf->MultiCell($row_3,7, 'Grand Total', 1, 'R', 0);
$pdf->SetXY(10+$row_1+$row_2+$row_3, $temp_y);
$pdf->MultiCell($row_4,7, '1,10,320.00', 1, 'R', 0);


$pdf->SetFont('Arial','B',8);

$starting_y = $y_len = $pdf->GetY();
$pdf->Ln(2);
$pdf->MultiCell(190,4, 'Terms & Conditions :', 0, 'L', 0);
$pdf->SetFont('Arial','',8);
$pdf->MultiCell(190,4, 'E.& O.E1. Goods once sold will not be taken back.2. If any damage occurred while transport, Company not responsible for that.3. Subject to \'Manapparai Jurisdiction\' only', 0, 'L', 0);

$pdf->Ln(3);

$pdf->MultiCell(190,4, 'Notes : Stickering included + metal cups all', 0, 'L', 0);

$ending_y = $pdf->GetY();

$height = $ending_y - $starting_y + 2;
$pdf->Rect(10,$y_len,190,$height);

$row_1 = 140;
$row_2 = 50;

$pdf->SetY($y_len + $height + 18);
$pdf->MultiCell($row_1,4, 'This is a computer-generated invoice.', 0, 'L', 0);
$pdf->SetY($y_len + $height + 18);
$pdf->MultiCell($row_1,4, 'E. & O. E', 0, 'R', 0);

$pdf->SetXY(10 + $row_1,$y_len + 24);
$pdf->MultiCell($row_2,4, 'For, IMAX TROPHIES', 0, 'C', 0);
$pdf->SetXY(10 + $row_1,$y_len + $height + 18);
$pdf->MultiCell($row_2,4, 'Authorised Signatory', 0, 'C', 0);

$pdf->Rect(10,$y_len+23,$row_1,$height);
$pdf->Rect(10+$row_1,$y_len+23,$row_2,$height);

$pdf->Ln(3);

$row_1 = 30;
$row_2 = 20;
$row_3 = 20;
$row_4 = 20;
$row_5 = 20;
$row_6 = 20;

$pdf->SetFont('Arial','B',8);

$y_len = $pdf->GetY();
$pdf->MultiCell($row_1,4, 'HSN/SAC Code', 1, 'L', 0);
$pdf->SetXY(10+$row_1,$y_len);
$pdf->MultiCell($row_2,4, 'Taxable', 1, 'L', 0);
$pdf->SetXY(10+$row_1+$row_2,$y_len);
$pdf->MultiCell($row_3,4, 'CGST %', 1, 'L', 0);
$pdf->SetXY(10+$row_1+$row_2+$row_3,$y_len);
$pdf->MultiCell($row_4,4, 'CGST', 1, 'L', 0);
$pdf->SetXY(10+$row_1+$row_2+$row_3+$row_4,$y_len);
$pdf->MultiCell($row_5,4, 'SGST %', 1, 'L', 0);
$pdf->SetXY(10+$row_1+$row_2+$row_3+$row_4+$row_5,$y_len);
$pdf->MultiCell($row_6,4, 'SGST', 1, 'L', 0);

$pdf->SetFont('Arial','',8);

$y_len = $pdf->GetY();
$pdf->MultiCell($row_1,4, '83062920', 1, 'L', 0);
$pdf->SetXY(10+$row_1,$y_len);
$pdf->MultiCell($row_2,4, '98,500.00', 1, 'R', 0);
$pdf->SetXY(10+$row_1+$row_2,$y_len);
$pdf->MultiCell($row_3,4, '6.00%', 1, 'R', 0);
$pdf->SetXY(10+$row_1+$row_2+$row_3,$y_len);
$pdf->MultiCell($row_4,4, '5,910.00', 1, 'R', 0);
$pdf->SetXY(10+$row_1+$row_2+$row_3+$row_4,$y_len);
$pdf->MultiCell($row_5,4, '6.00%', 1, 'R', 0);
$pdf->SetXY(10+$row_1+$row_2+$row_3+$row_4+$row_5,$y_len);
$pdf->MultiCell($row_6,4, '5,910.00', 1, 'R', 0);

$pdf->Output();
?>
