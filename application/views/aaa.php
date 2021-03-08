<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Dashboard - <?php echo $this->config->item('nama_aplikasi')." ".$this->config->item('versi'); ?></title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
      <meta name="apple-mobile-web-app-capable" content="yes">
      <link rel="shortcut icon" href="assets/images/logo-sm.png">
      <link href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url(); ?>assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
      <!-- Responsive datatable examples -->
      <link href="<?php echo base_url(); ?>assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 
      <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url(); ?>assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url(); ?>___/css/style.css" rel="stylesheet">
      
   
   </head>
<body >

<div class="topbar">
             <!-- Navbar -->
             <nav class="navbar-custom">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="<?php echo base_url(); ?>" class="logo">
                        <span>
                            <img src="<?php echo base_url(); ?>assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                        </span>
                        <span>
                            <img src="<?php echo base_url(); ?>assets/images/logo-dark.png" alt="logo-large" class="logo-lg">
                        </span>
                    </a>
                </div>
    
                <ul class="list-unstyled topbar-nav float-right mb-0">

                    <!-- <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell-outline nav-icon"></i>
                            <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                            
                            <h6 class="dropdown-item-text">
                                Notifications (258)
                            </h6>
                            <div class="slimscroll notification-list">
                               
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                </a>
                                
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                                </a>
                                
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                                    <p class="notify-details">Your item is shipped<small class="text-muted">It is a long established fact that a reader will</small></p>
                                </a>
                                
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                </a>
                                
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                                </a>
                            </div>
                            
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li> -->

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <div class="avatar-box thumb-xs align-self-center">
                                 <span class="avatar-title bg-info rounded-circle"><?php echo substr($this->session->userdata('admin_nama'),0,1);?></span>
                           </div>
                            <span class="ml-1 nav-user-name hidden-sm"> <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#" onclick="return rubah_password();"><i class="dripicons-lock text-muted mr-2"></i> Ganti Password</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>adm/logout" onclick="return confirm('keluar..?');"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
                        </div>
                    </li>
                </ul>
    
                <ul class="list-unstyled topbar-nav mb-0">
                        
                    <li>
                        <button class="button-menu-mobile nav-link waves-effect waves-light">
                            <i class="mdi mdi-menu nav-icon"></i>
                        </button>
                    </li>

                    <!-- <li class="hide-phone app-search">
                        <form role="search" class="">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href=""><i class="fas fa-search"></i></a>
                        </form>
                    </li> -->
                    
                </ul>

            </nav>
            <!-- end navbar-->
        </div>

        <div class="page-wrapper-img">
            <div class="page-wrapper-img-inner">
                <div class="sidebar-user media">                    
                     <div class="avatar-box thumb-lg align-self-center">
                           <span class="avatar-title bg-info rounded-circle"><?php echo substr($this->session->userdata('admin_nama'),0,1);?></span>
                     </div>
                    <span class="online-icon"><i class="mdi mdi-record text-success"></i></span>
                    <div class="media-body">
                        <h5 class="text-light"><?php echo $this->session->userdata('admin_user'); ?></h5>
                        <ul class="list-unstyled list-inline mb-0 mt-2">
                            <!-- <li class="list-inline-item">
                                <a href="#" class=""><i class="mdi mdi-account text-light"></i></a>
                            </li> -->
                            <li class="list-inline-item">
                                <a href="#" class="" onclick="return rubah_password();"><i class="mdi mdi-lock text-light"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?php echo base_url(); ?>adm/logout" onclick="return confirm('keluar..?');" class=""><i class="mdi mdi-power text-danger"></i></a>
                            </li>
                        </ul>
                    </div>                    
                </div>
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-right align-item-center mt-2">
                                <!-- <button class="btn btn-info px-4 align-self-center report-btn">Create Report</button> -->
                            </div>
                            <h4 class="page-title mb-2"><i class="mdi mdi-<?php echo active_menu_icon(); ?> mr-2"></i><?php echo active_menu(); ?></h4>  
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Smartquiz</a></li>
                                    <li class="breadcrumb-item active"><?php echo active_menu(); ?></li>
                                </ol>
                            </div>                                      
                        </div><!--end page title box-->
                    </div><!--end col-->
                </div><!--end row-->
                <!-- end page title end breadcrumb -->
            </div><!--end page-wrapper-img-inner-->
        </div><!--end page-wrapper-img-->

        <div class="page-wrapper">
            <div class="page-wrapper-inner">

            <?php echo gen_menu(); ?>

            <?php echo $this->load->view($p); ?>


            </div>
        </div>



<!-- insert modal -->
<div id="tampilkan_modal"></div>

<footer class="footer text-center text-sm-left">
                        &copy; 2020 Smartquiz <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by CodeinAja</span>
                    </footer>
                </div>
                <!-- end page content -->
            </div>
            <!--end page-wrapper-inner -->
        </div>
<script src="<?php echo base_url(); ?>___/js/jquery-1.11.3.min.js"></script> 
<script src="<?php echo base_url(); ?>___/js/bootstrap.js"></script>

<?php 
if ($this->uri->segment(2) == "m_soal" && $this->uri->segment(3) == "edit") {
?>
<script src="<?php echo base_url(); ?>___/plugin/ckeditor/ckeditor.js"></script>
<?php
}
?>
<!-- editor
<script src="<?php echo base_url(); ?>___/plugin/editor/nicEdit.js"></script>
 -->

<script src="<?php echo base_url(); ?>___/plugin/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>___/plugin/datatables/dataTables.bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>___/plugin/jquery_zoom/jquery.zoom.min.js"></script>



<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/metisMenu.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/waves.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>

<script src="<?php echo base_url(); ?>assets/plugins/tinymce/tinymce.min.js"></script>
<script src="<?php echo base_url(); ?>assets/pages/jquery.form-editor.init.js"></script>

<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/pages/jquery.datatable.init.js"></script>
<!-- App js -->
<script src="<?php echo base_url(); ?>assets/js/app.js"></script>




<script src="<?php echo base_url(); ?>___/plugin/countdown/jquery.countdownTimer.js"></script>

<script type="text/javascript">
var base_url = "<?php echo base_url(); ?>";
var editor_style = "<?php echo $this->config->item('editor_style'); ?>";
var uri_js = "<?php echo $this->config->item('uri_js'); ?>";
</script>
<script src="<?php echo base_url(); ?>___/js/aplikasi.js?time=<?php echo time(); ?>"></script> 


</body>
</html>
