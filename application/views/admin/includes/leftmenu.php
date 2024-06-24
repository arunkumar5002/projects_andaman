<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="./assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>ANDAMAN</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>assets\images\favicon_2.png" alt=""  />
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
    <link rel="stylesheet" href="<?php echo base_url();?>assetsad/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Include DataTables CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assetsad/css/dataTable/dataTables.bootstrap4.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assetsad/css/dataTable/dataTables.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assetsad/css/dataTable/dataTables.dateTime.min.css" />
    <script src="<?php echo base_url();?>assetsad/js/dataTable/jquery-3.7.1.js"></script>
    <!-- Include SelectBox CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assetsad/multiselect/dist/css/bootstrap-multiselect.css">
    <!-- Application CSS -->         
    <link rel="stylesheet" href="<?php echo base_url();?>assetsad/toastr/css/toastr.css">

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?php echo base_url();?>assetsad/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?php echo base_url();?>assetsad/js/config.js"></script>
    


  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo " style="height:100px;">
            <a href="<?php echo base_url()?>dashboard" class="app-brand-link">
						<img src="<?php echo base_url(); ?>assets\images\logo_2.png" alt="logo_andaman" style="width:100%;">
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1" >
            <!-- Dashboard -->
            <li class="menu-item ">
              <a href="<?php echo base_url()?>dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li> 
			
			<li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-credit-card-front"></i>
                <div data-i18n="Authentications">Banner</div>
              </a>
              <ul class="menu-sub">               
                <li class="menu-item">
                  <a href="<?php echo base_url()?>banner" class="menu-link" >
                    <div>create</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="<?php echo base_url()?>banner/banner_list" class="menu-link" >
                    <div>List</div>
                  </a>
                </li>
              </ul>
            </li>
			
			<li class="menu-item ">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-package"></i>
                <div data-i18n="Authentications">Package</div>
              </a>
              <ul class="menu-sub"> 
                <li class="menu-item">
                  <a href="<?php echo base_url()?>package/package_create" class="menu-link" >
                    <div>create Category</div>
                  </a>
                </li> 
                <li class="menu-item">
                  <a href="<?php echo base_url()?>package/package_type" class="menu-link" >
                    <div>Package Type</div>
                  </a>
                </li> 				
                <li class="menu-item">
                  <a href="<?php echo base_url()?>package" class="menu-link" >
                    <div>Select Package</div>
                  </a>
                </li>
				
                <li class="menu-item">
                  <a href="<?php echo base_url()?>package/package_list" class="menu-link" >
                    <div>package List</div>
                  </a>
                </li>
              </ul>
            </li>
			
			<li class="menu-item ">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-credit-card-front"></i>
                <div data-i18n="Authentications">Gallery</div>
              </a>
              <ul class="menu-sub">               
                <li class="menu-item">
                  <a href="<?php echo base_url()?>gallery" class="menu-link " >
                    <div>create</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="<?php echo base_url()?>gallery/gallery_list" class="menu-link" >
                    <div>List</div>
                  </a>
                </li>
              </ul>
            </li>
			
			<li class="menu-item ">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-category"></i>
                <div data-i18n="Authentications">Blog</div>
              </a>
              <ul class="menu-sub">               
                <li class="menu-item">
                  <a href="<?php echo base_url()?>blog" class="menu-link " >
                    <div>create</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="<?php echo base_url()?>blog/blog_list" class="menu-link " >
                    <div>List</div>
                  </a>
                </li>
              </ul>
            </li>
            
            <li class="menu-item ">
              <a href="<?php echo base_url()?>web/enquiry_list" class="menu-link">
                <i class="menu-icon tf-icons bx bx-food-menu"></i>
                <div data-i18n="Analytics">Enquriy</div>
              </a>
            </li> 
			
			<li class="menu-item ">
              <a href="<?php echo base_url()?>web/contacts_list" class="menu-link">
                <i class="menu-icon tf-icons bx bx-food-menu"></i>
                <div data-i18n="Analytics">Contacts</div>
              </a>
            </li>
			
          </ul>
        </aside>
        <!-- / Menu -->
