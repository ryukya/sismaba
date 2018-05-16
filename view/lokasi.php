

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
          	<h3><i class="fa fa-angle-right"></i> Daftar Lokasi Ujian Mandiri Unej</h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Lokasi UM</h4>
                          

<div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Penambahan Lokasi UM</h4>
                   <form class="form-horizontal style-form" role="form" method="post" action="../controller/clokasi.php">

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">ID Lokasi</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control"name="idlokasi" >
                              </div>
                              </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Lokasi</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="namalokasi">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kapasitas</label>
                              <div class="col-sm-10">
                                  <input type="number" class="form-control" name="kapasitaslokasi">
                              </div>
                          </div>

                   <button type="submit" class="btn btn-primary btn-lg btn-block" name="create">Tambah</button>
</form></div>

                          <section id="unseen">                            
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>ID Lokasi</th>
                                  <th>Nama Lokasi</th>
                                  <th class="numeric">Kapasitas</th>
                                  <th class="numeric">Option</th>                              </tr>
                              </thead>
                              <?php 
//membuka koneksi
include "../model/koneksi.php";
//mengambil data dari atbel siswa
$data=mysql_query("select * from tb_lokasi_ujian_um");
//menampilkan data hasil query menjadi data array
while($rdata=mysql_fetch_array($data)){
?>
                              <tbody>
                             <tr>
    <td><?php echo $rdata["id_lokasi"];?>&nbsp;</td>
    <td><?php echo $rdata["nama_lokasi"];?>&nbsp;</td>
    <td><?php echo $rdata["kapasitas"];?>&nbsp;</td>
       <td> [ <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"   href=../"controller/hapuslokasi.php?id=<?php echo $rdata["id_lokasi"];?>">Hapus</a> ] </td>
 
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
