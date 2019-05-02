<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Senior Agency Care | Login</title>

<!-- Global stylesheets -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/css/layout.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/css/components.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/css/colors.min.css" rel="stylesheet" type="text/css">
<!-- /global stylesheets -->

<!-- Core JS files -->
<script src="<?php echo base_url(); ?>/assets/js/main/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/main/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/plugins/loaders/blockui.min.js"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script src="<?php echo base_url(); ?>/assets/js/plugins/forms/selects/select2.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/plugins/forms/styling/uniform.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/demo_pages/form_layouts.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/demo_pages/form_checkboxes_radios.js"></script>
<!-- /theme JS files -->

</head>
<style type="text/css">
body {
	/*background-image: url("assets/images/backgrounds/background.jpg");*/
	background-repeat: no-repeat;
	background-size: 100% 100%;
}
.border-slate-300 {
	border-color: #F37333 !important;
}
</style>
<body>

<!-- Page content -->
<div class="page-content"> 
  
  <!-- Main content -->
  <div class="content-wrapper"> 
    <!-- <div class="row justify-content-center align-items-center">
      <div class="col-md-2"></div>
      <div class="col-md-4">fdgfdgdfgfdgfdgdf</div></div> -->
    <!-- Content area -->
    <div class="content d-flex justify-content-center align-items-center"> 
      
      <!-- Login form -->
      <form class="login-form"  method="POST">
        <div class="card">
              <div class="card-header header-elements-inline" style="background: #708bea;height: 75px;">
              </div>

              <div class="card-body" style="margin-top: 40px;">
                <ul class="nav nav-pills nav-justified" >
                  <li class="nav-item"><a href="#justified-rounded-pill1" style=" font-size: 20px;" class="nav-link rounded-round active" data-toggle="tab">Sign Up</a></li>
                  <li class="nav-item"><a href="#justified-rounded-pill2" style="font-size: 20px;" class="nav-link rounded-round" data-toggle="tab">Sign In</a></li>
                </ul>

                <div class="tab-content" style="margin-top: 35px;">
                  <div class="tab-pane fade show active" id="justified-rounded-pill1">
                    <div class="form-group">
                      <label for="company_id">Company ID</label>
                      <input type="text" class="form-control" name="company_id" placeholder="Enter your company id">
                    </div>
                    <div class="form-group">
                      <label for="full_name">Full Name</label>
                      <input type="text" class="form-control" name="full_name" placeholder="Enter your full name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email Address</label>
                      <input type="text" class="form-control" name="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="text" class="form-control" name="password" placeholder="Enter your password">
                    </div>
                    <div class="text-center">
                      <input type="submit" class="btn btn-primary" value="Sign Up">
                    </div>
                  </div>

                  <div class="tab-pane fade" id="justified-rounded-pill2">
                    <div class="form-group">
                      <label for="name">Email Address</label>
                      <input type="text" class="form-control" name="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="text" class="form-control" name="password" placeholder="Enter password ">
                    </div>
                    <div class="text-center">
                      <input type="submit" class="btn btn-primary" value="Login">
                    </div>
                  </div>
                </div>
              </div>
            </div>
        <!--<div class="card ">
          <div class="card-body">
            <div class="text-center mb-3"> <i style="color: #F37333;" class="icon-people icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
              <h5 class="mb-0">Login to your account</h5>
              <span class="d-block text-muted">Your credentials</span>
               <?php //if($this->session->flashdata("error")){ ?> 
              <div class="alert alert-danger border-0 alert-dismissible">
                <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                 <?php //echo $this->session->flashdata("error"); ?> </div>
              <?php //} ?>
            </div>
            <div class="form-group form-group-feedback form-group-feedback-left">
              <input type="text" name="email_address" class="form-control" placeholder="Email">
              <div class="form-control-feedback"> <i class="icon-user text-muted"></i> </div>
            </div>
            <div class="form-group form-group-feedback form-group-feedback-left">
              <input type="password" name="password" class="form-control" placeholder="Password">
              <div class="form-control-feedback"> <i class="icon-lock2 text-muted"></i> </div>
            </div>
            <div class="form-group d-flex align-items-center">
              <div class="form-check mb-0">
                <label class="form-check-label">
                  <input type="checkbox" name="remember" class="form-input-styled" checked data-fouc>
                  Remember </label>
              </div>
              <a href="login_password_recover.html" class="ml-auto">Forgot password?</a> </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
            </div>
            <div class="form-group text-center text-muted content-divider"> <span class="px-2">Don't have an account?</span> </div>
            <div class="form-group"> <a href="<?php //echo base_url("agency/register"); ?>" class="btn btn-light btn-block">Sign up</a> </div>
            <span class="form-text text-center text-muted">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span> </div>
        </div> -->
      </form>
      <!-- /login form --> 
      
    </div>
    <!-- /content area --> 
    
  </div>
  <!-- /main content --> 
  
</div>
<!-- /page content -->

</body>
</html>