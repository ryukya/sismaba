

<?php 

include "../model/koneksi.php";
session_start();
if(!isset($_SESSION["username"])){
echo "<script language='javascript'>window.location='login.php'</script>";


}
$id=$_SESSION["username"];
$sql="select * from tb_pegawai_siakad where nip='$id' ";
//$rdata=mysql_fetch_object_>(mysql_query($sql));
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>UM-UNEJ</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>UM-UNEJ</b></a>
            <!--logo end-->
            
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="index.php?logout">Logout</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->
    
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
     <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered"> <?php echo  $id; ?></h5>
                    
                  <li class="mt">
                      <a class="active" href="homeadm.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Monitoring</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="pesertaum.php">Peserta UM</a></li>
                      </ul>
                  </li>

                 
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Hasil UM</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="hasilum.php">Kelulusan</a></li>
                          <li><a  href="blank.html">Nilai Peserta</a></li>
                          
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Jadwal dan Lokasi</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="jadwal.php">Jadwal</a></li>
                          <li><a  href="lokasi.php">Lokasi</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->     
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Hasil  Ujian Mandiri</h3>
		  		        <div class="row mt">
              <div class="col-lg-12">
                      <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Peserta Lulus UM</h4>
                          <section id="no-more-tables">
                              <table class="table table-bordered table-striped table-condensed cf">
                                  <thead class="cf">
                              <tr>
                                  <th>ID Peserta</th>
                                  <th class="numeric" >Nama</th>
                                  <th class="numeric">Prodi Pilihan</th>
                                  <th class="numeric">Status kelulusan</th>
                                  <th class="numeric">Nilai total</th>
                                  <th class="numeric">Asal SMA/SMK/SLTA</th>
                              </tr>
                              </thead>
                              <?php 
//membuka koneksi
include "../model/koneksi.php";
//mengambil data dari atbel siswa
$data=mysql_query("select * from tb_peserta_um pm 
 join tb_prodi pd on pd.id_prodi= pm.id_prodi_pilihan where status_lulus='L'");
//menampilkan data hasil query menjadi data array
while($rdata=mysql_fetch_array($data)){
?>
                              <tbody>
                             <tr>
    <td class="numeric" data-title="ID"><?php echo $rdata["id_peserta"];?>&nbsp;</td>
    <td class="numeric" data-title="Nama"><?php echo $rdata["nama_peserta"];?>&nbsp;</td>
    <td class="numeric" data-title="Jenis Kelamin"><?php echo $rdata["nama_prodi"];?>&nbsp;</td>
    <td class="numeric" data-title="Pekerjaan Orang tua">Lulus</td>
    <td class="numeric" data-title="Prodi Pilihan"><?php 
     $total= $rdata["nilai_um_tkd"]+$rdata["nilai_um_mipa"];
echo $total;
     ?> &nbsp;</td>
    <td class="numeric" data-title="Lokasi Ujian"><?php echo $rdata["nama_sma_smk"];?>&nbsp;</td>
    <td class="numeric" data-title="Option">[<a href="admin.php?page=editsiswa&id=<?php echo $rdata["id_peserta"];?>">Edit</a> ] / [ <a href="admin.php?page=hapussiswa&id=<?php echo $rdata["id_peserta"];?>">Hapus</a> ] </td>
  </tr>
 <?php } ?> 
                              </tbody>
                          </table>
                          </section>
                  
<!-- //yang ga lulus==========================================================
-->
 <h4><i class="fa fa-angle-right"></i> Peserta  Tidak Lulus UM</h4>
                          <section id="no-more-tables">
                              <table class="table table-bordered table-striped table-condensed cf">
                                  <thead class="cf">
                              <tr>
                                  <th>ID Peserta</th>
                                  <th class="numeric" >Nama</th>
                                  <th class="numeric">Prodi Pilihan</th>
                                  <th class="numeric">Status kelulusan</th>
                                  <th class="numeric">Nilai total</th>
                                  <th class="numeric">Asal SMA/SMK/SLTA</th>
                              </tr>
                              </thead>
                              <?php 
//membuka koneksi
include "../model/koneksi.php";
//mengambil data dari atbel siswa
$data=mysql_query("select * from tb_peserta_um pm 
 join tb_prodi pd on pd.id_prodi= pm.id_prodi_pilihan where status_lulus='T'");
//menampilkan data hasil query menjadi data array
while($rdata=mysql_fetch_array($data)){
?>
                              <tbody>
                             <tr>
    <td class="numeric" data-title="ID"><?php echo $rdata["id_peserta"];?>&nbsp;</td>
    <td class="numeric" data-title="Nama"><?php echo $rdata["nama_peserta"];?>&nbsp;</td>
    <td class="numeric" data-title="Jenis Kelamin"><?php echo $rdata["nama_prodi"];?>&nbsp;</td>
    <td class="numeric" data-title="Pekerjaan Orang tua">Tidak Lulus</td>
    <td class="numeric" data-title="Prodi Pilihan"><?php 
     $total= $rdata["nilai_um_tkd"]+$rdata["nilai_um_mipa"];
echo $total;
     ?> &nbsp;</td>
    <td class="numeric" data-title="Lokasi Ujian"><?php echo $rdata["nama_sma_smk"];?>&nbsp;</td>
    <td class="numeric" data-title="Option">[<a href="admin.php?page=editsiswa&id=<?php echo $rdata["id_peserta"];?>">Edit</a> ] / [ <a href="admin.php?page=hapussiswa&id=<?php echo $rdata["id_peserta"];?>">Hapus</a> ] </td>
  </tr>
 <?php } ?> 
                              </tbody>
                          </table>
                          </section>

                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
		  	</div><!-- /row -->
		  
 		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="pesertaum.php" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    

  </body>
</html>
