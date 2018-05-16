

<?php 


include "model/m_database.php";

if(!isset($_SESSION["username"])){
echo "<script language='javascript'>window.location='index.php'</script>";


}
$id=$_SESSION["username"];
$pass=$_SESSION["pass"];
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
      <!--sidebar end-->
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Profil Peserta</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Data  Diri Peserta UM</h4>
                      <form class="form-horizontal style-form" method="get">
   <?php 
   if($profil!=null){
foreach ( $profil as $var ) {  
?>
                            <div class="form-group">
                              <div class="col-lg-6 col-md-6 col-sm-12">
                              </div></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">ID_Peserta</label>
                              <div class="col-sm-10">
                                 <p class="form-control-static"><?php echo "$id";?></p>
                              </div>
                              </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" name="nama">Nama Peserta</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><?php echo $var['nama'];?></p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Password</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><?php echo $var['password'];?></p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tempat Lahir</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><?php echo $var['tempat_lahir'];?></p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
                              <div class="col-sm-10">
                              <p class="form-control-static"><?php echo $var['tanggal_lahir'];?></p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
                              <div class="col-sm-10">
            <p class="form-control-static"><?php echo $var['jenis_kelamin'];?></p>
            </div></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Ayah</label>
                              <div class="col-sm-10">
                              <p class="form-control-static"><?php echo $var['nama_ayah'];?></p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Ibu</label>
                              <div class="col-sm-10">
                              <p class="form-control-static"><?php echo $var['nama_ibu'];?></p>
                              </div>
                          </div>
        <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Pekerjaan Orang TUa</label>
            <div class="col-sm-10"><p class="form-control-static"><?php echo $var['pekerjaan'];?></p>
            </div></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Alamat Tinggal</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><?php echo $var['alamat'];?></p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama SMA/SMK</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><?php echo $var['namasma'];?></p>
                              </div>
                          </div>
                <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">Jurusan SMA/SMK</label>
                               <div class="col-sm-10">
            <p class="form-control-static"><?php echo $var['jurusansma'];?></p>
            </div></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tahun Lulus</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><?php echo $var['tahunlulus'];?></p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Rata-rata Nilai UN</label>
                              <div class="col-sm-10">
                                   <p class="form-control-static"><?php echo $var['rataun'];?></p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Prodi Pilihan</label>
                                 <div class="col-sm-10">
                               <p class="form-control-static"><?php echo $var['namaprodi'];?></p>
            </div>              </div>

                         <?php if ($var['statuslulus']==null){?>
   <a  class="btn btn-primary btn-lg btn-block" name="create" href="index.php?editpeserta">Edit</a>
               
                           <?php }

                         } 
                         }

                           else {?>


                            <div class="form-group">
                              <div class="col-lg-6 col-md-6 col-sm-12">
                              </div></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">ID_Peserta</label>
                              <div class="col-sm-10">
                                 <p class="form-control-static"><?php echo "$id";?></p>
                              </div>
                              </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" name="nama">Nama Peserta</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"></p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Password</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"><?php echo "$pass";?></p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tempat Lahir</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"></p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
                              <div class="col-sm-10">
                              <p class="form-control-static"></p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
                              <div class="col-sm-10">
            <p class="form-control-static"></p>
            </div></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Ayah</label>
                              <div class="col-sm-10">
                              <p class="form-control-static"></p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Ibu</label>
                              <div class="col-sm-10">
                              <p class="form-control-static"></p>
                              </div>
                          </div>
        <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Pekerjaan Orang TUa</label>
            <div class="col-sm-10"><p class="form-control-static"></p>
            </div></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Alamat Tinggal</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"></p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama SMA/SMK</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"></p>
                              </div>
                          </div>
                <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">Jurusan SMA/SMK</label>
                               <div class="col-sm-10">
            <p class="form-control-static"></p>
            </div></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tahun Lulus</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static"></p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Rata-rata Nilai UN</label>
                              <div class="col-sm-10">
                                   <p class="form-control-static"></p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Prodi Pilihan</label>
                                 <div class="col-sm-10">
                               <p class="form-control-static"></p>
            </div>              </div>

                         


                           
                      </form>

   <a  class="btn btn-primary btn-lg btn-block" name="create" href="index.php?editpeserta">Edit</a>
               <?php } ?> 
                 <a class="btn btn-primary btn-lg btn-block"   href="index.php?cetakkartu" name="create">Cetak</a>
             
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	
          	
		</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="index.php?profil" class="go-top">
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
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>

	<!--custom switch-->
	<script src="assets/js/bootstrap-switch.js"></script>
	
	<!--custom tagsinput-->
	<script src="assets/js/jquery.tagsinput.js"></script>
	
	<!--custom checkbox & radio-->
	
	<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	
	
	<script src="assets/js/form-component.js"></script>    
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
