
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="#"><img src="<?=base_url()?>/public/assets/images/logo4.png" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="#"><img src="<?=base_url()?>/public/assets/images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="fas fa-bars"></span>
        </button>
        <ul class="navbar-nav">
          <li class="nav-item nav-search d-none d-md-flex">
            <div class="nav-link">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-search"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Search" aria-label="Search">
              </div>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item d-none d-lg-flex">
            <a class="nav-link" href="<?=base_url('user/newreq')?>">
              <span class="btn btn-primary">New Request</span>
            </a>
          </li>
          <li class="nav-item dropdown d-none d-lg-flex">
            <div class="nav-link">
              <span class="dropdown-toggle btn btn-outline-dark" id="languageDropdown" data-toggle="dropdown">English</span>
  
            </div>
          </li>
</a>
     <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="<?=base_url()?>/public/assets/images/faces/face.png" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            
          
              <div class="dropdown-divider"></div>
              <a href="<?=base_url('user/pass_reset')?>" class="dropdown-item">
                <i class="fa fa-key text-primary"></i>
                Password Reset 
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?=base_url('userlogout')?>" class="dropdown-item">
              <i class="fas fa-power-off text-primary"></i>
              Logout 
              </a>

            </div>
          </li>
       
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="fas fa-bars"></span>
        </button>
      </div>
    </nav>