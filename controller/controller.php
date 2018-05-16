<?php
	//include class model
	include "model/model.php";
	
	class controller{
		//variabel public
		public $model;
		
		//inisialisasi awal untuk class
		function __construct(){
			$this->model = new model(); //variabel model merupakan objek baru yang dibuat dari class model
		}
		
		function index(){
			 include "view/login.php"; //memamnggil view.php pada folder view
		}
		
function viewhomePeserta(){
			 include "view/homepeserta.php"; //memamnggil view.php pada folder view
		}
function viewhomeAdMhs(){
			 include "view/homeAdm.php"; //memamnggil view.php pada folder view
		}
		
function viewhomeAdAkad(){
			 include "view/homeAdmAkad.php"; //memamnggil view.php pada folder view
		}
function viewhomeSk1(){
			 include "view/homeSk1.php"; //memamnggil view.php pada folder view
		}
		
function viewhomeDekan(){
			 include "view/homeDekan.php"; //memamnggil view.php pada folder view
		}

function viewJadwalPeserta(){
			  $jadwal = $this->model->getjadwalP();
             include 'view/jadwalP.php';
	}
function viewHasilUM(){

			  $hasil = $this->model->gethasilUM();
             include 'view/kelulusan.php';
	}

function viewProfil(){

			  $profil = $this->model->getProfil();
             include 'view/profil.php';
	}
function viewKartuPDF(){

			  $profil = $this->model->getProfil();
             include 'view/cetakkartu.php';
	}
function viewFormPeserta(){

			  $profil = $this->model->getProfil();
             include 'view/formpeserta.php';
	}

function viewPeserta(){

			  $profil = $this->model->getPeserta();
             include 'view/pesertaum.php';
	}
function viewPesertaKhs(){

			  $profil = $this->model->getPeserta();
             include 'view/pesertaumKhs.php';
	}
function viewPesertaSk1(){

			  $profil = $this->model->getPeserta();
             include 'view/pesertaumSk1.php';
	}
	function viewPesertaDkn(){

			  $profil = $this->model->getPeserta();
             include 'view/pesertaumDkn.php';
	}

function viewDraftPeserta(){

			  $data = $this->model->getPeserta();
             include 'view/draftPeserta.php';
	}
	function viewKelulusanUM(){

			  $profil = $this->model->getLulus();
			  $profil2 = $this->model->getNonLulus();
             include 'view/KelulusanAkad.php';
	}
	function viewKelulusanUMDkn(){

			  $profil = $this->model->getLulus();
			  $profil2 = $this->model->getNonLulus();
             include 'view/KelulusanDkn.php';
	}

function viewDraftKelulusanUM(){

			  $data = $this->model->getLulus();
             include 'view/draftKelulusan.php';
	}
function viewVer1(){

			  $profil = $this->model->getIsiVer1();
             include 'view/ver1Akad.php';
	}
function viewVerKhs(){

			  $profil = $this->model->getIsiVer1Khs();
             include 'view/verKhs.php';
	}

function viewVerSk1(){

			  $profil = $this->model->getIsiVer1Sk1();
             include 'view/verSk1.php';
	}

function viewVerDkn(){

			  $profil = $this->model->getIsiVer1Dkn();
             include 'view/verDkn.php';
	}


	function ver1khs($id,$st){

			  $profil = $this->model->veri1khs($id,$st);
           if($profil==true){
if($st==1)

		{echo "<script>alert('Verifikasi  UKT Berhasil')</script>";}
	else{echo "<script>alert('Penentuan UKT Ditolak')</script>";}
	echo "<script language='javascript'>window.location='index.php?PreDUKhs'</script>";
}
	}	function ver1sk1($id,$st){

			  $profil = $this->model->veri1Sk1($id,$st);
           if($profil==true){
if($st==1)

		{echo "<script>alert('Verifikasi  UKT Berhasil')</script>";}
	else{echo "<script>alert('Penentuan UKT Ditolak')</script>";}
	echo "<script language='javascript'>window.location='index.php?PreDUSk1'</script>";
}
	}


function ver1dkn($id,$st){

			  $profil = $this->model->veri1Dkn($id,$st);
           if($profil==true){
if($st==1)

		{echo "<script>alert('Verifikasi  UKT Berhasil')</script>";}
	else{echo "<script>alert('Penentuan UKT Ditolak')</script>";}
	echo "<script language='javascript'>window.location='index.php?PreDUDkn'</script>";
}
	}



	function ver1Akad($id,$tot,$st){

			  $profil = $this->model->veri1akad($id,$tot,$st);
           if($profil==true){


		echo "<script>alert('Verifikasi Berhasil')</script>";
	echo "<script language='javascript'>window.location='index.php?PreDU'</script>";
}
	}

		function ver2Akad($id,$st){

			  $profil = $this->model->veri2akad($id,$st);
           

		echo "<script>alert('Verifikasi Berhasil NIM Mhs= $profil')</script>";
	echo "<script language='javascript'>window.location='index.php?pascaDU'</script>";

	}
function viewVer2(){

			  $profil = $this->model->getIsiVer2();
             include 'view/ver2Akad.php';
	}

function viewLokasiPeserta(){

			  $lokasi = $this->model->getlokasi();
             include 'view/lokasiP.php';
	}
function viewJadwalAkad(){
			  $jadwal = $this->model->getjadwal();
             include 'view/jadwalAkad.php';
	}
	
function viewFormJadwal($id){
			  $jadwal = $this->model->getdatajadwal($id);
             include 'view/formJadwal.php';
	}	
function viewFormJadwalBaru(){
			 include 'view/formJadwalB.php';
	}
function viewSemuanilai(){
			  $profil = $this->model->getNilai();
             include 'view/semuanilai.php';
	}
function viewNilai(){
	$kk=$_POST['kk'];
	if($kk==null){
		  $profil = $this->model->getNilai();
        	
		}else{
			  $profil = $this->model->getnilai2($kk);
             }
             include 'view/semuanilai.php';
	}	
function viewFormNilai($id){
			  $nilai = $this->model->getdatanilai($id);
             include 'view/formNilai.php';
	}	
function rand_string( $length ) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$length);

}
	


