<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<body class="login-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="<?=base_URL()?>welcome">
        Simakopp </a>        
      </div>      
    </div>
  </nav>

  <div class="page-header header-filter" style="background-image: url('<?=base_URL()?>assets/img/bg7.jpg'); background-size: cover; background-position: top center;">
  <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" method="" action="">
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Simakopp</h4>                
              </div>
              <p class="description text-center">Sistem Manajemen Komplain Pemeliharaan</p>
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="First Name...">
                </div>                
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" class="form-control" placeholder="Password...">
                </div>
              </div>
              <div class="footer text-center">
                <a href="<?=base_URL()?>dashboard" class="btn btn-primary">Login</a>
              </div>
            </form>
          </div>
        </div>
      </div>
  </div>
     
    <footer class="footer">
      <div class="container">
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, by<a href="#" target="_blank">Simakopp.
      </div>
      </div>
    </footer>