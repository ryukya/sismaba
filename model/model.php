 <?php

	class model{
		//inisialisasi awal untuk class biasa disebut instansiasi
		function __construct(){
			session_start();
			$connect = mysql_connect("localhost", "root", "");
			$db = mysql_select_db("simaba");
		}
		
		function execute($query){
			return mysql_query($query);
		}


function inputum($id,$pass,$lokasi2){       

$sql=" insert into tb_peserta_um (`id_peserta`, `password`, `id_lokasi`)
VALUES ('$id','$pass', '$lokasi2') ";
$select=mysql_query($sql) or die (mysql_error());


    return true;
    }

function inputJadwal($tgl,$sbj,$st,$et){       

$sql=" insert into tb_jadwal_um 
VALUES (null,'$tgl','$sbj', '$st','$et') ";
$select=mysql_query($sql) or die (mysql_error());


    return true;
    }
		
		function getjadwal(){
			$tahun=date('Year');
			$sql = mysql_query("select * from tb_jadwal_um  order by tanggal asc");
			$indeks=0;
			while($radata=mysql_fetch_array($sql)){

        $data [$indeks]["id"]=$radata["id_jadwal"];
        $data [$indeks]["tanggal"]=$radata["tanggal"];
        $data[$indeks]["s"]=$radata["subjek_tes"];
        $data[$indeks] ["st"]=$radata["start_time"];
        $data[$indeks]["et"]=$radata["end_time"];
$indeks=$indeks+1;

        }
return $data;
        }
	
		function getjadwalP(){
			$tahun=date('Y-M-D');
			$sql = mysql_query("select * from tb_jadwal_um  where tanggal>'$tahun' order by tanggal asc");
			$indeks=0;
			while($radata=mysql_fetch_array($sql)){

        $data [$indeks]["id"]=$radata["id_jadwal"];
        $data [$indeks]["tanggal"]=$radata["tanggal"];
        $data[$indeks]["s"]=$radata["subjek_tes"];
        $data[$indeks] ["st"]=$radata["start_time"];
        $data[$indeks]["et"]=$radata["end_time"];
$indeks=$indeks+1;

        }
return $data;
        }
		function getPeserta(){
			
			$sql = mysql_query("select * from tb_peserta_um mm  
	join tb_prodi pd on mm.id_prodi_pilihan=pd.id_prodi
 join tb_jenis_kelamin kl on kl.id_jenis_kelamin= mm.jenis_kelamin 
	 join tb_pekerjaan pk on pk.id_pekerjaan=mm.id_pekerjaan
	 join tb_jurusan_sma ma on mm.id_jurusan_sma=ma.id_jurusan_sma
	 join   tb_lokasi_ujian_um um on mm.id_lokasi=um.id_lokasi 
	  ");
		$indeks=0;
			while($radata=mysql_fetch_array($sql)){
        $data [$indeks]["id"]=$radata["id_peserta"];
        $data [$indeks]["password"]=$radata["password"];
        $data [$indeks]["nama"]=$radata["nama_peserta"];
        $data [$indeks]["jenis_kelamin"]=$radata["jenis_kelamin"];
        $data [$indeks]["tanggal_lahir"]=$radata["Tanggal_Lahir"];
        $data [$indeks]["tempat_lahir"]=$radata["Tempat_Lahir"];
        $data [$indeks]["alamat"]=$radata["alamat_tinggal"];
        $data [$indeks]["nama_ayah"]=$radata["Nama_Ayah"];
        $data [$indeks]["nama_ibu"]=$radata["Nama_Ibu"];
        $data [$indeks]["pekerjaan"]=$radata["nama_pekerjaan"];
        $data [$indeks]["namasma"]=$radata["nama_sma_smk"];
        $data [$indeks]["jurusansma"]=$radata["jurusan_sma"];
        $data [$indeks]["tahunlulus"]=$radata["tahun_lulus"];
       $data [$indeks]["rataun"]=$radata["rata_rata_nilai_un"];
         $data [$indeks]["namaprodi"]=$radata["nama_prodi"];
        $data [$indeks]["namalokasi"]=$radata["nama_lokasi"];
        
$indeks=$indeks+1;

        }
        return $data;
        }

        function getIsiVer1(){
			$data=null;
			$sql = mysql_query("select * from tb_peserta_um mm  
	join tb_prodi pd on mm.id_prodi_pilihan=pd.id_prodi
 join tb_jenis_kelamin kl on kl.id_jenis_kelamin= mm.jenis_kelamin 
	 join   tb_lokasi_ujian_um um on mm.id_lokasi=um.id_lokasi 
	 where status_lulus='L' and validasi_data_mhs =0
	  ");
		$indeks=0;
			while($radata=mysql_fetch_array($sql)){
        $data [$indeks]["id"]=$radata["id_peserta"];
        $data [$indeks]["nama"]=$radata["nama_peserta"];
        $data [$indeks]["jenis_kelamin"]=$radata["jenis_kelamin"];
        $data [$indeks]["nilaitotal"]=$radata["nilai_total"];
         $data [$indeks]["namaprodi"]=$radata["nama_prodi"];
         $data [$indeks]["status"]=$radata["validasi_data_mhs"];
$indeks=$indeks+1;

        }
        return $data;
        }
  function getIsiVer1Khs(){
			$data=null;
			$sql = mysql_query("select * from tb_peserta_um mm  
	join tb_prodi pd on mm.id_prodi_pilihan=pd.id_prodi
 join tb_jenis_kelamin kl on kl.id_jenis_kelamin= mm.jenis_kelamin 
join tb_ukt_mhs uk on uk.id_ukt_mahasiswa=mm.id_ukt_mahasiswa
	 join   tb_lokasi_ujian_um um on mm.id_lokasi=um.id_lokasi 
	 where mm.id_ukt_mahasiswa is not null and validasi_data_mhs =1 and ver_ukt_kmhs =0
	  ");
		$indeks=0;
			while($radata=mysql_fetch_array($sql)){
        $data [$indeks]["id"]=$radata["id_peserta"];
        $data [$indeks]["nama"]=$radata["nama_peserta"];
        $data [$indeks]["jenis_kelamin"]=$radata["jenis_kelamin"];
    $data [$indeks]["nilaitotal"]=$radata["nilai_total"];
         $data [$indeks]["namaprodi"]=$radata["nama_prodi"];
         $data [$indeks]["ukt"]=$radata["nominal"];
         $data [$indeks]["status"]=$radata["validasi_data_mhs"];
$indeks=$indeks+1;

        }
        return $data;
        }
 function getIsiVer1Sk1(){
			$data=null;
			$sql = mysql_query("select * from tb_peserta_um mm  
	join tb_prodi pd on mm.id_prodi_pilihan=pd.id_prodi
 join tb_jenis_kelamin kl on kl.id_jenis_kelamin= mm.jenis_kelamin 
join tb_ukt_mhs uk on uk.id_ukt_mahasiswa=mm.id_ukt_mahasiswa
	 join   tb_lokasi_ujian_um um on mm.id_lokasi=um.id_lokasi 
	 where ver_ukt_kmhs =1 and ver_ukt_skr1 = 0
	  ");
		$indeks=0;
			while($radata=mysql_fetch_array($sql)){
        $data [$indeks]["id"]=$radata["id_peserta"];
        $data [$indeks]["nama"]=$radata["nama_peserta"];
        $data [$indeks]["jenis_kelamin"]=$radata["jenis_kelamin"];
       $data [$indeks]["nilaitotal"]=$radata["nilai_total"];
         $data [$indeks]["namaprodi"]=$radata["nama_prodi"];
         $data [$indeks]["ukt"]=$radata["nominal"];
         $data [$indeks]["status"]=$radata["validasi_data_mhs"];
$indeks=$indeks+1;

        }
        return $data;
        }

 function getIsiVer1Dkn(){
			$data=null;
			$sql = mysql_query("select * from tb_peserta_um mm  
	join tb_prodi pd on mm.id_prodi_pilihan=pd.id_prodi
 join tb_jenis_kelamin kl on kl.id_jenis_kelamin= mm.jenis_kelamin 
join tb_ukt_mhs uk on uk.id_ukt_mahasiswa=mm.id_ukt_mahasiswa
	 join   tb_lokasi_ujian_um um on mm.id_lokasi=um.id_lokasi 
	 where  ver_ukt_skr1 = 1 and ver_ukt_dekan=0
	  ");
		$indeks=0;
			while($radata=mysql_fetch_array($sql)){
        $data [$indeks]["id"]=$radata["id_peserta"];
        $data [$indeks]["nama"]=$radata["nama_peserta"];
        $data [$indeks]["jenis_kelamin"]=$radata["jenis_kelamin"];
       $data [$indeks]["nilaitotal"]=$radata["nilai_total"];
         $data [$indeks]["namaprodi"]=$radata["nama_prodi"];
         $data [$indeks]["ukt"]=$radata["nominal"];
         $data [$indeks]["status"]=$radata["validasi_data_mhs"];
$indeks=$indeks+1;

        }
        return $data;
        }


         function getKelulusan(){
         	$batas=0;
         	$sq1=mysql_query("select * from tb_prodi where nama_prodi= 'Sistem Informasi'");
			while($radata=mysql_fetch_array($sq1)) {
//$batas=$rdata["kuota_maksimal"];
			}



$array=null;

			$data=null;
			$sql = mysql_query("select   * from tb_peserta_um mm  
	join tb_prodi pd on mm.id_prodi_pilihan=pd.id_prodi where id_editable=0
	and nilai_total>=batas_nilai_minimal order by nilai_total desc limit 50
	  ");
		$indeks='0';
			while($radata=mysql_fetch_array($sql)) {
        $data [$indeks]["id"]=$radata["id_peserta"];        
//$array[$indeks]=$rdata["id_peserta"];

$indeks=$indeks+1;
        }
$batasfor=$indeks+1;

if($data!=null) {
foreach ( $data as $var ) { 

		$query = "update tb_peserta_um set status_lulus='L',id_editable='1' where id_peserta= '".$var['id']."' ";
			$select=mysql_query($query) or die (mysql_error());
}
}
$query = "update tb_peserta_um set status_lulus='T',id_editable='1' where (  nilai_um_mipa!= null or nilai_um_tkd != null or nilai_um_bahasa != null) and status_lulus= null ";
			$select=mysql_query($query) or die (mysql_error());

       return true;
        }
 function getLulus(){
			
			$sql = mysql_query("select * from tb_peserta_um mm  
	join tb_prodi pd on mm.id_prodi_pilihan=pd.id_prodi where status_lulus='L'
	  ");
		$indeks=0;
			while($radata=mysql_fetch_array($sql)){
        $data [$indeks]["id"]=$radata["id_peserta"];
        $data [$indeks]["nama"]=$radata["nama_peserta"];
        $data [$indeks]["nilai_TKD"]=$radata["nilai_um_tkd"];
        $data [$indeks]["nilai_MIPA"]=$radata["nilai_um_mipa"];
        $data [$indeks]["nilai_Bahasa"]=$radata["nilai_um_bahasa"];
        $data [$indeks]["nama_prodi"]=$radata["nama_prodi"];
        $data [$indeks]["statuslulus"]=$radata["status_lulus"];
$indeks=$indeks+1;

        }
        return $data;
        }
         function getNonLulus(){
			
			$sql = mysql_query("select * from tb_peserta_um mm  
	join tb_prodi pd on mm.id_prodi_pilihan=pd.id_prodi where status_lulus='T'
	  ");
		$indeks=0;
			while($radata=mysql_fetch_array($sql)){
        $data [$indeks]["id"]=$radata["id_peserta"];
        $data [$indeks]["nama"]=$radata["nama_peserta"];
        $data [$indeks]["nilai_TKD"]=$radata["nilai_um_tkd"];
        $data [$indeks]["nilai_MIPA"]=$radata["nilai_um_mipa"];
        $data [$indeks]["nilai_Bahasa"]=$radata["nilai_um_bahasa"];
        $data [$indeks]["nama_prodi"]=$radata["nama_prodi"];
        $data [$indeks]["statuslulus"]=$radata["status_lulus"];
$indeks=$indeks+1;

        }
        return $data;
        }

  function getNilai(){
			$data=null;
			$sql = mysql_query("select * from tb_peserta_um mm  
	join tb_prodi pd on mm.id_prodi_pilihan=pd.id_prodi where id_editable=0
	  ");
		$indeks=0;
			while($radata=mysql_fetch_array($sql)){
        $data [$indeks]["id"]=$radata["id_peserta"];
        $data [$indeks]["nama"]=$radata["nama_peserta"];
        $data [$indeks]["nilai_TKD"]=$radata["nilai_um_tkd"];
        $data [$indeks]["nilai_MIPA"]=$radata["nilai_um_mipa"];
        $data [$indeks]["nilai_Bahasa"]=$radata["nilai_um_bahasa"];
$indeks=$indeks+1;

        }
        return $data;
        }
  function getNilai2($kk){
			
			$sql = mysql_query("select * from tb_peserta_um mm  
	join tb_prodi pd on mm.id_prodi_pilihan=pd.id_prodi where id_editable=0
	and nama_peserta like '%$kk%'
	  ");
		$indeks=0;
			while($radata=mysql_fetch_array($sql)){
        $data [$indeks]["id"]=$radata["id_peserta"];
        $data [$indeks]["nama"]=$radata["nama_peserta"];
        $data [$indeks]["nilai_TKD"]=$radata["nilai_um_tkd"];
        $data [$indeks]["nilai_MIPA"]=$radata["nilai_um_mipa"];
        $data [$indeks]["nilai_Bahasa"]=$radata["nilai_um_bahasa"];
$indeks=$indeks+1;

        }
        return $data;
        }

        function getIsiVer2(){
			$data=null;
			$sql = mysql_query("select * from tb_peserta_um mm  
	join tb_prodi pd on mm.id_prodi_pilihan=pd.id_prodi
 join tb_jenis_kelamin kl on kl.id_jenis_kelamin= mm.jenis_kelamin 
join tb_ukt_mhs uk on uk.id_ukt_mahasiswa=mm.id_ukt_mahasiswa
	 join   tb_lokasi_ujian_um um on mm.id_lokasi=um.id_lokasi 
	 where mm.id_ukt_mahasiswa is not null and validasi_data_mhs =1 and verifikasi_data_mhs =0
	  ");
		$indeks=0;
			while($radata=mysql_fetch_array($sql)){
        $data [$indeks]["id"]=$radata["id_peserta"];
        $data [$indeks]["nama"]=$radata["nama_peserta"];
        $data [$indeks]["jenis_kelamin"]=$radata["jenis_kelamin"];
        $data [$indeks]["nilai_TKD"]=$radata["nilai_um_tkd"];
        $data [$indeks]["nilai_MIPA"]=$radata["nilai_um_mipa"];
        $data [$indeks]["nilai_Bahasa"]=$radata["nilai_um_bahasa"];
         $data [$indeks]["namaprodi"]=$radata["nama_prodi"];
         $data [$indeks]["ukt"]=$radata["nominal"];
         $data [$indeks]["status"]=$radata["validasi_data_mhs"];
$indeks=$indeks+1;

        }
        return $data;
        }

	function getdatajadwal($idjd){
		$idc=$idjd;
		$_SESSION['idj']=$idc;
			$tahun=date('Year');
			$sql = mysql_query("select  * from tb_jadwal_um  where id_jadwal='$idc'");
			$indeks=0;
			while($radata=mysql_fetch_array($sql)){

        $data [$indeks]["id"]=$radata["id_jadwal"];
        $data [$indeks]["tanggal"]=$radata["tanggal"];
        $data[$indeks]["s"]=$radata["subjek_tes"];
        $data[$indeks] ["st"]=$radata["start_time"];
        $data[$indeks]["et"]=$radata["end_time"];
$indeks=$indeks+1;

        }
return $data;
        }
        	function getdatanilai($idp){
		$idps=$idp;
		$_SESSION['idp']=$idps;
			$sql = mysql_query("select  * from tb_peserta_um  where id_peserta='$idps'");
			$indeks=0;
			while($radata=mysql_fetch_array($sql)){
 $data [$indeks]["id"]=$radata["id_peserta"];

        $data [$indeks]["nama"]=$radata["nama_peserta"];
        $data [$indeks]["nilai_TKD"]=$radata["nilai_um_tkd"];
        $data [$indeks]["nilai_MIPA"]=$radata["nilai_um_mipa"];
        $data [$indeks]["nilai_Bahasa"]=$radata["nilai_um_bahasa"];
$indeks=$indeks+1;

        }
return $data;
        }

function getlokasibaru(){
	$sql = mysql_query("select * from tb_lokasi_ujian_um  ");
			$indeks=0;
			while($radata=mysql_fetch_array($sql)){

        $data [$indeks]["idlokasi"]=$radata["id_lokasi"];
$indeks=$indeks+1;

        }
return $data;

}

   function getlokasi(){

$id=$_SESSION["username"];
$sql = mysql_query("select * from tb_lokasi_ujian_um um join tb_peserta_um mm on mm.id_lokasi=um.id_lokasi where id_peserta='$id' ");
		$indeks=0;
			while($radata=mysql_fetch_array($sql)){
        $data [$indeks]["id"]=$radata["id_peserta"];
        $data [$indeks]["nama"]=$radata["nama_peserta"];
        $data [$indeks]["asal"]=$radata["nama_sma_smk"];
        $data [$indeks]["namalokasi"]=$radata["nama_lokasi"];
$indeks=$indeks+1;

        }
        return $data;
   }     
		
   function gethasilUM(){

$id=$_SESSION["username"];
$sql = mysql_query("select * from tb_prodi pd join tb_peserta_um mm on mm.id_prodi_pilihan=pd.id_prodi where id_peserta='$id' ");
		$indeks=0;
			while($radata=mysql_fetch_array($sql)){
        $data [$indeks]["id"]=$radata["id_peserta"];
        $data [$indeks]["nama"]=$radata["nama_peserta"];
        $data [$indeks]["alamat"]=$radata["alamat_tinggal"];
        $data [$indeks]["namaprodi"]=$radata["nama_prodi"];
        $data [$indeks]["status"]=$radata["status_lulus"];
$indeks=$indeks+1;

        }
        return $data;
   }    
  function getProfil(){
$data=null;
$id=$_SESSION["username"];
$sql = mysql_query("select * from tb_peserta_um mm  
	join tb_prodi pd on mm.id_prodi_pilihan=pd.id_prodi
 join tb_jenis_kelamin kl on kl.id_jenis_kelamin= mm.jenis_kelamin 
	 join tb_pekerjaan pk on pk.id_pekerjaan=mm.id_pekerjaan
	 join tb_jurusan_sma ma on mm.id_jurusan_sma=ma.id_jurusan_sma
	 join   tb_lokasi_ujian_um um on mm.id_lokasi=um.id_lokasi 
	  where id_peserta='$id' ");
		$indeks=0;
			while($radata=mysql_fetch_array($sql)){
        $data [$indeks]["id"]=$radata["id_peserta"];
        $data [$indeks]["password"]=$radata["password"];
        $data [$indeks]["nama"]=$radata["nama_peserta"];
        $data [$indeks]["jenis_kelamin"]=$radata["jenis_kelamin"];
        $data [$indeks]["tanggal_lahir"]=$radata["Tanggal_Lahir"];
        $data [$indeks]["tempat_lahir"]=$radata["Tempat_Lahir"];
        $data [$indeks]["alamat"]=$radata["alamat_tinggal"];
        $data [$indeks]["nama_ayah"]=$radata["Nama_Ayah"];
        $data [$indeks]["nama_ibu"]=$radata["Nama_Ibu"];
        $data [$indeks]["pekerjaan"]=$radata["nama_pekerjaan"];
        $data [$indeks]["namasma"]=$radata["nama_sma_smk"];
        $data [$indeks]["jurusansma"]=$radata["jurusan_sma"];
        $data [$indeks]["tahunlulus"]=$radata["tahun_lulus"];
       $data [$indeks]["rataun"]=$radata["rata_rata_nilai_un"];
         $data [$indeks]["namaprodi"]=$radata["nama_prodi"];
        $data [$indeks]["namalokasi"]=$radata["nama_lokasi"];
        $data [$indeks]["statuslulus"]=$radata["status_lulus"];
$indeks=$indeks+1;

        }
if($data==null){
		 $data [$indeks]["id"]=$id;
        $data [$indeks]["password"]=" ";
        $data [$indeks]["nama"]=" ";
        $data [$indeks]["jenis_kelamin"]="";
        $data [$indeks]["tanggal_lahir"]="";
        $data [$indeks]["tempat_lahir"]="";
        $data [$indeks]["alamat"]="";
        $data [$indeks]["nama_ayah"]="";
        $data [$indeks]["nama_ibu"]="";
        $data [$indeks]["pekerjaan"]="";
        $data [$indeks]["namasma"]="";
        $data [$indeks]["jurusansma"]="";
        $data [$indeks]["tahunlulus"]="";
       $data [$indeks]["rataun"]="";
         $data [$indeks]["namaprodi"]="";
        $data [$indeks]["namalokasi"]="";
}
else{
        return $data;
   } 
}  

		function updateprofil( $nama, $pass, $tempat,$tgl,$jk,$pekerjaan,$na,$ni, $alamat,$nsma,$jursma,$tahun,$un, $prodi){

			$id=$_SESSION['username'];
			$query = "update tb_peserta_um set nama_peserta='$nama', password='$pass', jenis_kelamin='$jk', Tempat_Lahir='$tempat', Tanggal_Lahir='$tgl',
			alamat_tinggal='$alamat', Nama_Ayah='$na', Nama_Ibu='$ni', id_pekerjaan='$pekerjaan', nama_sma_smk='$nsma',
			id_jurusan_sma='$jursma', tahun_lulus='$tahun', rata_rata_nilai_un='$un', id_prodi_pilihan='$prodi' where id_peserta='$id'";
			$select=mysql_query($query) or die (mysql_error());


    return true;
		}

		function updatejadwal($idjd,$tgl,$sbj,$st,$et){

			
			$query = "update tb_jadwal_um set tanggal='$tgl', subjek_tes='$sbj', start_time='$st', end_time='$et' where id_jadwal='$idjd'";
			$select=mysql_query($query) or die (mysql_error());


    return true;
		}

	function updatenilai($idp,$tkd,$bhs,$mipa){

			$tot=$tkd+$bhs+$mipa;
			$query = "update tb_peserta_um set nilai_um_tkd='$tkd', nilai_um_bahasa='$bhs', nilai_um_mipa='$mipa' , nilai_total='$tot'
			where id_peserta='$idp'";
			$select=mysql_query($query) or die (mysql_error());


    return true;
		}
	function veri1akad($id,$tot,$st){
		$uk=null;
if($tot>225 && $tot <250 ){$uk='C';} 
else if($tot>250 && $tot <275 ){$uk='B';} 
else{$uk='A'; } 
if($st=='2'){

	$query = "update tb_peserta_um set validasi_data_mhs='$st'
			where id_peserta='$id'";
			$select=mysql_query($query) or die (mysql_error());
return true;
}else
{
			$query = "update tb_peserta_um set id_ukt_mahasiswa='$uk',validasi_data_mhs='$st'
			where id_peserta='$id'";
			$select=mysql_query($query) or die (mysql_error());


    return true;}
		}
		function veri1khs($id,$st){


			$query = "update tb_peserta_um set ver_ukt_kmhs='$st'
			where id_peserta='$id'";
			$select=mysql_query($query) or die (mysql_error());


    return true;
		}
				function veri1sk1($id,$st){


			$query = "update tb_peserta_um set ver_ukt_skr1='$st'
			where id_peserta='$id'";
			$select=mysql_query($query) or die (mysql_error());


    return true;
		}
				function veri1Dkn($id,$st){


			$query = "update tb_peserta_um set ver_ukt_dekan='$st'
			where id_peserta='$id'";
			$select=mysql_query($query) or die (mysql_error());


    return true;
		}


	function veri2akad($id,$st){


			$query = "update tb_peserta_um set verifikasi_data_mhs='$st'
			where id_peserta='$id'";
			echo $id;
			
			$select=mysql_query($query) or die (mysql_error());

			if($st=='1'){
//--------------------------------------------------------
	
		$sql = mysql_query("select  * from tb_data_mahasiswa 	  ");
		$indeksnim=1;
			while($radata=mysql_fetch_array($sql)){
       
$indeksnim=$indeksnim+1;

        }
        $indeksnim=$indeksnim+1;
  //
//--------------------------------------------------------


//input ke tb mhas
$data=null;$nimnya=null;
$sql = mysql_query("select * from tb_prodi pd join tb_peserta_um where id_peserta='$id' ");
		$indeks=0;
			while($radata=mysql_fetch_array($sql)){
        $data [$indeks]["idm"]="16241010".$indeksnim;
$nimnya="16241010".$indeksnim;
     
        $data [$indeks]["password"]=$radata["password"];
        $data [$indeks]["nama"]=$radata["nama_peserta"];
        $data [$indeks]["jenis_kelamin"]=$radata["jenis_kelamin"];
        $data [$indeks]["tanggal_lahir"]=$radata["Tanggal_Lahir"];
        $data [$indeks]["tempat_lahir"]=$radata["Tempat_Lahir"];
        $data [$indeks]["alamat"]=$radata["alamat_tinggal"];
        $data [$indeks]["nama_ayah"]=$radata["Nama_Ayah"];
        $data [$indeks]["nama_ibu"]=$radata["Nama_Ibu"];
        $data [$indeks]["pekerjaan"]=$radata["id_pekerjaan"];
        $data [$indeks]["namasma"]=$radata["nama_sma_smk"];
        $data [$indeks]["jurusansma"]=$radata["id_jurusan_sma"];
        $data [$indeks]["tahunlulus"]=$radata["tahun_lulus"];
       $data [$indeks]["rataun"]=$radata["rata_rata_nilai_un"];
         $data [$indeks]["namaprodi"]=$radata["nama_prodi"];
         $data [$indeks]["idukt"]=$radata["id_ukt_mahasiswa"];

}

//print_r($data);die;
foreach ($data as $key => $value) {
	$query = "insert into tb_data_mahasiswa (`nim`, `password`, `nama`, `id_jenis_kelamin`, `tanggal_lahir`,
		`kota_lahir`, `alamat_tinggal`, `nama_ayah`, `nama_ibu`,`id_pekerjaan`,
		`asal_sma`,`id_jurusan_sma`,  `id_ukt_mahasiswa`)
		 values('$value[idm]','$value[password]','$value[nama]','$value[jenis_kelamin]','$value[tanggal_lahir]',
		 	'$value[tempat_lahir]','$value[alamat]','$value[nama_ayah]','$value[nama_ibu]','$value[pekerjaan]',
		'$value[namasma]','$value[jurusansma]','$value[idukt]')";
			$select=mysql_query($query) or die (mysql_error());



			$query2="insert into tb_user values(NULL, '$value[idm]','$value[password]','1') ";
			$select2=mysql_query($query2) or die (mysql_error());

	# code...
}
			





} else{$nimnya=0;}

    return $nimnya;
		}



		function cekLogin($username, $password){
    	$id=$username;
    	$pass=$password;
    	$hasil=$this->cekloginpeserta($id,$pass);
    	if($hasil==false){
    		$hasil2=$this->cekloginadmin($id,$pass);
    		if($hasil2=="admin kemahasiswaan"){
    				header("location:index.php?homeAdMhs");
        		
    		}
    		else if($hasil2=="admin akademik"){
    				header("location:index.php?homeAdAkad");
        		
    		}
    		else if($hasil2=="Sekretaris I"){
    				header("location:index.php?homeSk1");
        		
    		}
    		else if($hasil2=="Dekan"){
    				header("location:index.php?homeDekan");
        		
    		}
    		else{
        				echo "<script>alert('Username atau password anda salah $id $pass $hasil2 ')</script>";
					echo "<script language='javascript'>window.location='index.php'</script>";
		
    		}
    	} else{
    				header("location:index.php?homepeserta");
        		
    		
    	}

		
    		}
function cekloginpeserta($username, $password){
$sql = "SELECT * FROM tb_peserta_um WHERE id_peserta = '$username' and password = '$password'";
        $query = mysql_query($sql) or die(mysql_error());
        $row = mysql_fetch_array($query);
        $cek = mysql_num_rows($query);
        if ($cek > 0) {
            $_SESSION['username'] = $username;   
            $_SESSION['pass']=$password;         
            return true;
        } else {
            return false;
            
            
        }   		

}
function cekloginadmin($username, $password){
   $level=null;
  $user=$username;$pass=$password;
    $sql = "SELECT * FROM tb_pegawai_simaba mb join id_level_adm_um um on um.id_level_adm =mb.id_lvl_adm_um WHERE nip = '$username' and password = '$password'";
        $query = mysql_query($sql) or die(mysql_error());
     if(mysql_num_rows($query)>0){
 
            $_SESSION['idAdm'] = $user;     

            $_SESSION['pass'] = $pass;            
            while($rdata=mysql_fetch_array($query)){
        $level= $rdata["level_adm_um"];
        $ida=$rdata["level_adm_um"];
    }

    return $level;
        } else {
            return false;
            
            
        }

}




		
		
		function fetch($var){
			return mysql_fetch_array($var);
		}
		
		//pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
		function __destruct(){
		}
	}
?>
