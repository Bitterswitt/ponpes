<?php

session_start();
include "../koneksi.php";
include "auth_user.php";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>SMK Raudlatul Musthofa</title>
  <link rel="shortcut icon" type="image/icon" href="../WDS.ico">
  <!-- Library CSS -->
  <?php
  include "bundle_css.php";
  ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php
    include 'content_header.php';
    ?>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <p></p>
          </div>
        </div><!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">
            <h4><b>
                <center>Menu Panel</center>
              </b></h4>
          </li>
          <!--	<li><a href="index.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li> -->
          <li><a href="jadwal.php"><i class="fa fa-calendar"></i><span>Jadwal</span></a></li>
          <li><a href="nilai.php"><i class="fa fa-book"></i><span>Nilai Siswa</span></a></li>
          <li class="active"><a href="about.php"><i class="fa fa-info-circle"></i><span>Tentang SMK Raudlatul Musthofa</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Tentang SMK Raudlatul Musthofa
        </h1>
        <ol class="breadcrumb">
          <li><i class="fa fa-info-circle"></i> Tentang SMK Raudlatul Musthofa</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h1>
                  <center><b>SMK Raudlatul Musthofa</b></center>
                </h1>
                <center><img src="../aset/foto/WD.jpg" width="225" height="225" /></center>

                <center>
                  <td>
                    <div align="justify" class="style45">
                      SMK Raudlatul Musthofa Berdiri pada tahun 2009 yang berada di Jatiasih Bekasi, Berdirinya
                      SMK Raudlatul Musthofa dilatar belakangin oleh melihat besarnya perkembangan teknologi yang terus berkembang sehingga mendorong untuk mendirikan SMK Raudlatul Musthofa. SMK Raudlatul Musthofa sepenuhnya berpratek di gedung SMK Raudlatul Musthofa itu sendiri yang peralatan dan alat prateknya sangat lengkap dan didikan oleh 100% guru yang berpengalaman dan berpendidikan sarjana. Sehingga SMK Raudlatul Musthofa telah meluluskan siswa yang berprestasi yang saat ini telah bekerja di dunia Informatika yang relevan. SMK Raudlatul Musthofa terus berupaya meningkatkan mutu sekolah dan lulusannya dengan berkerjasama dalam Pratek Kerja dengan Berbagai Perusahan-perusahaan agar para siswa mendapatkan ilmu lebih dari perusahan tersebut.</div>
                  </td>
                </center>
              </div><!-- /.box-header -->
              <div class="box-body">

              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
    <?php
    include  "content_footer.php";
    ?>
  </div><!-- ./wrapper -->
  <!-- Library Scripts -->
  <?php
  include "bundle_script.php";
  ?>
</body>

</html>