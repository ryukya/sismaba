

<?php 

include "../model/koneksi.php";
session_start();
if(!isset($_SESSION["username"])){
echo "<script language='javascript'>window.location='login.php'</script>";


}
$id=$_SESSION["username"];

$peserta= $_GET["id"];
$sql=mysql_query("select * from tb_peserta_um  um  
  join tb_jenis_kelamin km on km.id_jenis_kelamin=um.jenis_kelamin
  join tb_pekerjaan kk on kk.id_pekerjaan=um.id_pekerjaan
  join tb_jurusan_sma aa on aa.id_jurusan_sma=um.id_jurusan_sma
  join tb_prodi pr on um.id_prodi_pilihan= pr.id_prodi
  join tb_lokasi_ujian_um l on l.id_lokasi=um.id_lokasi
  where id_peserta='$peserta' ");
//echo "<script>alert('Berhasil $peserta')</script>";
$rdata=mysql_fetch_array($sql);
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
      <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Form Components</h3>
            
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Form Peserta UM</h4>
                      <form class="form-horizontal style-form" method="get">

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">ID_Peserta</label>
                              <div class="col-sm-10">
                                  <input class="form-control" id="disabledInput" type="text" placeholder="<?php  echo $rdata["id_peserta"];?>" disabled>
                              </div>
                              </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" name="nama">Nama Peserta</label>
                              <div class="col-sm-10">
                                  <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $rdata["nama_peserta"];?>" disabled>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Password</label>
                              <div class="col-sm-10">
                                     <input class="form-control" id="disabledInput" type="password" placeholder="<?php echo $rdata["password"];?>" disabled>
                                </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tempat Lahir</label>
                              <div class="col-sm-10">
                               <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $rdata["Tempat_Lahir"];?>" disabled>
                               </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
                              <div class="col-sm-10">
                             <input class="form-control" id="disabledInput" type="date" placeholder="<?php echo $rdata["Tanggal_Lahir"];?>" disabled>
                                </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label><div class="col-sm-10">
                            
             <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $rdata["jenis_kelamin"];?>" disabled>
                              </div>
            </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Ayah</label>
                              <div class="col-sm-10">
                             <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $rdata["Nama_Ayah"];?>" disabled>
                                </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Ibu</label>
                              <div class="col-sm-10">
                               <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $rdata["Nama_Ibu"];?>" disabled>
                              </div>
                          </div>
        <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Pekerjaan Orang TUa</label>
                              <div class="col-sm-10">
                             <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $rdata["nama_pekerjaan"];?>" disabled>
                              
            </div></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Alamat Tinggal</label>
                              <div class="col-sm-10">
                            <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $rdata["alamat_tinggal"];?>" disabled>
                                  </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama SMA/SMK</label>
                              <div class="col-sm-10">
                               <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $rdata["nama_sma_smk"];?>" disabled>
                               </div>
                          </div>
                <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Jurusan SMA/SMK</label>
                             <div class="col-sm-10">
                          <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $rdata["jurusan_sma"];?>" disabled>
                              </div>
            </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tahun Lulus</label>
                              <div class="col-sm-10">
                               <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $rdata["tahun_lulus"];?>" disabled>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Rata-rata Nilai UN</label>
                              <div class="col-sm-10">
                               <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $rdata["rata-rata_nilai_un"];?>" disabled>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Prodi Pilihan</label>
                              <div class="col-sm-10">
                         <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $rdata["nama_prodi"];?>" disabled>
                              </div>
            
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Lokasi Ujian</label>
                              <div class="col-sm-10">
                                <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $rdata["nama_lokasi"];?>" disabled>
                              </div>
                          </div>
                      </form>

            <button type="button" class="btn btn-primary btn-lg btn-block" name="create">Cetak</button>
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
            
            
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
     
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
	
	
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
