<?php

include './library/fpdf.php';
include 'koneksi.php';

$pdf = new FPDF();
$pdf->AddPage();
 
$pdf->SetFont('Times','B',13);
$pdf->Cell(200,10,'Data Pejabat',0,0,'C');
 
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(50,7,'Nama' ,1,0,'C');
$pdf->Cell(75,7,'Nip',1,0,'C');
$pdf->Cell(55,7,'SK Pengangkatan',1,0,'C');
 
 
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$sql = "SELECT * FROM users";
$data = $conn->query($sql);
while($row = $data->fetch_assoc()){
  $pdf->Cell(10,6, $no++,1,0,'C');
  $pdf->Cell(50,6, $row['nama'],1,0);
  $pdf->Cell(75,6, $row['nip'],1,0);  
  $pdf->Cell(55,6, $row['sk_pengangkatan'],1,1);
}
$pdf->Output();
?>