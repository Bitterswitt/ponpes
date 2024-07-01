<?php

session_start();
include "../koneksi.php";
include "auth_user.php";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title> SMK Raudlatul Musthofa</title>
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
          <!-- <li><a href="index.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li> -->
          <li><a href="dosen.php"><i class="fa fa-user"></i><span>Dosen</span></a></li>
          <li><a href="mahasiswa.php"><i class="fa fa-users"></i><span>Mahasiswa</span></a></li>
          <li><a href="ruangan.php"><i class="fa fa-columns"></i><span>Kelas</span></a></li>
          <li><a href="matakuliah.php"><i class="fa fa-book"></i><span>Mata Kuliah</span></a></li>
          <li><a href="jurusan.php"><i class="fa fa-university"></i><span>Program Studi</span></a></li>
          <!-- <li><a href="jenjang.php"><i class="fa fa-graduation-cap"></i><span>Jenjang</span></a></li> -->
          <li><a href="jadwal.php"><i class="fa fa-calendar"></i><span>Jadwal</span></a></li>
          <li><a href="user.php"><i class="fa fa-user-circle-o"></i><span>User</span></a></li>
          <li><a href="about.php"><i class="fa fa-info-circle"></i><span>Tentang</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Tentang Pondok Pesantren Raudlatul Musthofa
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
                  <center><b>Pondok Pesantren Raudlatul Musthofa</b></center>
                </h1>
                <center><img src="../aset/foto/logopondok.png" width="15%" height="15%" /></center>
                <tr>
                  <td>
                    <div align="justify" class="style45 mt-2">
                      Pondok Pesantren Raudlatul Musthofa bukanlah pondok baru, melainkan meneruskan dari Pondok Lor yang terletak di desa pundensari bagian utara dan didirikan pada tahun 1800-an oleh asuhan Maulana Udjang Abdun atau biasa disebut Mbah Abdun yang menerapkan sitem salaf murni. Penerus kedua adalah Mbah Yai Ah – Shodiq. Kemudian terjadi “Fatroh” berhenti dikarenakan beliau tidak mempunyai putra sebagai penerus. Pada saat itu Indonesia belum merdeka. Terjadi kekacauan sangat lama hingga adik perempuan Mbah Yai Shodiq yaitu Mbah Musfirah atau Mbah Fir mempunya cucu yang bernama KH. M. Junaidi Imron yang sekarang menjadi penerus perjalanan Suci tersebut. Pada tahun 2012 dimulai pembangunan pondasi, akan tetapi terjadi kefakuman karena kurangnya biaya pada saat itu. Alhamdulillah pada tahun 2013 pembangunan dapat dilanjutkan dan telah terdaftar pada Kemenag dengan nama Pondok Pesantren Raudlatul Musthofa.</div>
                  </td>
                </tr>
                <!-- <center><h2><b>RMA Developer Copyright &copy;  <?php echo date('Y') ?></b></h2></center>
					<center><h4><b>Made with <strong><i class="fa fa-code"></i></strong> and <i class="fa fa-heart"></i> By Widianto in Bekasi, West Java Indonesia</b></h4></center> -->
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