
<?php 

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
    
    <link href="assets/js/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
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
                    <li><a class="logout"  href="index.php?logout">Logout</a></li>
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
              
                  <p class="centered"><a href="index.php"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered"> <?php echo  $id; ?></h5>
                    
                  <li class="mt">
                      <a class="active" href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Profil</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="index.php?profil">Data Diri</a></li>
                      </ul>
                  </li>

                 
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Hasil UM</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="index.php?hasilUM">Kelulusan</a></li>
                          
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Jadwal dan Lokasi</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="index.php?jadwalpeserta">Jadwal</a></li>
                          <li><a  href="index.php?lokasipeserta">Lokasi</a></li>
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
            <h3><i class="fa fa-angle-right"></i>  Ujian Mandiri Unej</h3>
          <div class="row mt">
            <div class="col-md-12">
                        <div class="content-panel">
                            <h4><i class="fa fa-angle-right"></i> Hasil Ujian Anda</h4>
                            <hr>
                          <div class="form-panel">
        <form class="form-horizontal style-form" method="">

                                <?php 
                                if($hasil==null){
                                  ?>

                                  <H2>Mohon Anda melengkapi data diri Anda</H2>
                                  <?php
                                }
                                else{
foreach ( $hasil as $var ) {  
?>   
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">ID Peserta</label>
                              <div class="col-sm-10">
                               <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $var['id'];?>" disabled>
                               </div>
                          </div> <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Peserta</label>
                              <div class="col-sm-10">
                               <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $var['nama'];?>" disabled>
                               </div>
                          </div> <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                              <div class="col-sm-10">
                               <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $var['alamat'];?>" disabled>
                               </div>
                          </div> <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Prodi Pilihan</label>
                              <div class="col-sm-10">
                               <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $var['namaprodi'];?>" disabled>
                               </div>
                          </div> <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Status</label>
                              <div class="col-sm-10">
                               <input class="form-control" id="disabledInput" type="text" placeholder="<?php  if ($var['status']==null){
                                echo "Maaf Hasil Ujian Anda Belum Keluar";
                                }
                                else if ($var['status']=="T"){
                                echo "Tidak Lulus";
                                }else if ($var['status']=="L"){
                                echo " Lulus. ";
                                }
                                ?>" disabled>
                               </div>
                          </div>
</form>
<?php if ($var['status']=="L"){
 ?>
<h3>Selamat Anda Lulus!</h3>
  <h3>Silahkan melaksanakan daftar ulang untuk melengkapi registrasi anda.</h3>
 <?php  }?>

<?php if ($var['status']=="T"){
 ?>
<h3>Maaf Anda Belum Berhasil. Silahkan mencoba lagi tahun depan.</h3>
 <?php  }?>
</div>
<?php }
} ?> 
                   
                        </div><!--/content-panel -->
                    </div><!-- /col-md-12 -->   
        </div><!-- /row -->
      
    </section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->


      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="index.php?hasilUM" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
	<script src="assets/js/fullcalendar/fullcalendar.min.js"></script>    
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
	<script src="assets/js/calendar-conf-events.js"></script>    
  
  <script>
      //custom select box

      $(function(){
          $("select.styled").customSelect();
      });

  </script>

  </body>
</html>
