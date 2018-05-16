
<?php 

if(!isset($_SESSION["idAdm"])){
echo "<script language='javascript'>window.location='index.php'</script>";


}
$id=$_SESSION["idAdm"];
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
              
                  <p class="centered"><a href="index.php?AdmAkad"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered"> <?php echo  $id; ?>-Admin Akademik</h5>
                    
                  <li class="mt">
                      <a class="active" href="index.php?AdmAkad">
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
                          <li><a  href="index.php?tabelpeserta">Peserta UM</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-edit"></i>
                          <span>Validasi</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="index.php?PreDU">Validasi pre-DU</a></li>
                      
                          <li><a  href="index.php?pascaDU">Validasi pasca-DU</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Hasil UM</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="index.php?hasilUMakad">Kelulusan</a></li>
                          <li><a  href="index.php?hasil">Nilai Peserta</a></li>
                          
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Jadwal UM</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="index.php?Penjadwalan">Penjadwalan</a></li>
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
       <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> Jadwal UM</h3>
            <div class="row mt">
              <div class="col-lg-12">
                      <div class="content-panel">
                            <table class="table table-hover">
                            <h4><i class="fa fa-angle-right"></i> </h4>
                            <hr>
                                <thead>
                                <tr>
                                    <th>No.</th>
                                  <th>Tanggal</th>
                                  <th class="numeric" >Subjek Tes</th>
                                  <th class="numeric">Start Time</th>
                                  <th class="numeric">End Time</th>
                                  <th class="numeric">Option</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $indeks=1;
foreach ( $jadwal as $var ) {  
?>
                                <tr>
                                    <td class="numeric" data-title="tgl"><?php echo $indeks;?>&nbsp;</td>
                                    <td ><?php echo $var['tanggal'];?>&nbsp;</td>
                                       <td ><?php echo $var['s'];?>&nbsp;</td>
                                       <td ><?php echo $var['st'];?>&nbsp;</td>
                                        <td ><?php echo $var['et'];   ?> &nbsp;</td>
                                        <td>
                                        [ <a href="index.php?editjadwal&idjd=<?php echo $var['id'];?>">Edit</a> ] </td>
                                </tr>
                            <?php $indeks=$indeks+1; } ?> 
                                </tbody>
                            </table>
                            <a type="button" class="btn btn-primary btn-lg btn-block" href="index.php?tambahJadwal" >Tambah</a>
                        </div><!--/content-panel -->
                    </div><!-- /col-md-12 -->
            </div>
      
    </section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="index.php?jadwalpeserta" class="go-top">
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
