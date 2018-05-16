<?php 

include "../model/koneksi.php";
session_start();
if(!isset($_SESSION["username"])){
echo "<script language='javascript'>window.location='login.php'</script>";


}


$idlokasi= $_GET["id"];
$sql=mysql_query("select * from tb_lokasi_ujian_um where id_lokasi='$peserta' ");
//echo "<script>alert('Berhasil $peserta')</script>";
while($rdata=mysql_fetch_array($data)){
$namalokasi=$rdata["nama_lokasi"]

}
->__konfirmhapus($idlokasi,$namalokasi);

public function __konfirmhapus($idlokasi, $namalokasi){

$sql="delete tb_lokasi_ujian_um where id_lokasi='$idlokasi'";
$select=mysql_query($sql) or die (mysql_error());

echo "<script>  alert('Anda telah menghapus $namalokasi ?')</script>";

echo "<script language='javascript'>window.location='lokasi.php'</script>";
}
?>