<?php

include "../model/koneksi.php";
function rand_string( $length ) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$length);

}

function btlokasi(){
	$nomor= rand(1,5);

switch ($nomor) {
     case "1":
         $lokasi="rua01";
         break;
     case "2":
         $lokasi="rua02";
         break;
     case "3":
         $lokasi="rua03";
         break;
     case "4":
         $lokasi="rua04";
         break;
     case "5":
         $lokasi="rua05";
         break;
     default:
         $lokasi="rua05";
         }
return $lokasi;
}


$pass =rand_string(8);

$id= uniqid();
 $lokasi2=btlokasi();

//echo uniqid();


$sql=" insert into tb_peserta_um (`id_peserta`, `password`, `id_lokasi`)
VALUES ('$id','$pass', '$lokasi2') ";
$select=mysql_query($sql) or die (mysql_error());

echo "<script>alert(' Id : $id  Password : $pass lokasi : $lokasi2')</script>";
session_start();	$_SESSION["username"]=$id;

	
	echo "<script language='javascript'>window.location='../view/homepeserta.php'</script>";
?>