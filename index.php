<?php
	//include class controller
	include "controller/controller.php";
	
	//variabel main merupakan objek baru yang dibuat dari class controller
	$main = new controller();
	
	//kondisi untuk menampilkan halaman web yang diminta
	if(isset($_GET['baru'])){ //kondisi untuk mengakses halaman edit
		$main->baru();
	}else if(isset($_GET['login'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$main->login();
	}else if(isset($_GET['homepeserta'])){
		$main->viewhomePeserta(); //kondisi untuk mengakses halaman add
	}else if(isset($_GET['homeAdAkad'])){
		$main->viewhomeAdAkad(); //kondisi untuk mengakses halaman add
	}else if(isset($_GET['homeAdMhs'])){
		$main->viewhomeAdMhs(); //kondisi untuk mengakses halaman add
	}else if(isset($_GET['homeDekan'])){
		$main->viewhomeDekan(); //kondisi untuk mengakses halaman add
	}else if(isset($_GET['homeSk1'])){
		$main->viewhomeSk1(); //kondisi untuk mengakses halaman add
	}else if(isset($_GET['jadwalpeserta'])){
		$main->viewJadwalPeserta(); //kondisi untuk mengakses halaman add
	}else if(isset($_GET['lokasipeserta'])){
		$main->viewLokasiPeserta(); //kondisi untuk mengakses halaman add
	}else if(isset($_GET['logout'])){
		$main->logout(); //kondisi untuk mengakses halaman add
	}else if(isset($_GET['hasilUM'])){
		$main->viewHasilUM(); //kondisi untuk mengakses halaman add
	}else if(isset($_GET['profil'])){
		$main->viewProfil(); //kondisi untuk mengakses halaman add
	}else if(isset($_GET['editpeserta'])){
		$main->viewFormPeserta();
	}else if(isset($_GET['updateprofil'])){
		$main->updateProfil();
	}else if(isset($_GET['cetakkartu'])){
		$main->viewKartuPDF();
	}else if(isset($_GET['Penjadwalan'])){
		$main->viewJadwalAkad();
	}else if(isset($_GET['editjadwal'])){
		$main->viewFormJadwal($_GET['idjd']);
	}else if(isset($_GET['updatejadwal'])){
		$main->updateJadwal();
	}else if(isset($_GET['tambahJadwal'])){
		$main->viewFormJadwalBaru();
	}else if(isset($_GET['createJadwal'])){
		$main->inputJadwal();
	}else if(isset($_GET['tabelpeserta'])){
		$main->viewPeserta();
	}else if(isset($_GET['tabelpesertaKhs'])){
		$main->viewPesertaKhs();
	}else if(isset($_GET['tabelpesertaSk1'])){
		$main->viewPesertaSk1();
	}else if(isset($_GET['tabelpesertaDkn'])){
		$main->viewPesertaDkn();
	}else if(isset($_GET['PreDU'])){
		$main->viewVer1();
}else if(isset($_GET['PreDUKhs'])){
		$main->viewVerKhs();
}else if(isset($_GET['PreDUSk1'])){
		$main->viewVerSk1();
}else if(isset($_GET['PreDUDkn'])){
		$main->viewVerDkn();

	}else if(isset($_GET['ver1akad'])){
		$main->ver1akad($_GET['id'],$_GET['tot'],$_GET['st']);
	}else if(isset($_GET['verkhs'])){
		$main->ver1khs($_GET['id'],$_GET['st']);
	}else if(isset($_GET['versk1'])){
		$main->ver1sk1($_GET['id'],$_GET['st']);
	}else if(isset($_GET['verdkn'])){
		$main->ver1dkn($_GET['id'],$_GET['st']);

	}else if(isset($_GET['ver2akad'])){
		$main->ver2akad($_GET['id'],$_GET['st']);


	}else if(isset($_GET['pascaDU'])){
		$main->viewVer2();
	}else if(isset($_GET['hasil'])){
		$main->viewSemuanilai();
	}else if(isset($_GET['hasilUMakad'])){
		$main->viewKelulusanUM();
	}else if(isset($_GET['hasilUMDkn'])){
		$main->viewKelulusanUMDkn();
	}else if(isset($_GET['cetaklulus'])){
		$main->viewDraftKelulusanUM();
	}else if(isset($_GET['carinilai'])){
		$main->viewNilai();
	}else if(isset($_GET['selesai'])){
		$main->selesai();
	}else if(isset($_GET['editnilai'])){
		$main->viewFormnilai($_GET['idp']);
	}else if(isset($_GET['updatenilai'])){
		$main->updateNilai();
	}else if(isset($_GET['editjadwal'])){
		$main->viewFormJadwal($_GET['idjd']);
	}else if(isset($_GET['cetakpeserta'])){
		$main->viewDraftPeserta();
	}else if(isset($_SESSION['username'])){
		$main->viewhomePeserta(); //kondisi untuk mengakses halaman add
	}else if(isset($_SESSION['idAdm'])){
		$main->dashAdmin(); //kondisi untuk mengakses halaman add
	
	}else if(isset($_GET['deleteU'])){
		$id = $_GET['deleteU'];
		$main->deletePengguna($id); //kondisi untuk mengakses halaman add
	}else{
		$main->index(); //kondisi awal (menampilkan seluruh data)
	}
?>




