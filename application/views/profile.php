<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!--start container-->
<div class="container">

<div id="profile-page" class="section">
  <!-- profile-page-header -->
  <div id="profile-page-header" class="card">
      <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="<?=base_URL()?>assets/img/user-profile-bg.jpg" alt="user background">                    
      </div>
      <figure class="card-profile-image">
          <img src="<?=base_URL()?>assets/img/avatar.jpg" alt="profile image" class="circle z-depth-2 responsive-img activator">
      </figure>
      <div class="card-content">
        <div class="row">                    
          <div class="col s3 offset-s2">                        
              <h4 class="card-title grey-text text-darken-4">Roger Waters</h4>
              <p class="medium-small grey-text">Project Manager</p>                        
          </div>
          <div class="col s2 center-align">
              <h4 class="card-title grey-text text-darken-4">10+</h4>
              <p class="medium-small grey-text">Work Experience</p>                        
          </div>
          <div class="col s2 center-align">
              <h4 class="card-title grey-text text-darken-4">6</h4>
              <p class="medium-small grey-text">Completed Projects</p>                        
          </div>                    
          <div class="col s2 center-align">
              <h4 class="card-title grey-text text-darken-4">$ 1,253,000</h4>
              <p class="medium-small grey-text">Busness Profit</p>                        
          </div>                    
          <div class="col s1 right-align">
            <a class="btn-floating activator waves-effect waves-light darken-2 right">
                <i class="mdi-action-perm-identity"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="card-reveal">
          <p>
            <span class="card-title grey-text text-darken-4">Roger Waters <i class="mdi-navigation-close right"></i></span>
            <span><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Project Manager</span>
          </p>

          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
          
          <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +1 (612) 222 8989</p>
          <p><i class="mdi-communication-email cyan-text text-darken-2"></i> mail@domain.com</p>
          <p><i class="mdi-social-cake cyan-text text-darken-2"></i> 18th June 1990</p>
          <p><i class="mdi-device-airplanemode-on cyan-text text-darken-2"></i> BAR - AUS</p>
      </div>
  </div>
  <!--/ profile-page-header -->

  <!-- profile-page-content -->
  <div id="profile-page-content" class="row">
    <!-- profile-page-sidebar-->
    <div id="profile-page-sidebar" class="col s12 m4">
      <!-- Profile About  -->
      <div class="card light-blue">
        <div class="card-content white-text">
          <span class="card-title">About Me!</span>
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>                  
      </div>
      <!-- Profile About  -->

      <!-- Profile About Details  -->
      <ul id="profile-page-about-details" class="collection z-depth-1">
        <li class="collection-item">
          <div class="row">
            <div class="col s5 grey-text darken-1"><i class="mdi-action-wallet-travel"></i> Project</div>
            <div class="col s7 grey-text text-darken-4 right-align">ABC Name</div>
          </div>
        </li>
        <li class="collection-item">
          <div class="row">
            <div class="col s5 grey-text darken-1"><i class="mdi-social-poll"></i> Skills</div>
            <div class="col s7 grey-text text-darken-4 right-align">HTML, CSS</div>
          </div>
        </li>
        <li class="collection-item">
          <div class="row">
            <div class="col s5 grey-text darken-1"><i class="mdi-social-domain"></i> Lives in</div>
            <div class="col s7 grey-text text-darken-4 right-align">NY, USA</div>
          </div>
        </li>
        <li class="collection-item">
          <div class="row">
            <div class="col s5 grey-text darken-1"><i class="mdi-social-cake"></i> Birth date</div>
            <div class="col s7 grey-text text-darken-4 right-align">18th June, 1991</div>
          </div>
        </li>
      </ul>
      <!--/ Profile About Details  -->
      </div>
    </div>
  </div>
</div>