<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Paduan Karya Official Site</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Select Css -->
    <link href="<?= base_url(); ?>assets/admin//plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
        
    <!-- Bootstrap Core Css -->
    <link href="<?= base_url(); ?>assets/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?= base_url(); ?>assets/admin/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?= base_url(); ?>assets/admin/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?= base_url(); ?>assets/admin/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?= base_url(); ?>assets/admin/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?= base_url(); ?>assets/admin/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Mohon tunggu ..</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="SEDANG MENGETIK...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="<?= base_url(); ?>portal">PENDAFTARAN - BEM KEMA TEL-U 2019</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">cari</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">0</span>
                        </a>
                        <!-- <ul class="dropdown-menu">
                            <li class="header">NOTIFIKASI</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>4 sales made</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy Doe</b> deleted account</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">mode_edit</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy</b> changed name</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> commented your post</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">cached</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> updated status</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-purple">
                                                <i class="material-icons">settings</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Settings updated</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul> -->
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count">0</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">TUGAS</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <!-- <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Footer display issue
                                                <small>32%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Make new buttons
                                                <small>45%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Create new dashboard
                                                <small>54%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Solve transition issue
                                                <small>65%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Answer GitHub questions
                                                <small>92%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                                </div>
                                            </div>
                                        </a>
                                    </li> -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">Lihat Semua Tugas</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->

            

            <div class="user-info">
            <?php foreach ($dataPendaftar as $hi) {  
                
                if ($dataPendaftar==null) {?>
                    <div class="image"> 
                    <img src="<?= base_url(); ?>assets/admin/images/user.png" width="48" height="48" alt="User" />
                  </div>
                <?php }else ?>
                <div class="image"> 
                    <img src="<?= base_url(); ?>foto/<?php echo $hi->foto ?>" width="52" height="52" alt="User" />
                  </div>
        
            
        <?php } ?>
                <div class="info-container">
                <?php foreach ($dataPendaftar as $hi) {  ?>
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hay <b><?= $hi->username?> </b>Apa Kabar?</div>
                    <div class="email"><?= $hi->email?></div>
                <?php } ?>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profil</a></li>
                            <li role="separator" class="divider"></li>
                            <!-- <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li> -->
                            <li><a href="<?php echo base_url('masuk/keluar'); ?>"><i class="material-icons">input</i>Keluar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU UTAMA</li>
                    <li class="disable">
                        <a href="<?= base_url(); ?>portal">
                            <i class="material-icons">home</i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="pages/typography.html">
                            <i class="material-icons">text_fields</i>
                            <span>Typography</span>
                        </a>
                    </li> -->
                    <!-- <li>
                        <a href="pages/helper-classes.html">
                            <i class="material-icons">layers</i>
                            <span>Helper Classes</span>
                        </a>
                    </li> -->
                    <!-- <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Widgets</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Cards</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="pages/widgets/cards/basic.html">Basic</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/cards/colored.html">Colored</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/cards/no-header.html">No Header</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Infobox</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="pages/widgets/infobox/infobox-1.html">Infobox-1</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/infobox/infobox-2.html">Infobox-2</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/infobox/infobox-3.html">Infobox-3</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/infobox/infobox-4.html">Infobox-4</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/infobox/infobox-5.html">Infobox-5</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->
                        <!-- <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">swap_calls</i>
                                <span>User Interface (UI)</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="pages/ui/alerts.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="pages/ui/animations.html">Animations</a>
                                </li>
                                <li>
                                    <a href="pages/ui/badges.html">Badges</a>
                                </li>

                                <li>
                                    <a href="pages/ui/breadcrumbs.html">Breadcrumbs</a>
                                </li>
                                <li>
                                    <a href="pages/ui/buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="pages/ui/collapse.html">Collapse</a>
                                </li>
                                <li>
                                    <a href="pages/ui/colors.html">Colors</a>
                                </li>
                                <li>
                                    <a href="pages/ui/dialogs.html">Dialogs</a>
                                </li>
                                <li>
                                    <a href="pages/ui/icons.html">Icons</a>
                                </li>
                                <li>
                                    <a href="pages/ui/labels.html">Labels</a>
                                </li>
                                <li>
                                    <a href="pages/ui/list-group.html">List Group</a>
                                </li>
                                <li>
                                    <a href="pages/ui/media-object.html">Media Object</a>
                                </li>
                                <li>
                                    <a href="pages/ui/modals.html">Modals</a>
                                </li>
                                <li>
                                    <a href="pages/ui/notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="pages/ui/pagination.html">Pagination</a>
                                </li>
                                <li>
                                    <a href="pages/ui/preloaders.html">Preloaders</a>
                                </li>
                                <li>
                                    <a href="pages/ui/progressbars.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="pages/ui/range-sliders.html">Range Sliders</a>
                                </li>
                                <li>
                                    <a href="pages/ui/sortable-nestable.html">Sortable & Nestable</a>
                                </li>
                                <li>
                                    <a href="pages/ui/tabs.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="pages/ui/thumbnails.html">Thumbnails</a>
                                </li>
                                <li>
                                    <a href="pages/ui/tooltips-popovers.html">Tooltips & Popovers</a>
                                </li>
                                <li>
                                    <a href="pages/ui/waves.html">Waves</a>
                                </li>
                            </ul>
                        </li> -->
                    <li  class="disable">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Lengkapi Berkas</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="disable">
                                <a href="<?= base_url(); ?>portal/biodata">Biodata</a>
                            </li>
                            <li>
                                <a href="<?= base_url(); ?>portal/foto">Unggah Foto</a>
                            </li>
                            <li>
                                <a href="<?= base_url(); ?>portal/cv">Unggah CV Kreatif</a>
                            </li>
                        </ul>
                    </li>
                  
                    <li class="active">
                        <a href="<?= base_url(); ?>portal/ajukandiri">
                            <i class="material-icons">work</i>
                            <span>Siap Ajukan Diri</span>
                        </a>
                    </li>

                    <li class="disable">
                        <a href="<?= base_url(); ?>portal/pengumuman">
                            <i class="material-icons">announcement</i>
                            <span>Pengumuman Kelulusan</span>
                        </a>
                    </li>

                </ul>
                
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 <a href="javascript:void(0);">BEM KEMA Telkom University 2019</a>.
                </div>
                <div class="version">
                    <b>Paduan Karya: </b> #IndonesiaBerkreasiMengedukasi
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>AJUKAN DIRI</h2>
            </div>

            <!-- Widgets -->
           
            <!-- Select -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Mengajukan Diri Sebagai?
                                 </h2>
                            <ul class="header-dropdown m-r--5">
  
                            </ul>
                        </div>
                        <div class="body">
                        <form  action="<?php echo base_url('kelolaAkun/ajukanPendaftaran'); ?>" id="sign_in" method="post">	
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <select class="form-control show-tick" name="struktural">
                                        <option value="">-- Pilih Salah Satu --</option>
                                        <option value="Staff Kabinet">Staff Kabinet</option>
                                        <option value="Menteri Kabinet">Menteri Kabinet</option>
                                        <option value="Kabinet Muda" disabled>Kabinet Muda</option>
                                    </select>
                             </div>
                             <br>
                             <br>
                             <br>
                             <div class="header">
                             <h2>
                                Pilih Biro/Kementerian
                            </h2>
                            </div>
                             <div class="col-sm-6">
                                    <select class="form-control show-tick" name="pilihanPertama">
                                        <option value="">-- Pilihan Pertama --</option>
                                        <?php foreach($dataKabinet as $a){ ?>
                                        <option value="<?= $a->struktur ?>"><?= $a->struktur ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <select class="form-control show-tick" name="pilihanDua">
                                        <option value="">-- Pilihan Kedua --</option>
                                        <?php foreach($dataKabinet as $a){ ?>
                                        <option value="<?= $a->struktur ?>"><?= $a->struktur ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Select -->


            <input type="submit" value="AJUKAN DIRI SAYA!" class="btn btn-primary m-t-15 waves-effect">
            <div class="icon-button-demo">
           
                                        </form>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            
            </div>
        </div>
    </section>

        <!-- Jquery Core Js -->
        <script src="<?= base_url(); ?>assets/admin/plugins/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core Js -->
        <script src="<?= base_url(); ?>assets/admin/plugins/bootstrap/js/bootstrap.js"></script>

        <!-- Select Plugin Js -->
        <script src="<?= base_url(); ?>assets/admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>

        <!-- Slimscroll Plugin Js -->
        <script src="<?= base_url(); ?>assets/admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

        <!-- Jquery Validation Plugin Css -->
        <script src="<?= base_url(); ?>assets/admin/plugins/jquery-validation/jquery.validate.js"></script>

        <!-- JQuery Steps Plugin Js -->
        <script src="<?= base_url(); ?>assets/admin/plugins/jquery-steps/jquery.steps.js"></script>

        <!-- Sweet Alert Plugin Js -->
        <script src="<?= base_url(); ?>assets/admin/plugins/sweetalert/sweetalert.min.js"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="<?= base_url(); ?>assets/admin/plugins/node-waves/waves.js"></script>

        <!-- Select Plugin Js -->
        <script src="<?= base_url(); ?>assets/admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>

        <!-- Custom Js -->
        <script src="<?= base_url(); ?>assets/admin/js/admin.js"></script>
        <script src="<?= base_url(); ?>assets/admin/js/pages/forms/form-wizard.js"></script>

        <!-- Demo Js -->
        <script src="<?= base_url(); ?>assets/admin/js/demo.js"></script>

   
</body>

</html>
