




<?php
require('fpdf18/fpdf.php'); // file fpdf.php harus diincludekan
class PDF extends FPDF
{
function Header()
{
// setting properti font
$this->SetFont('Arial','I',10);
// menulis header
$this->Cell(30,10,'Kartu Peserta Ini Harap Dibawa Saat Ujian',0,0,'L');
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

}
$pdf=new PDF('P','mm','A4');
$pdf->SetMargins(4,4,3);

$title='Kartu Peserta UM';
$pdf->SetTitle($title);
$pdf->AddPage();
$pdf->SetFont('Times','',12);

$pdf->MultiCell(0, 5, "ID Peserta	:	".$profil[0]['id']."
	Nama Peserta	:	".$profil[0]['nama']."
	Alamat			:	".$profil[0]['alamat']."
	Nama SMA 		:	".$profil[0]['namasma']."
	Jurusan SMA 	:	".$profil[0]['jurusansma']."
	Prodi Pilihan	:	".$profil[0]['namaprodi']."
	Lokasi Ujian	:	".$profil[0]['namalokasi']."
*Kartu Ujian ini harap dibawa saat melakukan proses daftar ulang.
Peserta yang tidak membawa kartu ujian tidak diperbolehkan masuk ke dalam ruang ujian.

	. ");
$pdf->Output();
?>