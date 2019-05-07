<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Wheel Tire | Login</title>

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
  background-image: url("assets/images/background.png"); 
	background-repeat: no-repeat;
	background-size: 100% 100%;
  height: 100%;
}
.border-slate-300 {
	border-color: #F37333 !important;
}
</style>
<body>

<div class="page-content"> 
  
  <!-- Main content --> 
  <div class="content-wrapper"> 
    
      <div class="content d-flex align-items-center justify-content-center">
        <!-- <div class="col-md-4">
        </div> -->
        <div class="col-md-4">
          <div class="card">
            <div class="card-header header-elements-inline" style="background: #708bea;height: 95px;">
            </div>
            <div class="card-body" style="margin-top: 40px;">
              <div class="text-center" style="font-size: 25px;margin-bottom: 35px;">
                <span class="font-weight-semibold" style="margin-right: 25px;color: #96a2ce;">Log In</span>
                <a href="<?php echo base_url('register'); ?>"><span class="font-weight-semibold" style="margin-left: 25px;color: #797373;">Sign Up</span></a>
              </div>
              <form action="<?php echo site_url('login/user_login'); ?>" method="POST">
                <?php if ($this->session->flashdata("error")) { ?>
                <div class="alert alert-danger border-0 alert-dismissible">
                <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                <?php echo $this->session->flashdata("error"); ?> </div>
                <?php } ?>
              <div class="form-group">
                <label for="name">Email Address</label>
                <input type="text" class="form-control" name="email" placeholder="Enter your email">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter password ">
              </div>
              <div class="text-center" style="margin-top: 45px;">
                <input type="submit" style="background: #6178ca;margin-bottom: 15px;" class="btn btn-primary" value="Log in">
              </div> 
              </form>
            </div>
          </div>
        </div>
      </div>
  </div> 
</div>

</body>
</html>