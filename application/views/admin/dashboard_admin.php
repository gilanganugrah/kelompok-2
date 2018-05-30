<?php
if($this->session->userdata('username') == ""){
	$this->session->set_flashdata('sukses','Silahkan Login dahulu');
	redirect(base_url('login'),'refresh');
	}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/images/logo polije.png"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <ul class="nav navbar-nav">
                <h3 class="menu-title"><?php echo $user['nama'];?></h3>
            </ul>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">MASTER</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Mahasiswa</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Daftar Mahasiswa</a></li>
                            <li><i class="fa fa-table"></i><a href="<?php echo base_url('daftar_judul/index');?>">Daftar Judul Dosen</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="<?php echo base_url('inputTA/index');?>">Input Judul TA</a></li>
                            <li><i class="fa fa-bars"></i><a href="<?php echo base_url('hasil_review/index');?>">Hasil Review</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="<?php echo base_url('judul_fix/index');?>">Pengajuan Judul FIX</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Hasil Judul FIX</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-alerts.html">Pendaftaran Sempro</a></li>  

                        </ul>
                        </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Dosen</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="tables-basic.html">Daftar Dosen</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-data.html">Input Judul Penelitian</a></li>
                            <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Output Judul TA</a></li>
                            <li><i class="fa fa-fire"></i><a href="ui-modals.html">Input Dospem Mahasiswa</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Riviewer</a>
                        <ul class="sub-menu children dropdown-menu">
                        	<li><i class="fa fa-table"></i><a href="tables-basic.html">Daftar Dosen</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-data.html">Input Judul Penelitian</a></li>
                            <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Output Judul TA</a></li>
                            <li><i class="fa fa-fire"></i><a href="ui-modals.html">Input Dospem Mahasiswa</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="forms-basic.html">Review Judul</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Koordinator</a>
                        <ul class="sub-menu children dropdown-menu">
                        	<li><i class="fa fa-table"></i><a href="tables-basic.html">Daftar Dosen</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-data.html">Input Judul Penelitian</a></li>
                            <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Output Judul TA</a></li>
                            <li><i class="fa fa-fire"></i><a href="ui-modals.html">Input Dospem Mahasiswa</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="forms-basic.html">Review Judul</a></li>
                            <li><i class="fa fa-book"></i><a href="ui-switches.html">Pergantian Hak Akses Dosen</a></li>
                            <li><i class="fa fa-th"></i><a href="ui-grids.html">Penentuan Tgl Input Judul</a></li>
                            <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Penentuan Dospem Mahasiswa</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Penentuan Jumlah MAX Dosen</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">KOORDINATOR</h3><!-- /.menu-title -->
					<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i 								class="menu-icon fa fa-bar-chart"></i>Grafik</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Total Usulan Judul</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Jumlah Mahasiswa Input Judul</a></li>
                            <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Sebaran Dospem</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Laporan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-file-word-o"></i><a href="font-fontawesome.html">Cetak Laporan</a>        
                        </ul>
                    </li>
                    
                    <h3 class="menu-title">LOGOUT</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-sign-in"></i>Logout</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="<?php echo base_url('dashboard/logout');?>">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    

    <!-- Right Panel -->

    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/jquery/plugins.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/jquery/main.js"></script>

</body>
</html>
