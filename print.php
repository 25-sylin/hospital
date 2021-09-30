<?php
$id=$_GET['id'];

require('fpdf/fpdf.php');
include('connection.php');


$sql="select * from `newpat` where nid='$id'";
$result = $con->query($sql);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('logs.png',62,12,10);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(180,15,'KIMS HOSPITAL  ',1,1,'C');
$pdf->SetFont('Arial','B',14);

$pdf->Cell(30,9,'OP.NUM  ',1,0,'C');   
$pdf->Cell(50,9,'NAME  ',1,0,'C');    
$pdf->Cell(50,9,'MOBILE NUMBER  ',1,0,'C');
$pdf->Cell(50,9,'LOCATION  ',1,1,'C');



// $pdf->Cell(30,5,'OPNUM : ',1,0,'C');   
// $pdf->Cell(50,5,'NAME : ',1,0,'C');    
// $pdf->Cell(50,5,'MOBILE NUMBER : ',1,0,'C');
// $pdf->Cell(50,5,'LOCATION : ',1,1,'C');





while($row = $result->fetch_object()){
	$id = $row->opnum;
	$name = $row->name;
	$phone = $row->phone;
	$city = $row->city;
	

	   $pdf->Cell(30,15,$id,1,0,'C'); 
	   $pdf->Cell(50,15,$name,1,0,'C');
	    $pdf->Cell(50,15,$phone,1,0,'C');
	     $pdf->Cell(50,15,$city,1,0,'C');

	    

	   $pdf->Ln();
}
$pdf->SetFont('Arial','B',10);
$pdf->Cell(180,7,'THANK YOU! VISIT AGAIN!!!  ',1,1,'C');
$pdf->Output();
?>