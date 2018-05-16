
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
   <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="index.php?homeSk1"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered"> <?php echo  $id; ?>-Sekretaris 1</h5>
                    
                  <li class="mt">
                      <a class="active" href="index.php?homeSk1">
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
                          <li><a  href="index.php?tabelpesertaSk1">Peserta UM</a></li>
                      </ul>
                  </li>

                 <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-edit"></i>
                          <span>Validasi</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="index.php?PreDUSk1">Validasi UKT Peserta</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->      <!--sidebar end-->
           
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Daftar Peserta Daftar Ulang UM-UNEJ</h3>
		  		        <div class="row mt">
              <div class="col-lg-12">
                      <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Peserta UM</h4>
                          <section id="no-more-tables">
                              <table class="table table-bordered table-striped table-condensed cf">
                                  <thead class="cf">
                              <tr>
                                  <th>ID Peserta</th>
                                  <th class="numeric" >Nama Peserta</th>
                                  <th class="numeric">Jenis Kelamin</th>
                                  <th class="numeric">Total Nilai</th>
                                  <th class="numeric">Prodi Pilihan</th>
                                  <th class="numeric">UKT</th>
                                  <th class="numeric">Status Pra DU</th>
                                  <th class="numeric">Option</th>
                              </tr>
                              </thead>
                                <?php 
                                if($profil!= null){
                                $nilai='0';
foreach ( $profil as $var ) {  
?>                              <tbody>
                             <tr>
    <td class="numeric" data-title="ID"><?php echo $var['id']; $idp=$var['id'];?>&nbsp;</td>
    <td class="numeric" data-title="Nama"><?php echo $var['nama'];?></td>
    <td class="numeric" data-title="Password"><?php echo $var['jenis_kelamin'];?>&nbsp;</td>
    <td class="numeric" data-title="Lokasi Ujian"><?php  echo $var['nilaitotal']; ?>&nbsp;</td>
    <td class="numeric" data-title="Prodi Pilihan"><?php echo $var['namaprodi'];?></td>
    <td class="numeric" data-title="Prodi Pilihan"><?php echo $var['ukt'];?></td>
    <td class="numeric" data-title="Prodi Pilihan"><?php if($var['status']=='0'){echo "Belum Diverifikasi";
    }else{ echo "Terverifikasi"; } ?></td>
    <td class="numeric" data-title="Option"><a  class="btn btn-success btn-xs" href="index.php?versk1&id=<?php echo $idp;?>&st=<?php echo "1";?>">Verifikasi</a>   
    <a  class="btn btn-danger btn-xs" href="index.php?versk1&id=<?php echo $idp;?>&st=<?php echo "2";?>">Tolak</a> </td>
  </tr>
 <?php }
 } else { ?>
<h3>Maaf Daftar Peserta Kosong</h3>
  <?php  }?>
                              </tbody>
                          </table>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
		  	</div><!-- /row -->
		  
 		</section><!--/wrapper -->
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
