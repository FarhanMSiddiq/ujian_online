<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Login - <?php echo $this->config->item('nama_aplikasi')." ".$this->config->item('versi'); ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="description" content="Smartquiz">
<meta name="apple-mobile-web-app-capable" content="yes">
<link rel="shortcut icon" href="assets/images/logo-sm.png">
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body class="account-body">

        <!-- Log In page -->
        <div class="row vh-100">
            <div class="col-lg-3  pr-0">
                <div class="card mb-0 shadow-none">
                    <div class="card-body">
                        
                        <div class="px-3">
                            <div class="media">
                                <a href="index.html" class="logo logo-admin"><img src="<?php echo base_url(); ?>assets/images/smrtqz_logo.png" height="55" alt="logo" class="my-3"></a>
                                <div class="media-body ml-3 align-self-center">                                                                                                                       
                                    <h4 class="mt-0 mb-1">Login on Smartquiz</h4>
                                    <p class="text-muted mb-0">Sign in to continue to Smartquiz.</p>
                                </div>
                            </div>                            
                            
                            <form class="form-horizontal my-4" action="" method="post" name="fl" id="f_login" onsubmit="return login();">

							<div class="form-group" id="konfirmasi">
							</div>
    
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                        </div>
                                        <input type="text" id="username" name="username" autofocus value="" placeholder="Username"  class="form-control">
                                    </div>                                    
                                </div>
    
                                <div class="form-group">
                                    <label for="userpassword">Password</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon2"><i class="mdi mdi-key font-16"></i></span>
                                        </div>
                                        <input  type="password" id="password" name="password" value="" placeholder="Password"  class="form-control">
                                    </div>                                
                                </div>
    
                                <div class="form-group row mt-4">
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                            <label class="custom-control-label" for="customControlInline">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <a href="pages-recoverpw-2.html" class="text-muted font-13"><i class="mdi mdi-lock"></i> Forgot your password?</a>                                    
                                    </div>
                                </div>
    
                                <div class="form-group mb-0 row">
                                    <div class="col-12 mt-2">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                                    </div>
                                </div> 

								

                            </form>
                        </div>
                                              
                    </div>
                </div>
            </div>
            <div class="col-lg-9 p-0 d-flex justify-content-center">
                <div class="accountbg d-flex align-items-center"> 
                    <div class="account-title text-white text-center">
                        <!-- <img src="assets/images/logo-sm.png" alt="" class="thumb-sm"> -->
                        <h4 class="mt-3">Welcome To Smartquiz</h4>
                        <div class="border w-25 mx-auto border-primary"></div>
                        <h1 class="">Let's Get Started</h1>
                        <!-- <p class="font-14 mt-3">Don't have an account ? <a href="" class="text-primary">Sign up</a></p> -->
                       
                    </div>
                </div>
            </div>
        </div>



<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/metisMenu.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/waves.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
<script type="text/javascript">
	base_url = "<?php echo base_url(); ?>";
	uri_js = "<?php echo $this->config->item('uri_js'); ?>";
</script>
<script src="<?php echo base_url(); ?>___/js/aplikasi.js"></script> 
</body>
</html>