function btlokasi(){
	$indeks=0; 
	$lokasi3=null;
	$lokasi=null;
	$lokasium=$this->model->getlokasibaru();
	foreach ($lokasium as $key ) {

$lokasi3[$indeks]= $key['idlokasi'];
$indeks=$indeks+1;
	}

	$nomor= rand(0,$indeks);
$par=0;
for ($i=0; $i <$indeks ; $i++) { 

	if($nomor==$i){
$lokasi=$lokasi3[$nomor];
}
}

         return $lokasi;
}





function inputJadwal(){

			$tgl = $_POST['tgl'];
			$sbj= $_POST['sbj'];
			$st= $_POST['st'];
			$et= $_POST['et'];
			if($tgl==null || $sbj==null || $et==null || $st==null ){

		echo "<script>alert('Form tidak boleh ada yang kosong')</script>";
		echo "<script language='javascript'>window.location='index.php?tambahJadwal'</script>";
		} else{
		$input=$this->model->inputJadwal($tgl,$sbj,$st,$et);
			if($input==true){
echo "<script>alert(' Data berhasil diinputkan')</script>";
	echo "<script language='javascript'>window.location='index.php?Penjadwalan'</script>";

			

	}
}

}
	
		function baru(){
	$pass =$this->rand_string(8);

$id= uniqid();
 $lokasi2=$this->btlokasi();

echo "<script>alert(' Id : $id  Password : $pass lokasi : $lokasi2')</script>";
 
			$baru=$this->model->inputum($id,$pass,$lokasi2);
				if($baru==true)
{

echo "<script>alert(' Id : $id  Password : $pass lokasi : $lokasi2')</script>";
 $login = $this->model->cekLogin($id, $pass);
			
}
else{
echo "<script>alert(' Errorr')</script>";

}
}


		function selesai(){
			$get=$this->model->getKelulusan();
			if($get==true){

echo "<script>alert(' Data Hasil Ujian Mandiri berhasil diproses')</script>";
		
	echo "<script language='javascript'>window.location='index.php?hasil'</script>";
		}
		else{
echo "<script>alert(' Pemrosesan data Eror')</script>";
		
	echo "<script language='javascript'>window.location='index.php?hasil'</script>";
}
}

function updateProfil(){

			$nama = $_POST['nm'];
			$pass= $_POST['pass'];
			$tempat= $_POST['tmpt'];
			$tgl= $_POST['ttl'];
			$jk= $_POST['jk'];
			$pekerjaan= $_POST['pekerjaan'];
			$na= $_POST['na'];
			$ni= $_POST['ni'];
			$alamat= $_POST['almt'];
			$nsma= $_POST['nsma'];
			$jursma= $_POST['jur'];
			$tahun= $_POST['thn'];
			$un= $_POST['un'];
			$prodi = $_POST['idpro'];
			$ubah=$this->model->updateprofil($nama, $pass, $tempat,$tgl,$jk,$pekerjaan,$na,$ni, $alamat,$nsma,$jursma,$tahun,$un, $prodi);
			if($ubah==true){
echo "<script>alert(' Data berhasil diubah')</script>";
	header("location:index.php?profil");

			}
}

function updateJadwal(){

			$idjd = $_SESSION['idj'];
			$tgl = $_POST['tgl'];
			$sbj= $_POST['sbj'];
			$st= $_POST['st'];
			$et= $_POST['et'];
		$ubah=$this->model->updatejadwal($idjd,$tgl,$sbj,$st,$et);
			if($ubah==true){
echo "<script>alert(' Data berhasil diubah')</script>";
	echo "<script language='javascript'>window.location='index.php?Penjadwalan'</script>";

			

	}
}
		

function updatenilai(){

			$idp = $_SESSION['idp'];
			$tkd = $_POST['tkd'];
			$mipa= $_POST['mipa'];
			$bhs= $_POST['bhs'];
if($tkd!=null || $mipa!=null || $bhs!=null)			{
		$ubah=$this->model->updatenilai($idp,$tkd,$bhs,$mipa);

			if($ubah==true){
echo "<script>alert(' Data berhasil disimpan')</script>";
	echo "<script language='javascript'>window.location='index.php?hasil'</script>";

			

	}
} else {echo "<script>alert(' Tidak boleh ada borang yang Kosong')</script>";	
echo "<script language='javascript'>window.location='index.php?editnilai&idp=$idp'</script>";

	}

}
	
		function login(){


			$user = $_POST['user'];
			$pw = $_POST['pass'];
			if($pw==null || $user==null){

		echo "<script>alert('Username atau password anda kosong')</script>";
		echo "<script language='javascript'>window.location='index.php'</script>";
		} else{
			$user = $_POST['user'];
			$pw = $_POST['pass'];	
			$login = $this->model->cekLogin($user, $pw);
			}
		}

function dashAdmin(){
	$user = $_SESSION['idAdm'];
			$pw = $_SESSION['pass'];	
			$login = $this->model->cekLogin($user, $pw);
}

		function logout(){

session_destroy();
echo "<script language='javascript'>window.location='index.php'</script>";
		}
		






		
		function __destruct(){
		}
	}
?>