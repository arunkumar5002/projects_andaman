<!DOCTYPE html>
<style>
.card {
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
  animation: slideIn 1s;
}
.multiselect-container {
	
	z-index:9999!important;
	top:93px;
}
/* Animation keyframes */
@keyframes slideIn {
  0% {
    transform: translateY(-100%);
  }
  100% {
    transform: translateY(0);
  }
}
</style>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANDAMAN</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>assets/images/favicon_2.png" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?php echo base_url();?>assetsad/vendor/fonts/boxicons.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assetsad/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assetsad/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assetsad/css/demo.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assetsad/css/style.css" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assetsad/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <!-- Page CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assetsad/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="<?php echo base_url();?>assetsad/vendor/js/helpers.js"></script>
    <!-- Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!-- Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file. -->
    <script src="<?php echo base_url();?>assetsad/js/config.js"></script>
</head>
<body>        
    <!-- Content -->
    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="<?php echo base_url();?>admin" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                    <img src="<?php echo base_url(); ?>assets\images\logo_2.png" alt="logo_andaman" style="width:100%; height:80px">
                  </span>
                 
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Welcome Admin! 👋</h4>
              <?php if (!empty(validation_errors())): ?>
                  <div class="error">
                      <?php echo validation_errors(); ?>
                  </div>
              <?php endif; ?>
              <?php if ($this->session->flashdata('success')): ?>
                  <div class="flash-message_success">
                      <?php echo $this->session->flashdata('success'); ?>
                  </div>
              <?php endif; ?>
              <?php if ($this->session->flashdata('error')): ?>
                  <div class="flash-message_error">
                      <?php echo $this->session->flashdata('error'); ?>
                  </div>
              <?php endif; ?>
              <form id="formAuthentication" class="mb-3" action="<?php echo base_url();?>admin/logincheck" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">UserName</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="username"
                    placeholder="Enter your email"
                    required=required
                    autofocus
                  />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>                   
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                      required=required
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                </div>
              </form>             
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>


</body>
</html>