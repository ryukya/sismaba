<?php
require('fpdf18/fpdf.php');
class PDF extends FPDF
{
	function Header()
{
// setting properti font
$this->SetFont('Arial','I',10);
// menulis header
$this->Cell(30,10,'Draft Peserta Lulus UM- Dokumentasi Universitas Jember',0,0,'L');
// membuat jarak terhadap cell sebelumnya
$this->Cell(132);
// setting properti font
$this->SetFont('Arial','B',10);
$this->Cell(30,10,'SIMABA-UNEJ.ac.id',0,0,'L');
// membuat garis dari koordinat (11 mm, 18 mm) sampai koordinat (198
// mm,18 mm)
$this->Line(11,18,198,18);
// membuat space kosong antara header dengan teks konten
$this->Ln(20);
}
// membaca data dari database





// function untuk menampilkan tabel
function TabelBiasa($header,$data)
{
// setting lebar masing-masing kolom dalam mm
$w=array(10,40,25,25,25,30,25);
// membuat kepala tabel
for($i=0;$i<count($header);$i++)
{
// memberi warna latar merah pada kepala tabel
$this->SetFillColor(210, 250, 230);
// setting huruf bold pada kepala tabel
$this->SetFont('Arial','',9);
// parameter L menunjukkan teks rata kiri pada setiap
// sel kepala tabel
$this->Cell($w[$i],7,$header[$i],1,0,'C',1);
}
$this->Ln();
// menampilkan data
// setting jenis font pada data tabel
$this->SetFont('Arial','',8);
$indeks=1;
foreach($data as $var)
{ 
$this->Cell($w[0],6,$indeks,1);

$this->Cell($w[1],6,$var['nama'],1);

$this->Cell($w[2],6,$var['nilai_TKD'],1);

$this->Cell($w[3],6,$var['nilai_Bahasa'],1);

$this->Cell($w[4],6,$var['nilai_MIPA'],1);

$this->Cell($w[5],6,$var['nama_prodi'],1);
$this->Cell($w[6],6,'Lulus',1);
$indeks=$indeks+1;
// penutup tabel
//$this->Cell(array_sum($w),0,'','T');
$this->Ln();
// menampilkan data
}
}
}
$pdf=new PDF();
// nama-nama kolom untuk kepala tabel
$header=array('No','Nama Peserta','Nilai TKD','Nilai Bahasa','Nilai MIPA','Nama Prodi','Status');
$pdf->AddPage();
// memanggil function untuk menampilkan tabel
$pdf->TabelBiasa($header,$data);
$pdf->Output();
?>